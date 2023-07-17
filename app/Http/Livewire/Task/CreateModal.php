<?php

namespace App\Http\Livewire\Task;


use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateModal extends Component
{
    public bool $isOpen = true;
    protected $listeners = [
        "createModal" =>"open",
        "closeModal" => "close"
    ];

    /**
     * Method for render component
     * @return View
     */
    public function render(): View
    {
        return view('livewire.Task.create-modal');
    }

    public function open(): void
    {
        $this->isOpen = true;
    }

    public function close(): void
    {
        $this->isOpen = false;
    }


}
