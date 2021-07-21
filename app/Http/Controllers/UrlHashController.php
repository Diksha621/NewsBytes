<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UrlHash;

class UrlHashController extends Controller
{
    public function index()
    {  
        $links = UrlHash::latest()->get();
        return view('urlHashLink', compact("links"));
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), ['link' => 'required|url']);
        if($validator ->fails()){
            return redirect('create-url-hash')
             ->with('failed', 'Wrong input');
        }
            
        $input['link'] = $request->link;
        $input['hash'] = Str::random(6);
        UrlHash::create($input);
        return redirect('create-url-hash')
             ->with('success', 'Hash Url Created!');
        
    }

    public function displayLink($hash)
    {
        $value = UrlHash::where('hash', $hash)->first();
        return redirect($value->link);
        
    }
}
