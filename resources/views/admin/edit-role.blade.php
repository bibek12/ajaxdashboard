@extends('admin.layouts.master')

@section('title')
  Edit Registered User
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Role For Registered User</h3>
                       
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/update-role/{{$user->id}}" method="POST">
                                    {{csrf_field()}}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <input type="text" class="form-control" id="name" name="username" value="{{$user->name}}" placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Give Role</label>
                                        <select class="form-control" id="role" name="usertype">
                                            <option value="admin">Admin</option>
                                            <option value="vendor">Vendor</option>
                                            <option value="">None</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/register-role" class="btn btn-danger">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection