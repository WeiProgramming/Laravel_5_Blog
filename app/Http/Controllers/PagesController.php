<?php

namespace App\Http\Controllers;//little container you belong in this folder must namespace controllers

//use Illuminate\//want to access other stuff

class PagesController extends Controller{
	public function getIndex(){
		return view('pages/welcome');
	}

	public function getAbout(){
		$first = 'Jayme';
		$last = 'DelaSnoozer';
				$email = "jaymesnooze@gmail.com";
						$fullname = $first .' ' . $last;


		$data = [];
		$data['eball']= $email;
		$data['full'] = $fullname;
		return view('pages/about') -> withbigd($data) -> withfullname($fullname);
	}

	public function getContact(){ //get retrieve data from server
		return view('pages/contact');
	}

	public function postContact(){ //post server changes

	}

	public function getInfo(){
		return view('pages/info_input');
	}
}