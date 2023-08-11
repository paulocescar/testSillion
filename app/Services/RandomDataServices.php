<?php

namespace App\Services;

use App\Repositories\RandomDataRepository;

Class RandomDataServices
{
    private $randomDataRepository;

    public function __construct(RandomDataRepository $randomDataRepository)
    {
        $this->randomDataRepository = $randomDataRepository;
    }

    public function retorno($size, $type){
       return $this->randomDataRepository->retorno($size, $type);
    }
}