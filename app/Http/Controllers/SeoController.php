<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Image;

class SeoController extends Controller
{
    public function make($id, Request $request)
    {
    	$seo = \App\Seo::where('id', $id)->first();

    	$seo->title = request('title');
    	$seo->url = request('url');
    	$seo->description = request('description');

    	if($request->hasFile('image')){

    		File::delete($seo->image);
    		$image = request('image');
    		$imageUrl = 'storage/seo' . time() . '.jpg';
    		Image::make($image)->save(public_path($imageUrl));
    		$seo->image = $imageUrl;

    	}else{
    		$seo->image = $seo->image;
    	}

    	if($request->hasFile('icon')){

    		File::delete($seo->icon);
    		$icon = request('icon');
    		$iconUrl = 'storage/icon' . time() . '.jpg';
    		Image::make($icon)->save(public_path($iconUrl));
    		$seo->icon = $iconUrl;

    	}else{
    		$seo->icon = $seo->icon;
    	}

    	$seo->save();

    	return redirect()->back();

    }
}
