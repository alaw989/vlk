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

        $pages = Page::select('id', 'name', 'slug')->get();
        logger()->channel('testing_log')->info($pages);
        return response()->json($pages);
    }

}

