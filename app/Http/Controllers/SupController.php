<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use carbon\carbon;

class SupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = supplier::orderBy('id', 'DESC')->get();
        $count = supplier::all()->count();
        return view('suppliers.index',compact('suppliers','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new supplier;
        $this->validate($request,[
                "code"=>"required|unique:suppliers",
                "name"=>"required|unique:suppliers",
                "type"=>"required",
                "phone"=>"required|numeric",
                "address"=>"required",
            ]);
        $supplier->code = $request->code;
        $supplier->name = $request->name;
        $supplier->type = $request->type;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->save();

        alert()->success('ထည့္သြင္းၿပီးပါၿပီ');
        return redirect('suppliers/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = supplier::find($id);
        return view('suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = supplier::find($id);
        return view('suppliers.edit', compact('supplier'));
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
        $supplier = supplier::find($id);
        $this->validate($request,[
                "code"=>"required",
                "name"=>"required",
                "type"=>"required",
                "phone"=>"required|numeric",
                "address"=>"required",
            ]);
        $supplier->code = $request->code;
        $supplier->name = $request->name;
        $supplier->type = $request->type;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->save();
        alert()->success('ထည့္သြင္းၿပီးပါၿပီ');
        return redirect('/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = supplier::find($id);
        $supplier->delete();
        alert()->success('ဖယ္ရွားၿပီးၿပီးပါၿပီ');
        return redirect ('/suppliers');
    }
}
