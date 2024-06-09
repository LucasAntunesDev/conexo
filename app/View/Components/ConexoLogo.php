<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConexoLogo extends Component {
    public $class;
    public function __construct($class = 'inline-flex gap-x-1 max-w-48 text-red-700 text-sm mt-1') {
        $this->class = $class;
    }

    public function render(): View|Closure|string {
        return view('components.conexo-logo');
    }
}
