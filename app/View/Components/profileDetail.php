<?php

namespace App\View\Components;

use App\Models\Certification;
use Illuminate\View\Component;

class profileDetail extends Component
{
    
    public $certificateId;
    public function __construct($certificateId)
    {
        $this->certificateId = $certificateId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->certificateId);
        $certificate = Certification::whereId($this->certificateId)->with('user')->first();
        return view('components.profile-detail', compact('certificate'));

    }
}
