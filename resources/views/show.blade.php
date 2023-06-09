@extends('master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Employee Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('employees.index') }}" class="btn btn-primary btnsm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Employee Name</b></label>
            <div class="col-sm-10">
                {{ $employee->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Employee Place</b></label>
            <div class="col-sm-10">
                {{ $employee->place }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Employee Salary</b></label>
            <div class="col-sm-10">
                {{ $employee->salary }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Employee Office</b></label>
            <div class="col-sm-10">
                {{ $employee->office }}
            </div>
        </div>
    </div>
</div>
@endsection('content')