@extends('layouts.app')

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
@section('content')

    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center">Homepage</h4>
                    </div>
                    <div class="card-body">
                        <div style="padding-bottom: 10px;">
                            <a href="{{ url('add-employee/') }}" class="btn btn-primary btn-sm">Add New Employee</a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($employee as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <a href="{{ url('edit-employee/'.$item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-employee/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
