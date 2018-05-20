<?php
namespace App\Http\Controllers;


class DefaultController extends Controller
{
	/**
	 * Home Page Controller
	 * @pram 
 	 */	
	function index()
	{
		$data['title'] = 'Home';
		return view('home',$data);
	}
}
?>