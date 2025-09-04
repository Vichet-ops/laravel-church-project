<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
  public $title;

  public function __construct($title = 'Grace Brethren Church')
  {
    $this->title = $title;
  }

  public function render()
  {
    return view('layout');
  }
}
