<?php

            namespace App\Http\Controllers;

            use App\User;
            use App\useradds;
            use Illuminate\Http\Request;
            use Illuminate\Support\Facades\Auth;

        class addcontroller extends Controller
        {
        //
        public function __construct()
        {
            $this->middleware('auth')->only('create');
        }


        public function create(){


            return view('user.create');
        }






    public function store(Request $request){


        $id = User::find(Auth::id());

        $id= $id->id;

      //  dd($request);

      //  $add=Auth::User()->useradds()->create($request->except('_token'));


        useradds::create([
            'user_id' =>$id ,

            'first_name'=>$request['first_name'],
            'last_name'=>$request['last_name'],
            "year" => $request['year'],
              'month' => $request['month'],
              "day" => $request['day'],
              "phone" => $request['phone'],
              "tahsilat" => $request['tahsilat'],
              "reshteh" => $request['reshteh'],
              "uni" => $request['uni'],
              "job" => $request['job'],
              "address" => $request['address'],
            'photo'=>'sd',
            'marry'=>'0',
            'text'=>'asd',
            'filename'=>'asdad',

        ]);






        return redirect('/info/create');

       // dd($book);

    }


}
