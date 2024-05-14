<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index() {
        return view('app');
    }

    public function getPages() {

        $pages = Page::select('id', 'name', 'slug', 'body', 'info_squares')->get();
        return response()->json($pages);
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

        // You can return a view passing the page content to it
        return response()->json($page_data);

    }

}

