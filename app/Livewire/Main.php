<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.main', [
            'badges' => User::factory()->count(50)->make(),
        ]);
    }
}
