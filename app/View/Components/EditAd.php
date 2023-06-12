<?php

namespace App\View\Components;

use App\Models\Advertisements;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditAd extends Component
{
    public $ad;
    public $form;
    /**
     * Create a new component instance.
     */
    public function __construct(Advertisements $ad, $form = false)
    {
        $this->ad = $ad;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-ad');
    }
}
