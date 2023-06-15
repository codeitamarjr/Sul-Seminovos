<?php

namespace App\View\Components;

use App\Models\Features;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Feature extends Component
{
    public $features;
    public $form;
    /**
     * Create a new component instance.
     */
    public function __construct(Features $features, bool $form = false)
    {
        $this->features = $features;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.features');
    }
}
