<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class vanbandicungController extends Controller
{
    public function index()
    {
        //Token-------
        // $response = Http::withHeaders([
        //         'APP_KEY' => '7dc3e464107ad4a108e98ac6add68513',
        // ])->get('http://127.0.0.1:8000/api/home');
        // $vb= json_decode($response);
        // $response = Http::withHeaders([
        //         'APP_KEY' => '7dc3e464107ad4a108e98ac6add68513',
        // ])->get('http://127.0.0.1:8000/api/home2');
        // $lvb= json_decode($response);


        return view('tables');

    }
}
