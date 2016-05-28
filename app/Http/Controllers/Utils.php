<?php
/**
 * Created by PhpStorm.
 * User: phearom
 * Date: 5/28/16
 * Time: 2:22 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class Utils
{

    public static function dataFormat($statusCode, $resultCode, $message, $data)
    {
        $response = array(
            'status' => $statusCode,
            'data' => $data,
            'message' => array(
                'code' => $resultCode,
                'description' => $message
            )
        );
        return Response::make(json_encode($response, JSON_PRETTY_PRINT))->header('Content-Type', "application/json");
    }
}