<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;

class SobreController extends Controller
{
    public function __construct() {
        $this->middleware(LogAcessoMiddleware::class);
    }

    public function sobre(){
        return view('site.sobre');
    }
}