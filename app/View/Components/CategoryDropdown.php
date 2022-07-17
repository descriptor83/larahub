<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class CategoryDropdown extends Component
{
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $currentCategory = Category::where('slug',request('slug'))->first();
        return view('components.category-dropdown',
        [ 'categories' => Category::all(), 'currentCategory' => $currentCategory]);
    }
}
