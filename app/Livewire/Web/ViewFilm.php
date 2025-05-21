<?php

namespace App\Livewire\Web;

use Livewire\Component;
use \App\Models\Film;

class ViewFilm extends Component

{
    public $film;
    
    public function mount($id)
    {
        $this->film = Film::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.web.view-film');
    }
}
