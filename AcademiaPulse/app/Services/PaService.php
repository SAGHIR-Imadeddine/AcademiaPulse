<?php

namespace  App\Services;

use App\RepositoriesInterfaces\PaRepositoryInterface;
use App\ServiceInterfaces\PaServiceInterface;


class  PaService implements PaServiceInterface
{

    public function __construct(private PaRepositoryInterface $paRepository)
    {
    }

    public function index()
    {
        return $this->paRepository->index();
    }
    public function myChildren()
    {
        return  $this->paRepository->myChildren();
    }
    public function myChildrenSubjects($id)
    {
        return $this->paRepository->myChildrenSubjects($id);
    }
}
