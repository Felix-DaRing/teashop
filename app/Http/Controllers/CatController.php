<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Purchase;
use App\Rawitem;
use App\Supplier;
use App\Menu;
use DB;
use Alert;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function date()
    {
      return view('categories.date');
    }

    public function find(Request $request)
    {
      $startdate = $request->startdate;
      $enddate = $request->enddate;
      $category_id = $request->category_id;
      // echo $category_id;
      $purchases = purchase::with(['rawitem', 'category', 'supplier'])->whereBetween('created_at', array($startdate, $enddate))->where('category_id', $category_id)->get();
      // echo $purchases; die();
      $a = $purchases->sum('total');
      $q = $purchases->sum('quantity');
      $c = $purchases->count();
      // echo $a; die();
      $cat = category::find($category_id);
      // echo $cat; die();
      return view('categories.find', compact('purchases', 'a', 'q', 'c', 'startdate', 'enddate', 'cat'));
    }

    public function index()
    {
        $categories = category::orderBy('id', 'DESC')->get();
        $count = category::all()->count();
        return view('categories/index',compact('categories', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category;
        $this->validate($request,[
                'name'=>'required|unique:categories',
                'code'=>'required|unique:categories',
            ]);
        $category->name = $request->name;
        $category->code = $request->code;
        $category->save();
        alert()->success('ထည့္သြင္းၿပီးပါၿပီ');
        return redirect('/categories/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = category::find($id);
        $menus = menu::where('category_id',$category->id)->get();
        $count = menu::where('category_id', $category->id)->count();
        $images = menu::inRandomOrder()->first();
        // echo $menu; die();
        return view('categories.show',compact('category', 'menus', 'images', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->with('category', $category);
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
        $category = category::find($id);
        $this->validate($request,[
                'name'=>'required',
                'code'=>'required',
            ]);
        $category->name = $request->name;
        $category->code = $request->code;
        $category->save();
        alert()->success('ျပင္ဆင္ၿပီးပါပီ');
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        $row = menu::where('category_id', $category->id)->count();
        if($row > 0){

            // echo $warning; die();
            alert()->error('ဖယ္ရွားလို႕မရပါ','သည္အမ်ိဳးအစားတြင္ပါ၀င္ေသာ menu မ်ားကို ဦးစြာဖယ္ရွားပါ')->persistent('close');
            return redirect('categories');
        }else{
            // $warning = "ရသည္";
            // echo $warning; die();
            $category = category::find($id);
            $category->delete();
             alert()->success('ဖယ္ရွားၿပီးပါၿပီ');
            return redirect('/categories');
        }


    }
}
