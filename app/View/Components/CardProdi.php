<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProdi extends Component
{
    public $image;
    public $id;
    public $name;
    public $isLight;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $name, $id, $isLight)
    {
        //
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        if ($isLight == true) {
            $this->isLight = "text-white";
        } else {
            $this->isLight = "";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card-prodi');
    }
}
