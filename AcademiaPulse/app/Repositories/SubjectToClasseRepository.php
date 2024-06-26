<?php

namespace App\Repositories;

use App\Models\Classe;
use App\Models\Subject;
use App\Models\SubjetToClass;
use App\RepositoriesInterfaces\SubjectToClasseRepositoryInterface;

class SubjectToClasseRepository implements SubjectToClasseRepositoryInterface
{
    public function create(array $data)
    {
        return SubjetToClass::create($data);
    }

    public function update(array $data, $id)
    {
        $subjetToClasse = SubjetToClass::findOrFail($id);
        $subjetToClasse->update($data);
        return $subjetToClasse;
    }

    public function subjetToClassID($id)
    {
        return SubjetToClass::findOrFail($id);
    }

    public function delete($id)
    {
        $subjetToClasse = SubjetToClass::findOrFail($id);
       
        $subjetToClasse->delete();
    }

    public function search($query)
    {
        return SubjetToClass::whereHas('classe', function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%');
        })
            ->orWhereHas('subject', function ($queryBuilder) use ($query) {
                $queryBuilder->where('name', 'like', '%' . $query . '%');
            })
            ->with('classe', 'subject')
            ->get();
    }

    public function getAllClasses()
    {
        return Classe::all();
    }

    public function getAllSubjects()
    {
        return Subject::all();
    }

    public function getAllSubjectToClassPaginated($perPage)
    {
        return SubjetToClass::paginate($perPage);
    }
}
