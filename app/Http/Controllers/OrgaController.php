<?php

namespace App\Http\Controllers;

use App\Orga;
use App\Event;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
       /* $id = Auth::user()->id;

        $list = Event::where('user_id', $id)->get();
        $infos = User::where('id', $id)->get();
        $tags = Tag::all();
        //dd($tags);
        return view('orgas.index')->with(compact('list', 'infos', 'tags'));
        //return view('orgas.index', compact('list'));*/
        return redirect('/');

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

    public function addTags(Request $request){

        $tags = new Tag;

        $tags->name = $request->tag;
        $tags->user_id = Auth::user()->id;
        //dd($tags);
        $tags->save();
        //$event -> fill($input) -> save();

        return redirect() -> route('orga.show', Auth::user()->id);


    }

    public function deleteTags($id){

        $tag = Tag::find($id);
        $tag->delete();

        return redirect() -> route('evenement.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        //dd(Auth::user()->id);
        $id = Auth::user()->id;
        $list = Event::where('user_id', $id)->get();
        $infos = User::where('id', $id)->get();

        $tags = Tag::where('user_id', $id)->get();
        return view('orgas.show')->with(compact('user','list', 'infos', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (Auth::user()->id == $id){
            $user = User::find($id);
            /*$list = Event::where('user_id', $id)->get();
            $infos = User::where('id', $id)->get();*/
            return view('orgas.edit')->with(compact('user'));
        }else{
            return redirect() -> route('evenement.index');
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


        return redirect()->route('orga.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        $user = Auth::user();

        return redirect()->route('orga.show', $user->id);

    }
}
