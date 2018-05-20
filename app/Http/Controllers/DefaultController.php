<?php
namespace App\Http\Controllers;


class DefaultController extends Controller
{
	/**
	 * Home Page Controller
	 * @pram 
 	 */	
	public function index()
	{
		$data['title'] = 'Home';
		return view('home',$data);
	}

	public function about()
	{
		$data['title'] = 'About';
		return view('about',$data);	
	}

	public function contactUs()
	{
		$data['title'] = 'Contact Us';
		return view('contact',$data);	
	}
}
?>