<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UrlHash;
use Carbon\Carbon;

class UrlHashController extends Controller
{
    //this is to take input 
    public function index()
    {  
        $links = UrlHash::latest()->get();
        return view('urlHashLink', compact("links"));
    }

    //this is to store url in database
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
        if (Carbon::now()->greaterThan($value->created_at->addMinutes(5))) {
            return view('error');
        }else{
            $value->ip_address = \Request::ip();
            $value->save();
            return redirect($value->link);
        }
        
    }
}
