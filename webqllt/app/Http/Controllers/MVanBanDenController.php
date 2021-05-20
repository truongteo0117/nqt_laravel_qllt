<?php

namespace App\Http\Controllers\VBMem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class VanBanDenController extends Controller
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

        $response = Http::get('http://127.0.0.1:8000/api/home');
        $vb= json_decode($response);
        $response = Http::get('http://127.0.0.1:8000/api/home2');
        $lvb= json_decode($response);

        return view('/vanbandenmem',compact('vb','lvb'));

    }
    public function handling(Request $request)
    {
        $dem=0;
        $response = Http::get('http://localhost:8080/qllt/public/home');
        $vb= json_decode($response);
        foreach ($vb as $key)
        {
            if ($request->id==$key->id) {
                $dem=1;
            }
        }
        if ($dem!=1)
        {
            $response = Http::post('http://127.0.0.1:8000/api/create/', [
                'id_loaivanban' =>  $request->id_loaivanban,
                'tenvb' =>  $request->tenvb,
                'sovb' =>  $request->sovb,
                'mota' =>  $request->mota,
                'ngayden' =>  $request->ngayden,
                'nguoiky' =>  $request->nguoiky,
                'nguoigui' =>  $request->nguoigui,
                'nguoinhan' =>  $request->nguoinhan,
                'file'      => $request->file,
                'phanloai' => 'VanBanDenMem',
                //'role' => 'Network Administrator',
            ]);
            return redirect()->route('vbdic');
        }
        else if ($dem==1)
        {
            $id = $request->id;
            $response = Http::post('http://127.0.0.1:8000/api/update/'.$id, [
                'id_loaivanban' =>  $request->id_loaivanban,
                'tenvb' =>  $request->tenvb,
                'sovb' =>  $request->sovb,
                'mota' =>  $request->mota,
                'ngaygui' =>  $request->ngaygui,
                'nguoiky' =>  $request->nguoiky,
                'nguoigui' =>  $request->nguoigui,
                'nguoinhan' =>  $request->nguoinhan,
                'file'      => $request->file,
                'phanloai' => 'VanBanDenMem',
                //'role' => 'Network Administrator',
            ]);
            return redirect()->route('vbdic');
        }
    }
}
