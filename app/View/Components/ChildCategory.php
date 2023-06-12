<?php

namespace App\View\Components;

use App\Models\ChildCategory as ChildCategoryModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChildCategory extends Component
{
    public $childcategory;
    public $form;
    /**
     * Create a new component instance.
     */
    public function __construct(ChildCategoryModel $childcategory, $form = false)
    {
        $this->childcategory = $childcategory;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.child-category');
    }
}
