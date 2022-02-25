<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Guest;
use App\Models\User;

class EventsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>['index','showEvents','showEventbyId']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Events::paginate(3);
        return view('pages.home', compact('events'));
    }
    public function showEvent(Request $request){
        $events = Events::all();
        return view('pages.my-events', compact('events'));
    }
    public function showEvents(Request $request){
        $events = Events::all();
        return view('pages.all-events', compact('events'));
    }
    public function showEventbyId(Events $events, Guest $guest){
        return view('pages.info-event',compact('events',$events,'guest',$guest));
    }
    public function addEvent(Events $events){
        $events = Events::all();
        return view('pages.add-event');
    }
    public function storeEvent(Request $request){

        $validated = $request->validate([
            'event' => 'required|unique:events|max:255',
            'date'=>'required',
            'picture' => 'mimes:jpeg,jpg,png,gif,jfif'
        ]);
        if(request()->hasFile('picture')){
            $path = $request->file('picture')->store('public/images');
            $fileName = str_replace('public/','',$path);
        }
        
        Events::create([
            'event'=>request('event'),
            'date'=>request('date'),
            'description'=>request('description'),
            'picture'=>$fileName,
            'user_id'=>Auth::id(),
        ]);
        return redirect('/my-events');
    }
    public function deleteEvent(Events $events){
        $events->delete();
        return redirect('/my-events');
    }
    public function storeUpdateEvent(Events $events, Request $request){
        if($events->picture){
            File::delete(storage_path('app/public/'.$events->picture));
        }
        if(request()->hasFile('picture')){
            $path = $request->file('picture')->store('public/images');
            $fileName = str_replace('public/','',$path);
            Events::where('id',$events->id)->update(['picture'=>$fileName]);
        }
        Events::where('id', $events->id)->update($request->only(['event','date','description']));
        return redirect('/my-events');
    }

    public function updateEvent(Events $events){
        return view('pages.edit-events',compact('events'));
    }

    public function profile(){
        return view('pages.profile');
    }
    public function about(){
        return view('pages.about');
    }
    public function contacts(Events $events, User $user){
        $user = User::all();
        return view('pages.contacts',compact('events',$user, $events,'user'));
    }

}
