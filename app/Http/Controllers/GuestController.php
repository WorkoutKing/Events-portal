<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function addReg(Events $events, Request $request){
        return view('pages.register-event', compact('events',$events));
        
    }

    public function storeReg(Request $request){    
        Guest::create([
            'events_id'=>request('events_id'),
            'name'=>request('name'),
            'email'=>request('email'),
            'phone'=>request('phone'),
        ]);
        return redirect('/');
    }

    public function approve(Guest $guest, Events $events){
        $guest = Guest::all();
        $events = Events::all();
        return view('pages.approve', compact('guest',$guest,$events, 'events'));
    }
    public function deleteGuest(Guest $guest){
        $guest->delete();
        return redirect('/approve');
    }
    public function updateGuest(Guest $guest){
        return view('pages.app-reg', compact('guest'));
    }
    public function storeUpdateGuest(Guest $guest, Request $request){
        Guest::where('id', $guest->id)->update($request->only(['status']));
        return redirect('/approve');
    }
}
