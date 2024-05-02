<?php
namespace App\Services;

use App\RepositoriesInterfaces\SubjectToClasseRepositoryInterface;
use App\ServiceInterfaces\SubjectToClasseServiceInterface;

class SubjectToClasseService implements SubjectToClasseServiceInterface
{
    public function __construct(private SubjectToClasseRepositoryInterface $subjectToClassRepository)
    {
    }

    public function getAllSubjectToClassPaginated($perPage)
    {
        return $this->subjectToClassRepository->getAllSubjectToClassPaginated($perPage);
    }

    public function create(array $data)
    {
        return $this->subjectToClassRepository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->subjectToClassRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->subjectToClassRepository->delete($id);
    }

    public function search($query)
    {
        return $this->subjectToClassRepository->search($query);
    }

    public function subjetToClassID($id)
    {
        return $this->subjectToClassRepository->subjetToClassID($id);
    }

    public function getAllClasses()
    {
        return $this->subjectToClassRepository->getAllClasses();
    }

    public function getAllSubjects()
    {
        return $this->subjectToClassRepository->getAllSubjects();
    }
}
