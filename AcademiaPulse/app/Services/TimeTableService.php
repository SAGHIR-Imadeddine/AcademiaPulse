<?php

namespace App\Services;

use App\RepositoriesInterfaces\TimeTableRepositoryInterface;
use App\ServiceInterfaces\TimeTableServiceInterface;

class TimeTableService implements TimeTableServiceInterface
{
    public function __construct(private TimeTableRepositoryInterface $timeTableRepository)
    {
    }

    public function createTimeTable(array $data)
    {
        return $this->timeTableRepository->createTimeTable($data); 
    }

    public function getAllTimeTable($perPage)
    {
        return $this->timeTableRepository->getAllTimeTable($perPage);
    }

    public function getTimeTableById($id)
    {
        return $this->timeTableRepository->getTimeTableById($id);
    }

    public function updateTimeTable($id, array $data)
    {
        return $this->timeTableRepository->updateTimeTable($id, $data); 
    }

    public function destroyTimeTable($id)
    {
        return $this->timeTableRepository->destroyTimeTable($id); 
    }

    public function getClassSubjects()
    {
        return $this->timeTableRepository->getClassSubjects();
    }

    public function getClassById($classId)
    {
        return $this->timeTableRepository->getClassById($classId);
    }
    

    public function getTimeTableByClassId($id)
    {
        return $this->timeTableRepository->getTimeTableByClassId($id);
    }

    public function getSubjectsByClassId($id)
    {
        return $this->timeTableRepository->getSubjectsByClassId($id);
    }

    public function getSubjectsForClass($classId)
    {
        return $this->timeTableRepository->getSubjectsForClass($classId);
    }
    
    
}

 