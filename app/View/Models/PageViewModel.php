<?php
    namespace App\View\Models;

    use App\View\Models\Components\StatusbarViewModel;
    use App\View\Models\Components\TitlebarViewModel;
    use Bearlovescode\Datamodels\View\PageViewModel as BasePageViewModel;

    class PageViewModel extends BasePageViewModel
    {

        public TitlebarViewModel $titleBar;
        public StatusbarViewModel $statusBar;


        public function __construct(mixed $data = null)
        {
            parent::__construct($data);

            $this->titleBar = new TitlebarViewModel([
                'brand' => config('app.name'),
                'title' => $data['title']
            ]);
            $this->statusBar = new StatusbarViewModel();

        }
    }
