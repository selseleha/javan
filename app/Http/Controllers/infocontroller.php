<?php

namespace App\Http\Controllers;

use App\category;
use App\info;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class infocontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }


    public function create(){

        $categories=category::all();

        return view('info.create',compact('categories'));
    }






    public function store(Request $request){

       // dd($request);
        $id = User::find(Auth::id());
        $id= $id->id;
       // dd($id);
       //dd($request);

        $pic= $request->file('image')->getClientOriginalName();
        $name=time().$pic;
        $path='infoimg/';
        $pic=$request->image->move($path,$name);
        $user=$request->user();
        //dd($user);
        //dd($request);
        $cat=$request->get('category_id');
        $cat = implode(' ', $cat);

     //   $book=Auth::user()->info();
       // $book->category()->info()->create($request->except('_token'));

        info::create([
            'text' => $request['text'],
            'image'=>$pic,
            'user_id'=>$id,
            'category_id'=>$cat,
            'valid'=>'0',


        ]);


        return view('/home');


    }

}
