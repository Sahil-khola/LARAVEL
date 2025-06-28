<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{
    
   public $projectName;
   public $projectMessage;
   public $class;

    public function __construct($projectMessage,$projectName,$class)
    {
        $this->projectMessage=$projectMessage;
        $this->projectName=$projectName;
        $this->class=$class;
    }



    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
