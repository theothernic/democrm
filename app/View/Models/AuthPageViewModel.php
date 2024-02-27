<?php
    namespace App\View\Models;

    use Illuminate\Contracts\Auth\Authenticatable;
    use Illuminate\Support\Facades\Auth;

    class AuthPageViewModel extends PageViewModel
    {
        public Authenticatable $user;

        public function __construct(mixed $data = null)
        {
            parent::__construct($data);
        }
    }
