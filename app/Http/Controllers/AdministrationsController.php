<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administration;
use App\User;

class AdministrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrations = User::all();
        return view('pages.Admin.index')->with('administrations', $administrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin.create');
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
        $administration = User::find($id);
        return view('pages.Admin.show')->with('administration', $administration);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administration = User::find($id);
        return view('pages.admin.edit')->with('administration', $administration);
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
        $this ->validate($request, [
            'firstname' => 'required',
            'name' => 'required',
            'email' => 'required',
            'Role_id' => 'required',
            'Cesi_id' => 'required',
        ]);


        // Update Post
        $administration = User::find($id);
        $administration->firstname = $request->input('firstname');
        $administration->name = $request->input('name');
        $administration->email = $request->input('email');
        $administration->Role_id = $request->input('Role_id');
        $administration->Cesi_id = $request->input('Cesi_id');
        $administration->save();

        return redirect('/administrations')->with('success', 'Utilisateur Mis A Jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administration = User::find($id);
        $administration->delete();

        return redirect('/administrations')->with('success', 'Utilisateur supprimé');
    }
}
