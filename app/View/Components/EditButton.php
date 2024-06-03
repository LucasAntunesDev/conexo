<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditButton extends Component
{
    
    public $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.edit-button');
    }
}
