<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServiceDetails extends Component
{
    public $serviceDetails;
public function mount($id){
    $this->serviceDetails=Service::findOrFail($id);
//    dd($this->serviceDetails);
}
    public function render()
    {
        return view('livewire.show-service-details',[
            'serviceDetails'=>$this->serviceDetails,
        ]);
    }
}
