<?php

namespace App\View\Components;

use App\Models\Profiles as ModelsProfiles;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Profiles extends Component
{
    public $profiles;
    public $form;
    /**
     * Create a new component instance.
     */
    public function __construct(ModelsProfiles $profiles, bool $form = false)
    {
        $this->profiles = $profiles;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profiles');
    }
}
