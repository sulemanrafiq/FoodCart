@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>
                    <div class="card-body">
                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{{session('message')}}</strong>
                            </div>
                        @endif
          <ul><li>
                  <a href="{{url('users')}}">Create User</a>
              </li>
              <li>
                  <a href="{{url('menus')}}">Add Menu</a>
              </li>
              <li>
                  <a href="">View Order</a>
              </li>
          </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
