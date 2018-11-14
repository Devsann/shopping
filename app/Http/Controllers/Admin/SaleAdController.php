<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfotechRequestForm;
use App\Http\Requests\ItBuyFormRequest;
use App\Infotech;
use App\Itbuylist;

class SaleAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Infotech::all();
        return view('admin.sale_admin',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.it_create');
    }
//
//    public function views(){
//        $info=Infotech::all();
//        return view('admin.sale_admin',compact('info'));
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfotechRequestForm $request)
    {
        $file=$request->file('file');
        $filename=uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        Infotech::create([
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'phone'=>$request->get('phone'),
            'about'=>$request->get('about'),
            'imgs'=>$filename,
        ]);
        return redirect('/admin/itcreator')->with('status','Successfull Insert and you can look in IT & Accessories.');
    }

    public function info_view(){
        $info=Infotech::paginate(8);
        return view('admin.info_view',compact('info'));
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
        $info=Infotech::whereId($id)->firstOrFail();
        return view('edit.infoedit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfotechRequestForm $request, $id)
    {
        $file=$request->file('file');
        $filename=uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        $info=Infotech::whereId($id)->firstOrFail();
        $info->title=$request->get('title');
        $info->price=$request->get('price');
        $info->phone=$request->get('phone');
        $info->about=$request->get('about');
        $info->imgs=$filename;

        $info->update();
        return redirect(action('admin\SaleAdController@edit',$id))->with('status','Successful Edit');
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

    public function itbuy($id){
        $info=Infotech::whereId($id)->firstOrFail();
        return view('edit.itbuyform',compact('info'));
    }

    public function itbuylist(ItBuyFormRequest $request , $id){

        Itbuylist::create([
            'name'=>$request->get('name'),
            'mail'=>$request->get('mail'),
            'phone'=>$request->get('phone'),
            'pdname'=>$request->get('pdname'),
            'dtail'=>$request->get('dtail'),
        ]);
        return redirect(action('Admin\SaleAdController@itbuy',$id))->with('status','Successful U r Order !');
    }

    public function itorder(){
        $itorder=Itbuylist::all();
        return view('admin.itorder',compact('itorder'));
    }
}
