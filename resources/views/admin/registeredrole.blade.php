@extends('admin.layouts.master')

@section('title')
   Registered User
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Registered User</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
                  @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>SN</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                       <th>Edit</th>
                       <th>Detete</th>
                    </thead>
                    <tbody>
                      @foreach($user as $i=>$row)
                      <tr>
                        <td>{{++$i}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->usertype}}</td>
                        <td>
                             <a href="/edit-role/{{$row->id}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                       

                            <form action="/delete-role/{{$row->id}}" method="POST">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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

@section('scripts')

@endsection