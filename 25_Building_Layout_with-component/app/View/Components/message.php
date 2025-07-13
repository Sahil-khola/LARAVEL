<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{
    public $message;
    public $greets;
    public function __construct($message, $greets)
    {
        $this->message = $message;
        $this->greets = $greets;
    }
    

    
    
    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
