<?php

namespace App\Livewire\Web;

use Livewire\Component;
use \App\Models\Film;
use Livewire\WithFileUploads;

class CreateFilm extends Component
{
    use WithFileUploads;

    public $title;
    public $summary;
    public $cover;

    protected $rules = [
        'title' => 'required|string|max:255',
        'summary' => 'required|string',
        'cover' => 'required|image|max:2048',
    ];

    public function createFilm()
    {

        $this->validate();

        $coverPath = $this->cover->store('covers', 'public');

        $film = Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $coverPath,
        ]);

        return redirect()->route('see', ['id' => $film->id]);
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
