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
        $randomApiUrl = env('RANDOM_API_URL');
        $response = Http::get($randomApiUrl.'/v2/users?size='.$size.'&response_type='.$type);

        return $response;
    }
}