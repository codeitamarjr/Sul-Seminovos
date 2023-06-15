<?php

namespace App\View\Components;

use App\Models\Extras as ModelsExtras;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Extras extends Component
{
    public $extras;
    public $form;
    /**
     * Create a new component instance.
     */
    public function __construct(ModelsExtras $extras, bool $form = null)
    {
        $this->extras = $extras;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.extras');
    }
}
