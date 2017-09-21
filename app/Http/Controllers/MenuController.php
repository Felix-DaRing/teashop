<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\category;
use Alert;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $category; die();
        // $menus= menu::with('category','category.name')->where('category_id',$category->id)->get();
        $menus = menu::with('category')->get();
        // echo $menus; die();
        $count = menu::all()->count();
        return view('menus.index', compact('menus','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = category::all();
        return view('menus/create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new menu;
        $this->validate($request,[
                'code'=>'required|unique:menus',
                'name'=>'required|unique:menus',
                'image'=>'image',
                'category_id'=>'required',
                'price'=>'required|numeric',
                'active'=>'required',
            ]);
        if($request->file('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $filenameToStore);

            $menu->code = $request->code;
            $menu->name = $request->name;
            $menu->image = $filenameToStore;
            $menu->category_id = $request->category_id;
            $menu->price = $request->price;
            $menu->active = $request->active;
            $menu->save();
            alert()->success('ထည့္သြင္းၿပီးပါၿပီ!');
            return redirect('/menus/create');
        }
        else
        {
            $menu->code = $request->code;
            $menu->name = $request->name;
            $menu->image = 'nth.png';
            $menu->category_id = $request->category_id;
            $menu->price = $request->price;
            $menu->active = $request->active;
            $menu->save();
            alert()->success('ထည့္သြင္းၿပီးပါၿပီ!');
            return redirect('/menus/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = menu::with('category')->find($id);
        return view('menus/show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = menu::find($id);
        $categories = category::all();
        return view('menus/edit', compact('menu', 'categories'));
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
        $menu = menu::with('category')->find($id);
        $this->validate($request,[
                "code"=>"required",
                "name"=>"required",
                "image"=>"",
                "category_id"=>"required",
                "price"=>"required|numeric",
                "active"=>"required",
            ]);
        if($request->file('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $filenameToStore);

            $menu->code = $request->code;
            $menu->name = $request->name;
            $menu->image = $filenameToStore;
            $menu->category_id = $request->category_id;
            $menu->price = $request->price;
            $menu->active = $request->active;
            $menu->save();
            alert()->success('ျပင္ဆင္ၿပီးပါၿပီ!');
            return redirect('categories/'.$menu->category_id);
        }
        else{
            $menu->code = $request->code;
            $menu->name = $request->name;
            // $menu->image = $filenameToStore;
            $menu->category_id = $request->category_id;
            $menu->price = $request->price;
            $menu->active = $request->active;
            $menu->save();
            alert()->success('ျပင္ဆင္ၿပီးပါၿပီ!');
            return  redirect('categories/'.$menu->category_id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forRoute = menu::with('category')->find($id);
        $menu = menu::find($id);
        $menu->delete();
        alert()->success('ဖယ္ရွားၿပီးပါပီ');
        return redirect('categories/'.$forRoute->category_id);
    }
}
