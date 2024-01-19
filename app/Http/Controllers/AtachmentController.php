<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AtachmentRequest;
use App\Models\Atachment;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AtachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atachment = Atachment::all();
        return response()->json($atachment, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // 
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(AtachmentRequest $request)
    {
   
 
        $filename = time().'_'.$request->file->getClientOriginalName().$request->file->getClientOriginalExtension();
        $request->file->storeAs('public', $filename);


        //Añadimos datos de archivo en bbdd
        $atachment = new Atachment;
        $atachment->device_id=$request->device_id;
        $atachment->file_name=$filename;
        $atachment->description=$request->description();
        $atachment->route= 'public/'.$filename;
        $atachment->size = $request->size();
        $atachment->save();


        return response()->json($filename, 200);

    }







    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
