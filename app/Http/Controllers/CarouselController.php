<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::get();
        return view('admin.carousel.index')->with('carousels', $carousels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.create');
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
            'image' => ['required', 'image'],
            'text' => 'required',
            'title' => 'required',
            'url' => 'url',
        ]);

        if($request->hasFile('image')){
                $image = $request->file('image') ;
                $fileNameWithExt = $image->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $image->storeAs('public/carousel_images', $fileNameToStore);
        }
        
        $carousel = Carousel::Create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'link' => $request->input('url'),
            'image' => $fileNameToStore,
        ]);
        return redirect('/carousel')->with('success', 'New carousel item has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'image' => 'image',
            'text' => 'required',
            'title' => 'required',
            'url' => 'url|required',
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image') ;
            $fileNameWithExt = $image->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $image->storeAs('public/carousel_images', $fileNameToStore);
        }
        $carousel = Carousel::find($carousel->id);
        if(isset($fileNameToStore)){
            $carousel->image = $fileNameToStore;
        }
        $carousel->title = $request->input('title');
        $carousel->text = $request->input('text');
        $carousel->link = $request->input('url');
        $carousel->save();
        return redirect('/carousel')->with('success', 'Yaayyy! carousel updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        $carousel = Carousel::find($carousel->id);
        $carousel->delete();
        return redirect('/carousel')->with('success', 'the carousel has been deleted');
    }
}
