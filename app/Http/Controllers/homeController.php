<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
   public function index()
    {
  //   	 $data = [];
		//  $data['first'] = 'test';
		//  $data['last'] = 'asddsa';
		// // return view('pages/about', $data);
		
		// return view('pages/about', compact('first', 'last'));

		$images = array();
		$images = array_add($images, 'sky1', 'sky1.jpg');
		$images = array_add($images, 'sky2', 'sky2.jpg');
		$images = array_add($images, 'sky3', 'sky3.jpg');
		$images = array_add($images, 'sky4', 'sky4.jpg');

		$images = array_add($images, 'Boat', 'boat1.jpg');
		$images = array_add($images, 'Lodge', 'lodge.jpg');
		$images = array_add($images, 'run', 'run.jpg');
		$images = array_add($images, 'tiger1', 'tiger1.jpg');
		
		$images = array_add($images, 'tiger2', 'tiger2.jpg');
		$images = array_add($images, 'tiger3', 'tiger3.jpg');
		$images = array_add($images, 'tiger4', 'tiger4.jpg');
		$images = array_add($images, 'Barbel', 'barbel.jpg');
		



		//$laravel_object = $app->make('stdClass');

		//return view('admin/rooms/room')->with(array('room' => $room, 'location' => $location, 'amenities' => $amenities, 'calendars' => $calendars, 'room_types' => $room_types));
    	return view('home/index')->with(
		[
			'images' => $images
		]);
    }

    // would like to make a function which creates and image object with copy and locatiom
    // so i need to make a model?
    public function SendEmail()
    {
    	// ugh. want mykes help
    }
}
