<?php

namespace App\Livewire;

use Livewire\Component;
use Native\Laravel\Client\Client;
use Native\Laravel\Facades\System;

class OneOff extends Component
{
    public string $name = 'Andy Newhouse';
    public string $pronouns = 'they/them';

    public function render()
    {
        return view('livewire.one-off')
            ->with([
                'printers' => $this->printers,
            ]);
    }

    public function getPrintersProperty()
    {
        return System::printers();
    }

    public function print(): void
    {
        System::print("<h1>Pathfinder</h1>", $this->printers[0]);
    }
}
