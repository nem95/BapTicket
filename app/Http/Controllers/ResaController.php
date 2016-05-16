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
        $resas = Resa::where('user_id', Auth::user()->id)->count();
        if ($resas < 3){
            $places = $request->number - $resas;
            for ($i = 1; $i <= $places; $i++) {
                $resa = new Resa;

                $resa->user_id = Auth::user()->id;
                $resa->event_id = $request->event_id;
                $resa->nb_place = $request->number;
                $resa->save();

            }
            //$resas = Resa::where('event_id', $id)->get();

            $event =  Event::find($id);

            $event->placesLeft = $event->placesLeft - $places;

            $event->update();
        }else{
            return redirect() -> route('event.show', $id) -> with('success', 'Votre évènement a été créé');

        }


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
