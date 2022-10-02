@extends('employee.layout')

@section('content')

    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit & Update Employee
                            <a href="{{ url('employee') }}" class="btn btn-danger float-end" style="float: right;">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('update-employee/'.$employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="">Employee Name</label>
                                <input type="text" name="name" value="{{$employee->name}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Employee Email</label>
                                <input type="text" name="email" value="{{$employee->email}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Employee Address</label>
                                <input type="text" name="address" value="{{$employee->address}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Employee</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
