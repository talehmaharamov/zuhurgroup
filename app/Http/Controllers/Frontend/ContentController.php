<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function show($slug): View
    {
        $content = Content::where('slug', $slug)->first();
        return view('frontend.content.show', get_defined_vars());
    }
}
