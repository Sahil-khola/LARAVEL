<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageBanner extends Component
{
    public $message;
    public $title;
    public function __construct($message,$title)
    {
        $this->message = $message;
        $this->title = $title;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
