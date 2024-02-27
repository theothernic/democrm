<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Auth\LoginRequest;
    use App\Services\AuthService;
    use App\View\Models\PageViewModel;
    use Illuminate\Http\Request;

    class LoginController extends Controller
    {
        public function __construct(
            private readonly AuthService $authService
        )
        {
        }

        public function __invoke()
        {
            $page = new PageViewModel([
                'title' => __('auth.login.title')
            ]);
            return view('auth.login', compact('page'));
        }

        public function handle(LoginRequest $request)
        {
            $data = $request->validated();
            $credentials = ['email' => $data['email'], 'password' => $data['password']];
            if (!$this->authService->login($credentials, $data['remember'] ?? false))
                return redirect()->back()->withErrors([__('auth.failed')]);

            return redirect()->route('dashboard');
        }
    }
