<?php

namespace App\Http\Controllers;
use Event;
use App\Events\GitEvent as GitEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

  public function deploy()
  {
    $event = new GitEvent;
    Event::fire($event->push());
  }
}
