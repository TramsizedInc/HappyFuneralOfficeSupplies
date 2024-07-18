<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        return view('image-form');
    }

    // Store Image
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Convert image to base64 string
        $image = $request->file('image');
        $base64Image = base64_encode(file_get_contents($image));

        // Store the base64 string in the database
        $imageModel = new Image();
        $imageModel->image_base64 = $base64Image;
        $imageModel->save();

        return back()->with('success', 'Image uploaded successfully.');
    
       // $request->validate([
        //    'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
       // ]);

       // $imageName = time().'.'.$request->image->extension();

        // Public Folder
      //  $request->image->move(public_path('images'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB 


        //return back()->with('success', 'Sikeres Képfeltöltés!')
       // ->with('image', $imageName);
       
    }
    public function Create(Request $request)
    {



    }
    public function Get(Request $request)
    {



    }
    public function fetch($id)
    {
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        // Convert base64 string back to image
        $imageData = base64_decode($image->image_base64);

        return response($imageData)
            ->header('Content-Type', 'image/jpeg'); // Adjust MIME type accordingly
    }
}
