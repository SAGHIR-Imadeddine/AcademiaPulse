<?php

namespace App\Repositories;

use App\Models\Classe;
use App\Models\Exam;
 
use App\RepositoriesInterfaces\ExamRepositoryInterface;


class ExamRepository implements ExamRepositoryInterface
{

    public function createExam(array $data)
    {
        return Exam::create($data);
    }

    public function getAllExams($perPage)
    {
       return Exam::orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function getExamById($id)
    {
        return Exam::findOrFail($id);
    }

    public function updateExam($id, array $data)
    {
        $exam = Exam::findOrFail($id);
        $exam->update($data);

        return $exam;
    }

    public function destroyExam($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();
    }

    public function getActiveClasses(){
        return Classe::where('statut', 'activer')->get();
    }

}
