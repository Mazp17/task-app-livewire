<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function saveImage()
    {
        return response()
            ->json("ok", 200);
    }
}
