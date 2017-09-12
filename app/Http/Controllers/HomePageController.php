<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;


class HomePageController extends Controller
{
    public function index()
    {
        $homePage = \App\HomePage::get();
        return view('front-end.welcome', compact('homePage'));
    }

    public function edit(Request $request, $id)
    {
    	$homePage = \App\Homepage::where('id', $id)->first();

    	if($request->hasFile('hero-image'))
    	{
    		File::delete($homePage->top_hero_image);
    		$heroImage = $request->file('hero-image');
    		$heroImageUrl = 'storage/' . time() . '.jpg';
    		Image::make($heroImage)->save(public_path($heroImageUrl));    		
    		$homePage->top_hero_image = $heroImageUrl;
    	}
    	$homePage->top_hero_headline = request('master-headline');
    	$homePage->top_hero_subline = request('master-subline');

    	$homePage->featured_tab_headline = request('featured-headline');
    	$homePage->featured_tab_subline = request('featured-subline');
    	$homePage->featured_tab_cta = request('featured-cta');
    	$homePage->featured_tab_cta_link = request('featured-cta-link');

    	if($request->hasFile('good-image'))
    	{
    		File::delete($homePage->paralax_good_image);
    		$pGoodImage = $request->file('good-image');
    		$pGoodImageUrl = 'storage/' . time() . '.jpg';
    		Image::make($pGoodImage)->save(public_path($pGoodImageUrl));    		
    		$homePage->paralax_good_image = $pGoodImageUrl;
    	}

    	if($request->hasFile('bad-image'))
    	{
    		File::delete($homePage->paralax_bad_image);
    		$pBadImage = $request->file('bad-image');
    		$pBadImageUrl = 'storage/' . time() . '.jpg';
    		Image::make($pBadImage)->save(public_path($pBadImageUrl));    		
    		$homePage->paralax_bad_image = $pBadImageUrl;
    	}

    	$homePage->paralax_text = request('paralax-text');
    	$homePage->paralax_cta = request('paralax-cta');
    	$homePage->paralax_cta_link = request('paralax-cta-link');

    	$homePage->all_products_headline = request('products-headline');
    	$homePage->all_products_subline = request('products-subline');

    	$homePage->save();

    	return redirect()->back();


    }
}
