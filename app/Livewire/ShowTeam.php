<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeam extends Component
{
    public function render()
    {
        $team=Member::all();
        return view('livewire.show-team',compact('team'));
    }
}
