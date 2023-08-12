<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Business\RandomData\RandomDataBusiness;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;

class RandomDataController extends Controller
{
    private $randomDataBusiness;

    public function __construct(RandomDataBusiness $randomDataBusiness)
    {
        $this->randomDataBusiness = $randomDataBusiness;
    }

    public function randomData($size = 100, $type = "json")
    {
        try{
            $dados = $this->randomDataBusiness->retorno($size, $type);

            if(!$dados)
            {
                throw new HttpException(Response::HTTP_NOT_FOUND, 'Não foi encontrado nenhum dado.');
            }

            return $dados;
        } catch (Exception $error) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, $error->message());
        }
    }
}
