<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\View\Models\PageViewModel;

    class LoginController extends Controller
    {
        public function __invoke()
        {
            $page = new PageViewModel([
                'title' => __('auth.login.title')
            ]);
            return view('auth.login', compact('page'));
        }

        public function handle(Request $request)
        {
            return redirect()->route('dashboard');
        }
    }
