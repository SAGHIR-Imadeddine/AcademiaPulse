<?php

namespace  App\Services;

use App\ServiceInterfaces\ExamServiceInterface;

 use App\RepositoriesInterfaces\ExamRepositoryInterface;

class  ExamService implements ExamServiceInterface
{
    public function __construct(private ExamRepositoryInterface $exmaRepository)
    {
    }
   
    public function createExam(array $data)
    {
        return  $this->exmaRepository->createExam($data);
    }
    public function getAllExams($perPage)
    {
        return $this->exmaRepository->getAllExams($perPage);
    }
    public function getExamById($id)
    {
        return $this->exmaRepository->getExamById($id);
    }
    public function updateExam($id, array $data)
    {
        return $this->exmaRepository->updateExam($id, $data);
    }
    public function destroyExam($id)
    {
        return  $this->exmaRepository->destroyExam($id);
    }
    public function getActiveClasses(){
        return $this->exmaRepository->getActiveClasses();
    }
    
}

