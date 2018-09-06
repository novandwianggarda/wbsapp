<?php

namespace App\Http\Controllers;

use App\FormBenturan;
use Illuminate\Http\Request;

class FormBenturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('benturan');
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
        $this->validate($request, [
            'nama_pelaku' => 'required',
            'cerita' => 'required',
            'bukti' => 'required|mimes:jpeg,png,jpg,zip,pdf,docx,doc|nullable|max:10000'
        ]);

        if ($request->hasFile('bukti')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('bukti')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('bukti')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('bukti')->storeAs('public/bukti', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new FormBenturan;
        $post->nama_pelaku = $request->input('nama_pelaku');
        $post->nip_pelaku = $request->input('nip_pelaku');
        $post->jabatan = $request->input('jabatan');
        $post->cerita = $request->input('cerita');
        $post->bukti = $fileNameToStore;
        //dd($post);
        $post->save();

        return redirect('/post_benturan_kepentingan')->with('success', 'sukses');
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
