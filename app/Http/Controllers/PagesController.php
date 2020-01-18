<?php

namespace App\Http\Controllers;

//Request library
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // Pass value to blade
        $title = 'This is home page';
        // Method I
        // return view('Pages.index', compact('title'));
        // Method II
        return view('Pages.index')->with('title', $title);
    }

    public function about() {
        // Return view to route
        return view('Pages.about');
    }

    public function services() {
        // Pass multiple value to blade
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'Programming']
        );
        
        return view('Pages.services')->with($data);
    }
}
