<?php

namespace App\ServiceInterfaces;

interface  TeacherServiceInterface
{
    public function createTeacher(array $data);
    public function getAllTeachers($perPage);
    public function getTeacherById($id);
    public function updateTeacher($id, array $data);
    public function destroyTeacher($id);
    public function searchTeachers($search);
    
   
}