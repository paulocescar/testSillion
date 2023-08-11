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
        return $this->dataAdapter($data, $type);
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