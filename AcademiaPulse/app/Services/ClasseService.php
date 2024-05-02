<?php

namespace  App\Services;

use App\RepositoriesInterfaces\ClasseRepositoryInterface;
use App\ServiceInterfaces\ClasseServiceInterface;

class  ClasseService implements ClasseServiceInterface
{
    public function __construct(private ClasseRepositoryInterface $classeRepository)
    {
    }
    public function createclasse(array $data)
    {
        return  $this->classeRepository->createclasse($data);
    }
    public function getAllclasses($perPage)
    {
        return $this->classeRepository->getAllclasses($perPage);
    }
    public function getclasseById($id)
    {
        return $this->classeRepository->getclasseById($id);
    }
    public function updateclasse($id, array $data)
    {
        return $this->classeRepository->updateclasse($id, $data);
    }
    public function destroyclasse($id)
    {
        return  $this->classeRepository->destroyclasse($id);
    }
    public function searchclasses($query)
    {
       return $this->classeRepository->searchclasses($query);
    }

    public function absenceClasses($perPage){
        return $this->classeRepository->absenceClasses($perPage);
    }
    
}
