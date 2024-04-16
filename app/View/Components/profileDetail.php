<?php

namespace App\View\Components;

use App\Models\Certification;
use Illuminate\View\Component;

class profileDetail extends Component
{
    
    public $userId;
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user = Certification::where('user_id',$this->userId)->first();
        return view('components.profile-detail', compact('user'));

    }
}
