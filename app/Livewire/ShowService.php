<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowService extends Component
{
    public function render()
    {
        $service=Service::all();
        return view('livewire.show-service',compact('service'));
    }
}
