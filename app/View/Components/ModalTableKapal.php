<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalTableKapal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $select;
    
    public function __construct($select)
    {
        $this->select = $select;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-table-kapal');
    }
}
