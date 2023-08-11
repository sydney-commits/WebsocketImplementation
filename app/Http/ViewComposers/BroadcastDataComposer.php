<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Events\ChatMessage;

class BroadCastDataComposer 
{
    public function compose(View $view){

       $data = event(new ChatMessage('sydney'));

       $view->with('mydata', $data);
    

    }
}