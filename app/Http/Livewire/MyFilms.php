<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;
use Livewire\WithPagination;

class MyFilms extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->resetPage();
    }

    public function render()
    {
        $films = Film::query()
            ->where('user_id', auth()->user()->id)
            ->where('title', 'LIKE', "%{$this->search}%")
            ->paginate(4);

        return view('livewire.my-films', [
            'films' => $films
        ]);
    }
}
