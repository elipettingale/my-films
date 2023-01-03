<?php

namespace App\Http\Livewire;

use App\Models\Film;
use Livewire\Component;

class AddFilmForm extends Component
{
    public $title;
    public $image;
    public $release;
    public $summary;

    public function submitForm()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required|url',
            'release' => 'required',
            'summary' => 'required'
        ]);

        Film::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'image' => $this->image,
            'release' => $this->release,
            'summary' => $this->summary
        ]);

        $this->title = null;
        $this->image = null;
        $this->release = null;
        $this->summary = null;

        $this->dispatchBrowserEvent('close-modal', 'addFilm');
    }

    public function render()
    {
        return view('livewire.add-film-form');
    }
}
