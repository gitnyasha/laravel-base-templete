<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view('events.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Event $event)
    {
        $data = request()->validate([
            'name' => 'required',
            'file' => 'required',
            'image' => 'required|image',
        ]);
    
            $imagePath = request('image')->store('uploads', 'public');
            $filePath = request('file')->store('uploads', 'public');
    
            // $imagePath = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
    
            auth()->user()->events()->create([
                'name' => $data['name'],
                'file' => $filePath,
                'image' => $imagePath,
            ]);
    
            return redirect('/events/index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::all();
        return view('events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Event $event)
    {
        $data = request()->validate([
            'name' => 'required',
        ]);
    
    
        auth()->user()->events()->update([
            'name' => $data['name'],
        ]);
    
        return redirect("events/{$event->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect('/events/index');
    }

    public function editImage(Event $event) {
        return view('admin.image', compact('Event'));
    }
    
    public function updateImage(Event $event) {
        $data = request()->validate([
            'image' => 'required|image',
        ]);
    
        $imagePath = request('image')->store('uploads', 'public');
    
        auth()->user()->events()->update([
            'image' => $imagePath,
        ]);
    
        return redirect("events/{$event->id}");
    }
}