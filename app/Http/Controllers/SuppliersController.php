<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Suppliers::all();
        return view('supplier.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = new Suppliers();
        $datas->nama=$request->get('nama');
        $datas->address=$request->get('address');
        $datas->save();
        return redirect()->route('suppliers.index')->with('status','Supplier is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppliers $supplier)
    {
        $datas=$supplier;
        return view('supplier.edit',compact('datas'));
        //dd($datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliers $supplier)
    {
        $supplier->nama=$request->get('nama');
        $supplier->address=$request->get('address');
        $supplier->save();
        return redirect()->route('suppliers.index')->with('status','Supplier data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suppliers $supplier)
    {
        try{
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('status','data supplier berhasil di hapus');
        }catch (\PDOException $e) {
            $msg="Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";

            return redirect()->route('suppliers.index')->with('error',$msg);
        }
    }
    public function getEditForm(Request $request )
    {
        $id=$request->get('id');
        $datas=Suppliers::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm',compact('datas'))->render()
        ),200);
    }
}
