<?php

namespace App\Http\Controllers;

use App\Event;
use App\Resa;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('orga')->only(['create', 'edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Event::orderBy('created_at', 'desc')->with('reservations')->paginate(8);
        return view('events.index', compact('list'));

    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
       // return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this -> validate($request, [
            'title' => 'required',
            'subject' => 'required',
            'host' => 'required',
            'sector' => 'required',
            'content' => 'required',
            'localisation' => 'required',
            'places' => 'required',
            'date' => 'required',
            'duration' => 'required'
        ]);*/

        $event = new Event;
        /*$input = $request -> input();
        $input['user_id'] = Auth::user() -> id;*/
        $event->title = $request->title;
        $event->subject = $request->subject;
        $event->host = $request->host;
        $event->content = $request->content;
        $event->localisation = $request->localisation;
        $event->places = $request->places;
        $event->date = $request->date;
        $event->adresse = $request->adresse;
        $event->city = $request->city;
        $event->postal = $request->postal;
        $event->debut = $request->debut;
        $event->fin = $request->fin;
        $event->user_id = Auth::user()->id;

        $event->save();
        //$event -> fill($input) -> save();

        return redirect() -> route('evenement.index') -> with('success', 'Votre évènement a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        /*$id = $event->user_id;
        //dd($id);
        */
        $user_id = $event->user_id;
        //dd($user_id);
        $user = User::findOrFail($user_id);
        //dd($user);
        if (Auth::check()){
            $resas = Resa::where('user_id', Auth::user()->id)->where('event_id', $event->id)->count();
            //dd($resas);
            //$resas = Resa::where('user_id', Auth::user()->id)->count();
            return view('events.show')->with(compact('event', 'user', 'resas'));

        }else{
            //dd($event);

            return view('events.show')->with(compact('event', 'user'));

        }




        //return view('events.show')->with(compact('event', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);

        /*$this -> validate($request, [
            'title' => 'required',
            'subject' => 'required',
            'host' => 'required',
            'content' => 'required',
            'localisation' => 'required',
            'places' => 'required',
            'date' => 'required',
            'adresse' => 'required',
            'city' => 'required',
            'postal' => 'required',
            'debut' => 'required',
            'fin' => 'required',
        ]);*/
        $event = Event::findOrFail($id);

        $event->title = $request->title;
        $event->subject = $request->subject;
        $event->host = $request->host;
        $event->content = $request->content;
        $event->localisation = $request->localisation;
        $event->places = $request->places;
        $event->date = $request->date;
        $event->adresse = $request->adresse;
        $event->city = $request->city;
        $event->postal = $request->postal;
        $event->debut = $request->debut;
        $event->fin = $request->fin;

        $event->save();

        return redirect() -> route('evenement.index') -> with('success', 'Votre article a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $event = Event::findOrFail($id);
        $event->delete();

        return redirect() -> route('evenement.index') -> with('success', 'Votre article a bien été supprimé');
    }
}
