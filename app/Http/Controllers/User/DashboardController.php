<?php
    namespace App\Http\Controllers\User;


    use App\Http\Controllers\Controller;
    use App\View\Models\AuthPageViewModel;
    use App\View\Models\PageViewModel;
    use Illuminate\Support\Facades\Auth;

    class DashboardController extends Controller
    {
        public function __invoke()
        {
            $page = new AuthPageViewModel([
                'title' => 'Dashboard',
                'user' => Auth::user()
            ]);
            return view('user.dashboard', compact('page'));
        }
    }
