<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Search extends Component
{
    public $query;
    public $users;
    public $current;

    public function mount()
    {
        $this->reset();
        $this->current = -1;
    }

    public function down()
    {
        $this->current++;

        if ($this->users->count() === $this->current) {
            $this->current = -1;
        }
    }

    public function up()
    {
        $this->current--;

        if ( -1 > $this->current) {
            $this->current = $this->users->count() - 1;
        }
    }

    public function selectUser()
    {
        return redirect()->route('profile', $this->users[$this->current]->id);
    }

    public function render()
    {
        $this->users = User::where('name', 'like', '%' . $this->query . '%')->get();

        return view('livewire.search');
    }
}
