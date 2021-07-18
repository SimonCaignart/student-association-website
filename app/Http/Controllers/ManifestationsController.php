<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manifestation;
use App\User;
use App\Comment;
use App\Participate;

class ManifestationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manifestations = Manifestation::all();
        return view('manifestations.index')->with('manifestations', $manifestations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manifestations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required',
            'date' => 'required',
            'recurent' => 'required',
            'prix'  => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
        //Handle File Upload
        if ($request->hasFile('image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        //create Manifestation
        $manifestation = new Manifestation;
        $manifestation->nom = $request->input('nom');
        $manifestation->description = $request->input('description');
        $manifestation->date = $request->input('date');
        $manifestation->recurent = $request->input('recurent');
        $manifestation->prix = $request->input('prix');
        $manifestation->image = $fileNameToStore;
        $manifestation->save();

        return redirect('/manifestations')->with('success', 'Manifestation créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manifestation = Manifestation::find($id);
        $comments = Comment::all();
        $participates = Participate::select('Participant_id')->get();
        return view('manifestations.show')->with('manifestation', $manifestation)->with('comments', $comments)->with('participates', $participates);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$manifestation = Manifestation::findOrFail($id);
        //return view('manifestations.edit', compact('manifestation'));
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
