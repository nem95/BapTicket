<?php

namespace App\Http\Controllers;

use App\Event;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$event = Event::all();
        $event = Event::orderBy('created_at', 'desc')->with('reservations')->paginate(9);

        $user = User::all();
        //dd($user);
        return view('admin.index', compact('event', 'user'));
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

            if (Auth::user()->id == $id || Auth::user()->is_admin == 1){
            $user = User::find($id);
            /*$list = Event::where('user_id', $id)->get();
            $infos = User::where('id', $id)->get();*/
            return view('admin.edit')->with(compact('user'));
            }else{
                return redirect() -> route('admin.index');
            }



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
        //upload image de profil
        if(Input::file())
        {

            $image = Input::file();
            //dd($image);
            $filename  = time() . '-' . Input::file('image')->getClientOriginalName();
            $destinationPath = 'uploads'; // upload path
            Input::file('image')->move($destinationPath, $filename); // uploading file to given path
            $path = public_path('uploads/' . $filename);

            //sImage::make($image->getRealPath())->resize(200, 200)->save($path);
            $user->photo = $destinationPath. '/'.$filename;
        }else{
            $filename = "pas de fichier";
            //dd($filename);

        }

        if ($request->newsletter){
            $user->newsletter = $request->newsletter;
        }else{
            $user->newsletter = $request->news;
        }

        $user->update();


        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.index');
    }
}
