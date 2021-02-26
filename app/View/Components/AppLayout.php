<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    /* El metodo render() me muestra la vista que esta dentro de la carpeta
    layouts y se llama app  */
    public function render()
    {
        return view('layouts.app');
    }
}
