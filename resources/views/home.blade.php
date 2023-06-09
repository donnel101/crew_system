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

                    <a href="/crew/" style="text-align:center;" class="mb-2 d-block">
                        <div class="btn btn-primary" style="width:100px;">
                            <font style="color:white">Crew</font>
                        </div>
                    </a>
                    <a href="/document/" style="text-align:center;" class="mb-2 d-block">
                        <div class="btn btn-primary" style="width:100px;">
                            <font style="color:white">Document</font>
                        </div>
                    </a>
                    <a href="/user/" style="text-align:center;" class="mb-2 d-block">
                        <div class="btn btn-primary" style="width:100px;">
                            <font style="color:white">User</font>
                        </div>
                    </a>
                    <table border="1px solid black">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crews as $crew)
                                <tr>
                                    <td>{{ $crew->first_name }}</td>
                                    <td>{{ $crew->last_name }}</td>
                                    <td>{{ $crew->middle_name }}</td>
                                    <td>{{ $crew->email }}</td>
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
