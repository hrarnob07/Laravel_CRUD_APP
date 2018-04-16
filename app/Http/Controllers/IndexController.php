<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{
    
    public function index()
    {
        $datas=Index::all();
         return view('welcome',['datas'=>$datas]);
    }

   
    public function create()
    {
       // return "hr";

        return view('creates.create');
    }

    
    public function store(Request $request)
    {
         $this->validate($request, [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      =>'required',
        'phone'      =>'required'
          ]);
       
        $data =$request->all();
        Index::create($data);
       return redirect(url('/home'))->with('successMsg','successfully added');


    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //return $id;
         $data=Index::find($id);
        return view('pages.edit',['data'=>$data]);
    }


    public function update(Request $request, $id)
    {
         $this->validate($request, [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      =>'required',
        'phone'      =>'required'
          ]);


        $data=Index::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->save();
        return redirect(url('/home'))->with('successMsg','information updated');
    }

    
    public function destroy($id)
    {
       $data=Index::find($id);
       $data->delete();
       return redirect(url('/home'))->with('successMsg','information delete');

    }
}
