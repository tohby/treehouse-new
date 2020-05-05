<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use File;
use App\PortfolioImages as Images;

class ImagesController extends Controller
{
    public function images($id){
        $portfolio = Portfolio::find($id);
        return view('admin/portfolio/images/index', compact('portfolio'));
    }

    public function update($id, Request $request){
        $request->validate([
            'image.*.file' => 'required|image',
        ]);
        $portfolioImage = Images::find($id);

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
            
        }

        $portfolioImage->image = $fileNameToStore;
        $portfolioImage->save();

        return back()->with('success', 'Image has been successfully updated');
    }

    public function destroy($id){
        $image = Images::find($id);
        $image_path = 'public/post_images/'.$image->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $image->delete();
        return back()->with('success', 'Image has been deleted');
    }
}
