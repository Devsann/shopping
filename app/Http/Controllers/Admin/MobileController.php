<?php

namespace App\Http\Controllers\admin;

use App\Mobile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MobileFormRequest;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mob=Mobile::paginate(8);
        return view('admin.mobview',compact('mob'));
    }

    public function tableview(){
        $mob=Mobile::all();
        return view('admin.mobtable',compact('mob'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobform');  //mobform.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MobileFormRequest $request)
    {
        $file=$request->file('img');
        $filename=uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        Mobile::create([
            'brand'=>$request->get('name'),
            'price'=>$request->get('price'),
            'phone'=>$request->get('phone'),
            'about'=>$request->get('about'),
            'img'=>$filename,
        ]);
        return redirect('/admin/compani/mobtable/mobform')->with('status','Successfull Insert and you can look in IT & Accessories.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
