<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowProduct extends Component
{
    public $isproducts;
    public $brands;

    public function __construct($isproducts, $brands)
    {
        $this->isproducts = $isproducts;
        $this->brands = $brands;
    }

    public function render(): View|Closure|string
    {
        return view('components.show-product');
    }
}
