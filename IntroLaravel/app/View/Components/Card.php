<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $encabezado;
    public $titulo;
    public $textoboton;
    public function __construct($encabezado,$titulo,$textoboton)
    {
        $this->encabezado=$encabezado;
        $this->titulo=$titulo;
        $this->textoboton=$textoboton;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
