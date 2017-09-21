<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use App\Rawitem;
use App\Category;
use App\Supplier;
use App\Menu;
use App\Purchase;
use carbon\carbon;
use DB;
use Alert;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request){
      $startdate = $request->startdate;
      $enddate = $request->enddate;
      // echo $startdate; echo $enddate; die();
      $purchases = purchase::with(['rawitem', 'category', 'supplier' ])->whereBetween('created_at', array($startdate, $enddate))->get();
      $c = $purchases->count();
      $q = $purchases->sum('quantity');
      $a = $purchases->sum('total');
      return view('purchases.find', compact('purchases', 'startdate', 'enddate', 'c', 'q', 'a'));

    }

    public function date()
    {
        $debts = DB::table('purchases')->sum('debt');
        $categories = category::all();
        // echo $purchases; die();
        return view('purchases.date', compact('debts', 'categories'));
    }

    public function debt()
    {
      $debts = purchase::with(['rawitem', 'category', 'supplier'])->where('debt','>', 0)->get();
      // echo $purchases; die();
      return view('purchases.find', compact('debts'));
    }

    public function debtClear($id)
    {
      $debt = Purchase::find($id);
      echo $debt; die();
      $debt->debt = 0;
      $debt->save();
      alert()->success('ေၾကြးက်န္ရွင္းဲပီးပါၿပီ');
      return redirect('/purchases/date');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  category::all();
        $rawitems =  rawitem::all();
        $suppliers =  supplier::all();

        $today = DB::table('purchases')->where('created_at', '>=', Carbon::today());
        $q = $today->sum('quantity');
        $c = $today->count();
        $a = $today->sum('total');

        $purchases = purchase::with(['rawitem', 'category', 'supplier'])->where('created_at', '>=', Carbon::today())->get();
        // echo $purchases; die();
        return view('purchases.create', compact('categories', 'rawitems', 'suppliers', 'purchases', 'q', 'c', 'a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new purchase;
        $this->validate($request,[
                'rawitem_id'=>'required',
                'supplier_id'=>'required',
                'category_id'=>'required',
                'buyer'=>'required',
                'price'=>'required|numeric',
                'quantity'=>'required|numeric',
                'unit'=>'required',
                'debt'=>'',
                'total'=>'required|numeric',
            ]);
        $purchase->rawitem_id = $request->rawitem_id;
        $purchase->category_id = $request->category_id;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->buyer = $request->buyer;
        $purchase->price = $request->price;
        $purchase->quantity = $request->quantity;
        $purchase->unit = $request->unit;
        $purchase->debt = $request->debt;
        $purchase->total = $request->total;

        $purchase->save();
        alert()->success('၀ယ္ယူၿပီးပါၿပီ');

        return redirect('/purchases/create');
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
    public function edit()
    {
        $purchases = purchase::all();
        return view('purchases.edit', compact('purchases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $purchase = purchase::with(['rawitem', 'supplier', 'category'])->find($id);
      // echo $purchase->rawitem['name']; die();
      return view('purchases.update', compact('purchase'));
    }

    public function updateApply(Request $request, $id)
    {
      $purchase = purchase::with(['rawitem', 'supplier', 'category'])->find($id);

      $purchase->price = $request->price;
      $purchase->quantity = $request->quantity;
      $purchase->total = $request->total;
      $purchase->debt = $request->debt;

      $purchase->save();
      alert()->success('ျပင္ဆင္ၿပီးပါၿပီ');
      return redirect('/purchases/edit');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = purchase::find($id);
        $purchase->delete();
        alert()->success('ဖယ္ရွားၿပီးပါၿပီ');
        return redirect('/purchases/edit');
    }
}
