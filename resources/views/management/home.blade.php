@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Total Users</div>
                        <div class="card-body">
                            <h2>{{$users}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Total Questions</div>
                        <div class="card-body">
                            <h2>{{$questions}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row mt-5">
                <h3>Questions with number of attempted users</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Qustion ID</th>
                            <th>User Attempt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($answerCount as $rec)
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rec->name }}</td>
                            <td>{{ $rec->answers_count }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection