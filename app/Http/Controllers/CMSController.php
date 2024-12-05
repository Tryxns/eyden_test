<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Text;

class CMSController extends Controller
{
    function index() {
        $last_img = Image::where('type', 2)->latest()->first();
        $jumbotron_img="";

        if(!empty($last_img))$jumbotron_img='/jumbotron/'.$last_img->filename;

        $jumbotron_headline = Text::where('type', 1)->latest()->first();
        $jumbotron_caption = Text::where('type', 2)->latest()->first();

        $data = [];
        if(!empty($last_img)) $data["jumbotron_img"]=$jumbotron_img;
        if(!empty($jumbotron_headline)) $data["jumbotron_headline"]=$jumbotron_headline->content;
        if(!empty($jumbotron_caption)) $data["jumbotron_caption"]=$jumbotron_caption->content;

        return view(
            'homepage', $data
        );
    }

    function set_jumbotron(Request $request)
    {
        // dd($request->jumbotron_headline);
        if ($request->hasFile('jumbotron_img')){
            $request->validate([
                'jumbotron_img' => ['image','mimes:jpg,png,jpeg,gif','dimensions:min_width=1000,min_height=100'],
            ]);
            $file = $request->file('jumbotron_img');
            $fileName = $file->getClientOriginalName();
    
            Image::create([
                "filename" => $fileName,
                "type" => 2,
            ]);

            $request->jumbotron_img->move(public_path('jumbotron'), $fileName);
        }

        if($request->filled('jumbotron_headline')){
            Text::create([
                "content" => $request->jumbotron_headline,
                "type" => 1,
            ]);
        }

        if($request->filled('jumbotron_caption')){
            Text::create([
                "content" => $request->jumbotron_caption,
                "type" => 2,
            ]);
        }

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}