<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
   
    public $certificate;
    public function __construct($certificate)
    {
        $this->certificate = $certificate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
