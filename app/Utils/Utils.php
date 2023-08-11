<?php

namespace App\Utils;

use Carbon\Carbon;

class Utils
{
    public static function formatCreditCardNumbers($numbers)
    {
        $numbers .= "-0000";

        return $numbers;
    }

    public static function formatDataPtBR($data)
    {
        return Carbon::parse($data)->format("d/m/Y");
    }

    public static function convertXmlToJson($data)
    {
        $xml = simplexml_load_string($data);
        $json = json_encode($xml);
        $jsonResponse = json_decode($json, TRUE);
        return $jsonResponse['object'];
    }
}