<?php

namespace  App\Services;

use App\RepositoriesInterfaces\StudentRepositoryInterface;
use App\ServiceInterfaces\StudentServiceInterface;

class  StudentService implements StudentServiceInterface
{

    public function __construct(private StudentRepositoryInterface $studentRepository)
    {
    }

    public function createStudent(array $data)
    {
        $this->studentRepository->createStudent($data);
    }
    public function getAllStudents($perPage)
    {
        return $this->studentRepository->getAllStudents($perPage);
    }
    public function getStudentById($id)
    {
        return $this->studentRepository->getStudentById($id);
    }
    public function updateStudent($id, array $data)
    {
        return  $this->studentRepository->updateStudent($id, $data);
    }
    public function destroyStudent($id)
    {
        return  $this->studentRepository->destroyStudent($id);
    }
    public function searchStudents($search)
    {
        return $this->studentRepository->searchStudents($search);
    }
    
    public function getParents()
    {
        return $this->studentRepository->getParents();
    }
    public function getActiveClasses()
    {
        return  $this->studentRepository->getActiveClasses();
    }
    public function getStudentWithParent($id)
    {
        return $this->studentRepository->getStudentWithParent($id);
    }
}
