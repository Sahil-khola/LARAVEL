<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
     public $placeholder;
     public $type;
     public $label;
     public $name;
    public function __construct($placeholder,$type,$label,$name)
    
    {
      $this->placeholder=$placeholder;
      $this->type=$type;
      $this->label=$label;
      $this->name=$name;
        
    }
   
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
