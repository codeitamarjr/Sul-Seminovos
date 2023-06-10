<?php

namespace App\View\Components;

use App\Models\Category as ModelsCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class category extends Component
{

    public $category;
    public $view;

    /**
     * Create a new component instance.
     */
    public function __construct(ModelsCategory $category, $view = false)
    {
        $this->category = $category;
        $this->view = $view;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category', [
            'category' => $this->category,
            'form' => $this->view,
        ]);
    }
}
