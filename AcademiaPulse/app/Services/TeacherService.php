<?php

namespace  App\Services;

use App\RepositoriesInterfaces\TeacherRepositoryInterface;
use App\ServiceInterfaces\TeacherServiceInterface;

class  TeacherService implements TeacherServiceInterface
{
    public function __construct(private TeacherRepositoryInterface $teacherRepository)
    {
    }

    public function createTeacher(array $data)
    {
        return $this->teacherRepository->createTeacher($data);
    }
    public function getAllTeachers($perPage)
    {
        return $this->teacherRepository->getAllTeachers($perPage);
    }
    
    public function getTeacherById($id)
    {
        return $this->teacherRepository->getTeacherById($id);
    }
    public function updateTeacher($id, array $data)
    {
        return  $this->teacherRepository->updateTeacher($id, $data);
    }
    public function destroyTeacher($id)
    {
        return $this->teacherRepository->getTeacherById($id);
    }
    public function searchTeachers($search)
    {
        return $this->teacherRepository->searchTeachers($search);
    }
}
