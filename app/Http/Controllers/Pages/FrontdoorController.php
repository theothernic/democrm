<?php
    namespace App\Http\Controllers\Pages;

    use App\Http\Controllers\Controller;

    class FrontdoorController extends Controller
    {
        public function __invoke()
        {
            return view('pages.front');
        }
    }
