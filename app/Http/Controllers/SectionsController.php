<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index()
    {
        return view('sections.index');
    }

    public function postsOfSection($sectionId)
    {
        dd($sectionId);
    }
}
