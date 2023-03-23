<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Employee::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'place'         =>  'required',
            'salary'         =>  'required',
            'office'         =>  'required',
        ]);

        

        $employee = new Employee;

        $employee->name = $request->name;
        $employee->place = $request->place;
        $employee->salary = $request->salary;
        $employee->office = $request->office;

        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Student Added successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
        return view('show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        return view('edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $request->validate([
            'employee_name'          =>  'required',
            'employee_place'         =>  'required',
            'employee_salary'         =>  'required',
            'employee_office'         =>  'required',
        ]);

        

        $employee = new Employee;

        $employee = Employee::find($request->employee_name);
        $employee->employee_place = $request->employee_place;
        $employee->employee_salary = $request->employee_salary;
        $employee->employee_office = $request->employee_office;

        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Student Data has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Student Data  deleted successfully.');
    }
}
