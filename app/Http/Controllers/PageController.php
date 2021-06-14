<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke($page)
    {
        return view(view:'pages.' .$page );
    }
}
