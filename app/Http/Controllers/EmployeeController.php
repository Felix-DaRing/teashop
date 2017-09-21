<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Loan;
use carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::all();

        // echo $employees;  die();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new employee;
        $this->validate($request,[
          "name"=>"required",
          "father"=>"required",
          "nrc"=>"required",
          "dob"=>"required|date",
          "sex"=>"required",
          "marry"=>"required",
          "phone"=>"",
          "ward"=>"",
          "city"=>"required",
          "state"=>"required",
          "role"=>"required",
          "salary"=>"required|numeric",
          "joindate"=>"required|date",
          ] );
        $employee->name = $request->name;
        $employee->father = $request->father;
        $employee->nrc = $request->nrc;
        $employee->dob = $request->dob;
        $employee->sex = $request->sex;
        $employee->marry = $request->marry;
        $employee->phone = $request->phone;
        $employee->ward = $request->qtr;
        // echo $request->qtr; die();
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->role = $request->role;
        $employee->salary = $request->salary;
        $employee->joindate = $request->joindate;

        $employee->save();
        alert()->success('ထည့္သြင္းၿပီးပါၿပီ');
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = employee::find($id);

        $loans = loan::where('employee_id','=', $employee->id)->get();
        $c = $loans->count();
        $a = $loans->sum('amount');
        $salary = $employee->salary;
        $rest = $salary - $a;
        // echo $rest; die();
        // echo $loans; die();
        return view('employees.show', compact('employee','loans', 'c', 'a', 'rest'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = employee::find($id);
        $sex = $emp->sex;
        $marry = $emp->marry;
        return view('employees.edit', compact('emp', 'sex', 'marry'));
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
        $employee = employee::find($id);

        $employee->name = $request->name;
        $employee->father = $request->father;
        $employee->nrc = $request->nrc;
        $employee->dob = $request->dob;
        $employee->sex = $request->sex;
        $employee->marry = $request->marry;
        $employee->phone = $request->phone;
        $employee->ward = $request->qtr;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->role = $request->role;
        $employee->salary = $request->salary;
        $employee->joindate = $request->joindate;

        $employee->save();
        alert()->success('ျပင္ဆင္ၿပီးပါၿပီ');
        return redirect("/employees");

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
