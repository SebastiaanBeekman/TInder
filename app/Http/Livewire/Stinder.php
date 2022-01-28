<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Stinder extends Component
{
    public $image;

    public function render()
    {
        $this->image = asset('storage/' .auth()->user()->student_number . '.png');

        return view('livewire.stinder');
    }
}
