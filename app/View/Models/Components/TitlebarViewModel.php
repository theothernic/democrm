<?php
    namespace App\View\Models\Components;


    use Bearlovescode\Datamodels\View\PageViewModel;

    class TitlebarViewModel extends PageViewModel
    {
        public string $brand;
        public function __construct(mixed $data = null)
        {
            parent::__construct($data);
        }
    }
