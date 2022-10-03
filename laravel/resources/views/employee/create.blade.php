{{--@extends('employee.layout')--}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 20px;">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="card">
                <div class="card-header" >
                    <h4>Insert New Employee
                        <a href="{{ url('home') }}" class="btn btn-danger float-end" style="float: right;">BACK</a>
                    </h4>
                </div>
                <div class="card-body" >

                    <form action="{{ url('add-employee') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Employee Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Employee Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Employee Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
