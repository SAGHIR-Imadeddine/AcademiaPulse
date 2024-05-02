<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Http\Requests\ExamUpdateRequest;
use App\Models\Classe;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\SubjetToClass;
use Illuminate\Http\Request;
 
use App\ServiceInterfaces\ExamServiceInterface;

class ExamController extends Controller
{
    public function __construct(protected ExamServiceInterface $examService)
    {
    }

    public function index()
    {
        $exams = $this->examService->getAllExams(4);
        $classes = $this->examService->getActiveClasses(); 
        
        return view('admin.exam.exam', compact('exams', 'classes'));
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function storeExam(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string',
            'classe_id' => 'required|exists:classes,id',
            'date' => 'required|date',
            'statut' => 'required|in:activer,desactiver',
        ]);
    
        // Create a new exam instance and store it in the database
        $exam = new Exam();
        $exam->name = $validatedData['name'];
        $exam->classe_id = $validatedData['classe_id'];
        $exam->date = $validatedData['date'];
        $exam->statut = $validatedData['statut'];
        $exam->save();
    
        // Redirect back to the exams index page with a success message
        return redirect()->route('exams.index')->with('success', 'Exam added successfully.');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classes = $this->examService->getActiveClasses();
        $exam = $this->examService->getExamById($id);
        return view('admin.exam.update', compact('exam','classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExamUpdateRequest $request, string $id)
    {
        $exams = $request->validated();
    
        $this->examService->updateExam($id, $exams);
 
    
        return redirect()->route('exams.index')->with('success', 'Exam updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->examService->destroyExam($id);
        return redirect()->route('exams.index')->with('success', 'Exam deleted successfully.');

    }


    public function search(Request $request)
    {
        $search = $request->input('search');
    
        $exams = Exam::where('name', 'LIKE', "%$search%")
                     ->get();
    
        return response()->json($exams);
    }
}
