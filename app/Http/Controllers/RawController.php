<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rawitem;
class RawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rawitems = rawitem::orderBy('id', 'DESC')->get();
        $count = rawitem::all()->count();
        return view('rawitems.index',compact('rawitems','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('rawitems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $rawitem = new rawitem;
        $this->validate($request,[
                "code"=>"required|unique:rawitems",
                "name"=>"required|unique:rawitems",
            ]);
        $rawitem->code = $request->code;
        $rawitem->name = $request->name;
        $rawitem->save();
        alert()->success('ထည့္သြင္းၿပီးပါၿပီ');
        return redirect('/rawitems/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rawitem = rawitem::find($id);
        return view('rawitems.show',compact('rawitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rawitem = rawitem::find($id);
        return view('rawitems.edit',compact('rawitem'));
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
        $rawitem = rawitem::find($id);
        $this->validate($request,[
                "code"=>"required",
                "name"=>"required",
            ]);
        $rawitem->code = $request->code;
        $rawitem->name = $request->name;
        $rawitem->save();
        alert()->success('ျပင္ဆင္ၿပီးပါၿပီ');
        return redirect('/rawitems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rawitem = rawitem::find($id);
        $rawitem->delete();
        alert()->success('ဖယ္ရွားၿပီးပါၿပီ');
        return redirect('/rawitems');
    }
}
