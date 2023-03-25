@extends('master')
@section('content')
<div class="card">
    <div class="card-header">Edit Employee</div>
    <div class="card-body">
        <form method="post" action="{{ route('employees.update', $employee->name) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Employee Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $employee->name }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Employee Place</label>
                <div class="col-sm-10">
                    <input type="text" name="place" class="form-control" value="{{ $employee->place }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Employee Salary</label>
                <div class="col-sm-10">
                    <input type="text" name="salary" class="form-control" value="{{ $employee->salary }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Employee Office</label>
                <div class="col-sm-10">
                    <input type="text" name="office" class="form-control" value="{{ $employee->office }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_name" value="{{ $employee->name }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
@endsection('content')