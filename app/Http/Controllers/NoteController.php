<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notlar=Note::all();
        return response($notlar,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return 'show forms to created file blade . php';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notlar=Note::create($request->all());
        return $notlar;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $not=Note::findorFail($id);
        return response($not,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
return 'return edit form';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $not=Note::findorFail($id);
        $not->update($request->all());
        return response($not,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $not=Note::findorFail($id);
        $not->delete();
        return response($not,200);
    }
}
