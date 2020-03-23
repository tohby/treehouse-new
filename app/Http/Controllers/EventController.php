<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = today()->format('Y-m-d');
        $events = Event::where('end_at', '>=', $date)->orderBy('created_at', 'desc')->simplePaginate(5);
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'image.*.file' => 'required|image',
            'title' => 'required',
            'description' => 'required',
        ]);

        $portfolio = Portfolio::find($portfolio->id);
        $portfolio->title = $request->input('title');
        $portfolio->description = $request->input('description');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileNameWithExt = $image->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get extension
            $extension = $image->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //image upload
            $path = $image->storeAs('public/post_images', $fileNameToStore);
            $images = Images::create([
                'portfolio_id' => $portfolio->id,
                'image' => $fileNameToStore,
            ]);
        }
        $portfolio->save();

        return redirect('/portfolio')->with('success', 'Item has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event = Portfolio::find($event->id);
        $event->delete();
        return redirect('/events')->with('success', 'Event has been deleted');
    }
}
