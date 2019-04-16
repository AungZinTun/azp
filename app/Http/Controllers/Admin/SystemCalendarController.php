<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 

        foreach (\App\Client::all() as $client) { 
           $crudFieldValue = $client->getOriginal('date'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $client->date; 
           $prefix         = ''; 
           $suffix         = 'Dated'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('admin.clients.edit', $client->id)
           ]; 
        } 


       return view('admin.calendar' , compact('events')); 
    }

}
