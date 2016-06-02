<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class QueryController extends Controller
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
        //dd('hello');
        // Gets the query string from our form submission
        $title = $request->title;
        $connect = $request->connectés;
        $business = $request->business;
        $marketing = $request->marketing;
        if ($title != ''){
            //dd($title);
            if ($connect){
                $search = Event::where('title', 'LIKE', '%' . $title . '%')->where('title', 'LIKE', '%' . $connect . '%')->get();
            }
            if ($business){
                $search = Event::where('title', 'LIKE', '%' . $title . '%')->where('title', 'LIKE', '%' . $business . '%')->get();
            }
            if ($marketing){
                $search = Event::where('title', 'LIKE', '%' . $title . '%')->where('title', 'LIKE', '%' . $marketing . '%')->get();
            }else{
                $search = Event::where('title', 'LIKE', '%' . $title . '%')->get();
            }

        }else{
            //dd($title.'44');
            if ($connect != ''){
                $search = Event::where('title', 'LIKE', '%' . $connect . '%')->get();
            }
            if ($business != ''){
                $search = Event::where('title', 'LIKE', '%' . $business . '%')->get();
            }
            if ($marketing != ''){
                $search = Event::where('title', 'LIKE', '%' . $marketing . '%')->get();
            }else{
                dd('ola');
            }
        }

        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.

        // returns a view and passes the view the list of articles and the original query.
        return view('page.search', compact('search'));

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
        //
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
