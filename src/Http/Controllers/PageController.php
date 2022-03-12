<?php

namespace Oxedition\LaravelWelcomeMinimal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PageController extends Controller
{
    public function show(Request $request)
    {
        return view(request()->segment(1));
    }
}
