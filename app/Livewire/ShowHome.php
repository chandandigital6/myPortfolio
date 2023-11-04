<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $service=Service::all();
        return view('livewire.show-home',compact('service'));
    }
}
