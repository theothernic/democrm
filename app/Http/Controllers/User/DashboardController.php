<?php
    namespace App\Http\Controllers\Users;


    use App\Http\Controllers\Controller;
    use App\View\Models\PageViewModel;

    class DashboardController extends Controller
    {
        public function __invoke()
        {
            $page = new PageViewModel([
                'title' => 'Dashboard'
            ]);
            return view('user.dashboard', compact('page'));
        }
    }
