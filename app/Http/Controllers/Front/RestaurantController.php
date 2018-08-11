<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Comment;
class RestaurantController extends Controller
{

    public function getRestaurantInfo($id)
    {
        $restaurant = Restaurant::with('comments')->findOrFail($id);
        
        return view('front.restaurants.restaurant-info',compact('restaurant'));
    }

    public function getRestaurantLocation($id)
    {
    	$restaurant = Restaurant::findOrFail($id);

    	return view('front.restaurants.restaurant-info-location',compact('restaurant'));
    }

    public function getRestaurantList()
    {
        $restaurants = Restaurant::get();
        return view('front.restaurants.restaurant-list',compact('restaurants'));
    }

    public function createComment($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        
        return view('front.restaurants.comment.create', compact('restaurant'));
    }

     public function storeComment(Request $request)
    {
        //Validating title and body field
        $this->validate($request, [
            'rate'=>'required',
            'comment' =>'required',
            ]);

        $comment = Comment::create($request->all());

    //Display a successful message upon save
        $request->session()->flash('message', 'Thank you for your review and for helping to make our system more improvements.');
        return redirect()->back();
    }

}
