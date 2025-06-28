<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{
    
   public $projectName;
   public $projectMessage;

    public function __construct($projectMessage,$projectName)
    {
        $this->projectMessage=$projectMessage;
        $this->projectName=$projectName;
    }



    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
