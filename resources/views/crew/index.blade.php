@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>{{ __('Crews') }}</span>
                </div>
                <a href="/crew/create" style="align-self:center">
                    <div class="btn btn-primary">
                        <font style="color:white">Add</font>
                    </div>
                </a>
                <a href="/home"  style="align-self:center">
                    <div class="btn">
                        Home
                    </div>
                </a>
                @if (count($data) > 0)
                    <div class="card-body">
                        <table border="1px solid black">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $crew)
                                    <tr >
                                        <td>{{ $crew->first_name }}</td>
                                        <td>{{ $crew->last_name }}</td>
                                        <td>{{ $crew->middle_name }}</td>
                                        <td>{{ $crew->email }}</td>
                                        <td>
                                            <a href="/crew/{{$crew->id}}/edit/" class="d-inline" style="margin-left:4px;">
                                                <span class="btn btn-primary d-inline px-2 py-1">
                                                    <font style="color:white">Edit</font>
                                                </span>
                                            </a>
                                            <a href="/crew/{{$crew->id}}/delete/" class="d-inline" style="margin-left:4px;">
                                                <span class="btn btn-primary d-inline px-2 py-1">
                                                    <font style="color:white">Delete</font>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
