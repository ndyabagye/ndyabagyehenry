<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ListsController extends Controller
{
    public function __invoke(Request $request): View
    {
        $navItems = config('constants.navItems');

        return view('lists', ['nav' => $navItems]);
    }
}
