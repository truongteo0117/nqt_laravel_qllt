<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
class qlcontroller extends Controller
{   

    public function index()
    {
    	$response = Http::get('http://127.0.0.1:8000/api/home');
		$vb= json_decode($response);
        return view('/home',compact('vb'));

    }
    public function delete(Request $request, $id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/delete/'.$id);
        if($response== "ok")
            header("Refresh:0");
    }
}
