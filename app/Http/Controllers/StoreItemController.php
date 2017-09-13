<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;

class StoreItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $items = \App\StoreItem::orderBy('id', 'desc')->get();
    	return view('auth.items', compact('items'));
    }

    public function addItem(Request $request){

    	$item = new \App\StoreItem;

    	$item->type = request('type');
    	$item->title = request('title');
    	$item->slug = str_slug($item->title);
    	$item->brand = request('brand');
    	$item->price = request('price');
    	$item->stock = request('stock');
    	$item->description = request('description');

    	if($request->hasFile('main-image')){
    		$mainImage = $request->file('main-image');
    		$mainImageUrl = 'storage/product-images/main' . time() . '.jpg';
    		Image::make($mainImage)->save(public_path($mainImageUrl));
    		$item->main_image = $mainImageUrl;
    	}

    	if($request->hasFile('second-image')){
    		$secondImage = $request->file('second-image');
    		$secondImageUrl = 'storage/product-images/second' . time() . '.jpg';
    		Image::make($secondImage)->save(public_path($secondImageUrl));
    		$item->second_image = $secondImageUrl;
    	}    	

    	if($request->hasFile('third-image')){
    		$thirdImage = $request->file('third-image');
    		$thirdImageUrl = 'storage/product-images/third' . time() . '.jpg';
    		Image::make($thirdImage)->save(public_path($thirdImageUrl));
    		$item->third_image = $thirdImageUrl;
    	} 

    	if($request->hasFile('fourth-image')){
    		$fourthImage = $request->file('fourth-image');
    		$fourthImageUrl = 'storage/product-images/fourth' . time() . '.jpg';
    		Image::make($fourthImage)->save(public_path($fourthImageUrl));
    		$item->fourth_image = $fourthImageUrl;
    	} 

    	$item->save();

    	return redirect()->back();
    }

    public function editView($id){

        $item = \App\StoreItem::where('id', $id)->first();

        return view('auth.items-edit', compact('item'));
    }

    public function edit($id, Request $request){

        $item = \App\StoreItem::where('id', $id)->first();

        $item->type = request('type');
        $item->title = request('title');
        $item->slug = str_slug($item->title);
        $item->brand = request('brand');
        $item->price = request('price');
        $item->stock = request('stock');
        $item->description = request('description');

        if($request->hasFile('main-image')){
            File::delete($item->main_image);
            $mainImage = $request->file('main-image');
            $mainImageUrl = 'storage/product-images/main' . time() . '.jpg';
            Image::make($mainImage)->save(public_path($mainImageUrl));
            $item->main_image = $mainImageUrl;
        }

        if($request->hasFile('second-image')){
            File::delete($item->second_image);
            $secondImage = $request->file('second-image');
            $secondImageUrl = 'storage/product-images/second' . time() . '.jpg';
            Image::make($secondImage)->save(public_path($secondImageUrl));
            $item->second_image = $secondImageUrl;
        }       

        if($request->hasFile('third-image')){
            File::delete($item->third_image);
            $thirdImage = $request->file('third-image');
            $thirdImageUrl = 'storage/product-images/third' . time() . '.jpg';
            Image::make($thirdImage)->save(public_path($thirdImageUrl));
            $item->third_image = $thirdImageUrl;
        } 

        if($request->hasFile('fourth-image')){
            File::delete($item->fourth_image);
            $fourthImage = $request->file('fourth-image');
            $fourthImageUrl = 'storage/product-images/fourth' . time() . '.jpg';
            Image::make($fourthImage)->save(public_path($fourthImageUrl));
            $item->fourth_image = $fourthImageUrl;
        } 

        $item->save();

        return redirect('home/items');

    }

    public function delete($id){

        $item = \App\StoreItem::where('id', $id)->first();

        File::delete($item->main_image);
        File::delete($item->second_image);
        File::delete($item->third_image);
        File::delete($item->fourth_image);

        $item->delete();

        return redirect('home/items');
    }
}
