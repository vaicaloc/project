<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Custumer;
use App\Http\Requests\LaravelRequest;
use Session;
use App\Extensions\MongoSessionStore;

class CustumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custumer = Custumer::all();
        return View('custumer.index')
            ->with('custumer', $custumer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('custumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaravelRequest $request)
    {
        $custumer = new Custumer();
        $custumer->name       = $request->name;
        $custumer->email      = $request->email;
        $custumer->user_level = $request->level;
        $custumer->save();

        Session::flash('message', 'Successfully created custumer!');
        return redirect()->route('custumer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          // get the custumer
        $custumer = Custumer::find($id);

        // show the view and pass the custumer to it
        return View('custumer.show')
            ->with('custumer', $custumer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $custumer = custumer::find($id);
        return View('custumer.edit')
            ->with('custumer', $custumer->toArray());
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
        $custumer = Custumer::find($id);
        $custumer->name        = $request->nameUD;
        $custumer->email       = $request->emailUD;
        $custumer->user_level  = $request->levelUD;
        $custumer->save();
        return redirect()->route('custumer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $custumer = Custumer::findOrFail($id);
         $custumer->delete();
         return redirect()->route('custumer.index');
    }
}
