@extends('master')
@section('content')
<div class="card">
    <div class="card-header">Edit Employee</div>
    <div class="card-body">
        <form method="post" action="{{ route('employees.update', $employee->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Employee Name</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_name" class="form-control" value="{{ $employee->employee_name }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Employee Place</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_place" class="form-control" value="{{ $employee->employee_place }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Employee Salary</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_salary" class="form-control" value="{{ $employee->employee_salary }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Employee Office</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_office" class="form-control" value="{{ $employee->employee_office }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $employee->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
@endsection('content')