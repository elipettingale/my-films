<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;

class MyFilms extends Component
{
    public $films = [];
    public $search = '';

    public function mount()
    {
        $this->films = Film::query()
            ->where('user_id', auth()->user()->id)
            ->get();
    }

    public function updatedSearch($value)
    {
        $this->films = Film::query()
            ->where('user_id', auth()->user()->id)
            ->where('title', 'LIKE', "%{$value}%")
            ->get();
    }

    public function render()
    {
        return view('livewire.my-films');
    }
}
