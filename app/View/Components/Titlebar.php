<?php
    namespace App\View\Components;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;
    use App\View\Models\Components\TitlebarViewModel;




    class Titlebar extends Component
    {
        public TitlebarViewModel $titleBar;

        public function __construct(TitlebarViewModel $titleBar)
        {
            $this->titleBar = $titleBar;
        }

        public function render() : View|Closure|string
        {
            return view('components.titlebar');
        }
    }
