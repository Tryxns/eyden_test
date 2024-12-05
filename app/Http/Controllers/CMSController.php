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

        $benefit_title = Text::where('type', 3)->latest()->first();
        $benefit_one = Text::where('type', 4)->latest()->first();
        $benefit_two = Text::where('type', 5)->latest()->first();
        $benefit_three = Text::where('type', 6)->latest()->first();

        $data = [];
        if(!empty($last_img)) $data["jumbotron_img"]=$jumbotron_img;

        if(!empty($jumbotron_headline)) {
            $content = $jumbotron_headline->content;
            $data["jumbotron_headline"]=html_entity_decode($content);
        }
        if(!empty($jumbotron_caption)) {
            $content = $jumbotron_caption->content;
            $data["jumbotron_caption"]=html_entity_decode($content);
        }
        if(!empty($benefit_title)) {
            $content = $benefit_title->content;
            $data["benefit_title"]=html_entity_decode($content);
        }
        if(!empty($benefit_one)) {
            $content = $benefit_one->content;
            $data["benefit_one"]=html_entity_decode($content);
        }
        if(!empty($benefit_two)) {
            $content = $benefit_two->content;
            $data["benefit_two"]=html_entity_decode($content);
        }
        if(!empty($benefit_three)) {
            $content = $benefit_three->content;
            $data["benefit_three"]=html_entity_decode($content);
        }

        return view(
            'homepage', $data
        );
    }

    function set_jumbotron(Request $request)
    {
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

    function update_benefit(Request $request)
    {
        if($request->filled('benefit_title')){
            Text::create([
                "content" => $request->benefit_title,
                "type" => 3,
            ]);
        }

        if($request->filled('benefit_one')){
            Text::create([
                "content" => $request->benefit_one,
                "type" => 4,
            ]);
        }
        
        if($request->filled('benefit_two')){
            Text::create([
                "content" => $request->benefit_two,
                "type" => 5,
            ]);
        }

        if($request->filled('benefit_three')){
            Text::create([
                "content" => $request->benefit_three,
                "type" => 6,
            ]);
        }
        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}