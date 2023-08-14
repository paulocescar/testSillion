<?php

namespace App\Business\RandomData;

use Illuminate\Http\Response;
use App\Utils\Utils;

use App\Services\RandomDataServices;

Class RandomDataBusiness
{
    private $randomDataServices;

    public function __construct(RandomDataServices $randomDataServices)
    {
        $this->randomDataServices = $randomDataServices;
    }

    public function retorno($size, $type)
    {
        $data = $this->randomDataServices->retorno($size, $type);
        
        if(!$data->successful()){
            return response()->json(['error' => 'Não foi possivel acessar a rota.'], $data->status());
        }

        $dados = $this->dataAdapter($data, $type);
        return response()->json(["status" => $data->status(), "data" => $dados], 200);
    }

    public function dataAdapter($response, $type)
    {
        switch($type) {
            case "json":
                return $response->json();
            case "xml":
                return Utils::convertXmlToJson($response);
            default:
                return $response;
        }
    }
}