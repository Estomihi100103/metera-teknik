<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;

class ProductSidebar extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::with(['brands.products' => function ($query) {
            $query->where('status', 'active');
        }])->where('is_active', true)->get();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-sidebar');
    }
}
