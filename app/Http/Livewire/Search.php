<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Search extends Component
{
    public $query;
    public $users;

    public function mount()
    {
        $this->reset();
    }
    public function render()
    {
        $this->users = User::where('name', 'like', '%' . $this->query . '%')->get();

        return view('livewire.search');
    }
}
