<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\FIPEController;

class CreateAd extends Component
{
    public $carBrands;

    /**
     * Create a new component instance.
     */
    public function __construct(FIPEController $fipe)
    {
        $this->carBrands = $fipe->getCarBrands();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.create-ad');
    }
}
