<?php

namespace App\Http\Controllers;

use App\Event;
use App\Resa;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ResaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $resa = new Resa();

        $resa->user_id = Auth::user()->id;
        $resa->event_id = $request->event_id;
        $resa->nb_place = $request->number;


        $event =  Event::find($id);
        
        //$id = $request->event_id;
        //dd($id);
        //$findEvent = Event::findOrFail($id);
        $event->placesLeft = $event->placesLeft - $request->number;
        
        $event->update();
        $resa->save();
        //dd($event->placesLeft);

        //$event -> fill($input) -> save();

        return redirect() -> route('event.index') -> with('success', 'Votre évènement a été créé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
