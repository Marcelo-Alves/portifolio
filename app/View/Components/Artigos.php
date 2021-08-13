<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Artigos extends Component
{
   public $categorias;
    public function __construct()
    {
        $categoria = DB::table('categoria')->get();

        $this->categorias = $categoria;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.artigos');
    }
}
