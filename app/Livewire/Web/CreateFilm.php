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
        'cover' => 'required|Image|max:2048',
    ];

    public function createFilm()
    {
        $this->validate();

        Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $this->cover,
        ]);

        $this->reset();
        session()->flash('message', 'Filme cadastrado com sucesso!');
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
