<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function sendResponse($result, $message) {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $result,
        ];

        return response()->json($response);
    }

    public function sendError($error, $code = 404) {
        $response = [
            'success' => true,
            'message' => $error,
        ];

        return response()->json($response, $code);
    }
}
