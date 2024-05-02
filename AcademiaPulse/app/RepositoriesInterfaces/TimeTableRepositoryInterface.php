<?php

namespace App\RepositoriesInterfaces;

interface TimeTableRepositoryInterface
{
    public function createTimeTable(array $data);
    public function getAllTimeTable($perPage);
    public function getTimeTableById($id);
    public function updateTimeTable($id, array $data);
    public function destroyTimeTable($id);
    public function getClassSubjects();
    public function getClassById($id);
    public function getTimeTableByClassId($id);
    public function getSubjectsByClassId($id);
    public function getSubjectsForClass($classId);
    
   
    
     
}