@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Document') }}</div>
                <a href="/document/create" style="align-self:center">
                    <div class="btn btn-primary">
                        <font style="color:white">Add</font>
                    </div>
                </a>
                <a href="/home"  style="align-self:center">
                    <div class="btn">
                        Home
                    </div>
                </a>
                @if (count($crews) > 0)
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
                                @foreach ($crews as $crew)
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
                                            @if (count($crew->document) > 0)
                                                <span class="btn btn-primary d-inline px-2 py-1">
                                                    <font style="color:white">Documents</font>
                                                </span>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                @endif

                <div class="modal fade" id="edit-modal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" align="center"><b>Edit User</b></h4>
                        </div>
                        <div class="modal-body">
                        <form role="form" action="/edit_user">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User ID</label>
                                <input type="text" class="form-control" name="user_id" placeholder="User ID" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text" class="form-control" name="contact" placeholder="Enter contact">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Change Password</label>
                                <input type="password" class="form-control" name="change_password" placeholder="Enter password">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
