<?php

namespace  App\Services;

use App\RepositoriesInterfaces\SubjectsRepositoryInterface;
use App\ServiceInterfaces\SubjectServiceInterface;



class  SubjectService implements SubjectServiceInterface
{


    public function __construct(private SubjectsRepositoryInterface $subjectRepository)
    {

    }
    public function createSubject(array $data)
    {
        return  $this->subjectRepository->createSubject($data);
    }
    public function getAllSubjects($perPage)
    {
        return $this->subjectRepository->getAllSubjects($perPage);
    }
    public function getSubjectById($id)
    {
        return $this->subjectRepository->getSubjectById($id);
    }
    public function updateSubject($id, array $data)
    {
        return $this->subjectRepository->updateSubject($id, $data);
    }
    public function destroySubject($id)
    {
        return  $this->subjectRepository->destroySubject($id);
    }
    public function searchSubjects($query)
    {
        $this->subjectRepository->searchSubjects($query);
    }
}
