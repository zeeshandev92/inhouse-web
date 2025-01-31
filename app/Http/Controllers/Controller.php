<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function redirectSuccess($route, $message)
    {
        return redirect($route)->with('success', $message);
    }

    public function redirectError($message)
    {
        return back()->withErrors(['msg' => $message]);
    }
}
