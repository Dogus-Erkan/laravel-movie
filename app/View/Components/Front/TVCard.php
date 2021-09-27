<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class TVCard extends Component
{
    public $tv,$genresTv;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tv,$genresTv)
    {
       $this->tv=$tv;
       $this->genresTv=$genresTv;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.t-v-card');
    }
}
