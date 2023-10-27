<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Native\Laravel\Facades\Window;

class Main extends Component
{
    public function render()
    {
        return view('livewire.main', [
            'badges' => User::factory()->count(50)->make(),
        ]);
    }

    public function openOneOff()
    {
        Window::open('one-off')
            ->route('one-off')
            ->title('One Off - Pathfinder')
            ->width(400)
            ->height(250);
    }
}
