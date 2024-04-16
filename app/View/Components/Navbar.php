<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Navbar extends Component
{
   
    public $navigation = [];
    public $navItem ;

    public function __construct()
    {
        if(Auth::check()){
            if(Auth::user()->rules === 'admin'){
                $this->navigation = [
                    [
                        'navName' => 'Home',
                        'directlink' => '/',
                        'alreadyExist' => false,
                    ],
                ];
            }else{
                $this->navigation = [
                    [
                        'navName' => 'Home',
                        'directlink' => '/',
                        'alreadyExist' => false,
                    ] ,
                    [
                        'navName' => 'Sertifikasi',
                        'directlink' => 'sertifikasi',
                        'alreadyExist' => true
                    ]
                ];
            }
        }

        $this->navItem = collect($this->navigation);

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
