<?php

namespace App\View\Components;

use App\Models\Subcategory as SubcategoryModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class subcategory extends Component
{

    public $subcategory;
    public $view;

    /**
     * Create a new component instance.
     */
    public function __construct(SubcategoryModel $subcategory, $view = false)
    {
        $this->subcategory = $subcategory;

        $this->view = $view;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.subcategory', [
            'subcategory' => $this->subcategory,
            'form' => $this->view,
        ]);
    }
}
