<?php

namespace App\Http\Controllers;


use App\Models\Page;
use Illuminate\Support\Facades\Request;

class PageController extends Controller
{
    public function index() {
        return view('app');
    }

    public function getPages() {
        $pages = Page::select('id', 'name', 'slug', 'body', 'info_squares')->get();

        // Check if the request wants JSON response
        if(Request::wantsJson()) {
            return response()->json($pages);
        } else {
            return view('app');
        }
    }

    public function getPage($slug)
    {
        // Retrieve the page content based on the slug
        $page = Page::where('slug', $slug)->firstOrFail();
        $pages = Page::select('id', 'name', 'slug')->get();

        $page_data = [
            'page' => $page,
            'pages' => $pages
        ];

        // Check if the request wants JSON response
        if(Request::wantsJson()) {
            return response()->json($page_data);
        } else {
            return view('app');
        }
    }
}

