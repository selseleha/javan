<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    //
    public function uploadForm(){

        return view('test');

    }


    public function uploadSubmit(Request $request){

    //  dd($request);
       $pic= $request->file('filename')->getClientOriginalName();

       // $user=User::create($request);
       // $filename=$request->file('photos');
       $name=time().$pic;
        $path='user_img/';
        $pic=$request->filename->move($path,$name);
      //  dd($pic);

      // $product = User::create($request->except('_token'));

        User::create([
            'name' => $request['name'],
            'filename'=>$pic,
            'password'=>$request['password'],

        ]);


        return ";l;l";
    }



    public function show($id)
    {

        // $product=DB::table('products')->where('id','=',$id)->first();
        $user=DB::table('users')->find($id);

        return view('show', compact('user'));

    }



}
