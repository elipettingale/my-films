<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;

class MyFilms extends Component
{
    public $films = null;

    public function mount()
    {
        $this->films = Film::query()
            ->where('user_id', auth()->user()->id)
            ->get();
    }

    public function render()
    {
        return view('livewire.my-films');
    }
}
