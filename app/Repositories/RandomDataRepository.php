<?php

namespace App\Repositories;

use App\Http\Resources\RandomDataResources;
use App\Models\RandomData;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;


Class RandomDataRepository
{
    public function retorno($size, $type)
    {
        try{
            $response = Http::get('https://random-data-api.com/api/v2/users?size='.$size.'&response_type='.$type);

            return $response;
        } catch (Exception $error) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, $error->message());
        }
    }
}