@extends('master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">
    <div class="card-header">Add Employee</div>
    <div class="card-body">
        <form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Employee Name</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Employee Place</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_place" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Employee Salary</label>
                <div class="col-sm-10">
                     <input type="text" name="employee_salary" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Employee Office</label>
                <div class="col-sm-10">
                    <input type="text" name="employee_office" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>
@endsection('content')