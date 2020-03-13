<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioImages as Images;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('created_at', 'desc')->simplePaginate(12);
        return view('admin/portfolio/index', compact('portfolios'));
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
            'image.*.file' => 'required|image',
            'title' => 'required',
            'description' => 'required',
        ]);

        $portfolio = Portfolio::Create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        if($request->hasFile('image')){
                foreach ($request->file('image') as $image) {
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
        }

        return redirect('/portfolio')->with('success', 'New Portfolio item has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $portfolio = Portfolio::find($portfolio->id);
        return view('admin/portfolio/show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $portfolio = Portfolio::find($portfolio->id);
        return view('admin/portfolio/show', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio = Portfolio::find($portfolio->id);
        return view('admin/portfolio/show', compact('portfolio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio = Portfolio::find($portfolio->id);
        $portfolio->delete();
        return redirect('/portfolio')->with('success', 'Portfolio item has been deleted');
    }
}
