<?php

namespace App\Http\Controllers;

use App\Orga;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class OrgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('orga')->only(['create', 'edit', 'update', 'infosEdit', 'infosUpdate']);
    }

    public function index()
    {
       // $users = User::all()->lists('name','id');
        $id = Auth::user()->id;
        $list = Event::where('user_id', $id)->get();
        $infos = User::where('id', $id)->get();
        return view('orgas.index')->with(compact('list', 'infos'));
        //return view('orgas.index', compact('list'));
    }
    
    public function infosEdit(){
    }

    public function infosUpdate(Request $request){

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
        //
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

        $user = User::find($id);
        /*$list = Event::where('user_id', $id)->get();
        $infos = User::where('id', $id)->get();*/
        return view('orgas.edit')->with(compact('user'));

        /*$post = Post::find($id);
        $users = User::all()->lists('name','id');
        return view('articles.edit')->with(compact('post', 'users'));*/

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
        //dd($request->sectors);
        $user = User::find($id);

        $user->surname = $request->surname;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->adresse = $request->adresse;
        $user->postal = $request->postal;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->socialfb = $request->socialfb;
        $user->socialtt = $request->socialtt;
        $user->socialig = $request->socialig;
        $user->socialgg = $request->socialgg;
        $user->sectors = $request->sectors;
        $user->known = $request->known;
        if ($request->newsletter){
            $user->newsletter = $request->newsletter;
        }else{
            $user->newsletter = $request->news;
        }

        $user->update();


        return redirect('/orga');
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
