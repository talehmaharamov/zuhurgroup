<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('frontend.content.index', get_defined_vars());
    }
}
