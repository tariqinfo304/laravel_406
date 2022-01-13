<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    private $type;
    private $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $listing = [1,2,3,5,6,6];
        return view('components.alert')
                ->with("list",$listing)
                ->with("name",$this->name);
    }
}
