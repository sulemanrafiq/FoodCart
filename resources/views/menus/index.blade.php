@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">MENU CARD</div>
                <div class="card-body">
                    @if(session('message'))
                    <p class="alert alert-success">{{session('message')}}</p>
                    @endif
                        @if(session('msg'))
                            <p class="alert alert-danger">{{session('msg')}}</p>
                        @endif
                    {!! Form::open(['route'=> 'menus.store', 'method'=> 'POST'  ]) !!}

                    <div class="form-row">
                        <div class="form-group">

                            {!! Form::text('item_name', old('item_name'),['class'=>'form-group', 'id'=>'item_name' , 'placeholder' => 'item name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::select('type', array('burger' => 'burger', 'Drinks' => 'Drinks','Fries' => 'Fries', 'sweets' => 'sweets'), 'burger' ,['class'=>'form-group', 'id'=>'type' ]) !!}

                        </div>
                        <div class="form-group">

                            {!! Form::text('price', old('price'),['class'=>'form-group', 'id'=>'price' , 'placeholder' => 'Price']) !!}
                        </div>
                        <div class="form-group">

                            {!! Form::text('description', old('description'),['class'=>'form-group', 'id'=>'description' , 'placeholder' => 'description']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button(isset($model)? 'update':'save', ['class'=>'btn btn-success', 'type'=>'submit']) !!}

                        </div>

                    </div>
                    {!! Form::close() !!}
                    {{--<a class="btn btn-small btn-info" href="{{route('menus.create')}}">ADD</a>--}}
                    <div class="container">
                        <table class="table">
                            <thead>

                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Item name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($menus as $key=> $item)
                                <tr>
                            
                                    <td>{{ $item['id']}}</td>
                                    <td>{{ $item['item_name']}}</td>
                                    <td>{{ $item['type']}}</td>
                                    <td>{{ $item['price']}}</td>
                                    <td>{{ $item['description']}}</td>
                                  <td >
                                    <a href="../menus/{{$item['id']}}/edit" class="btn btn-primary">Edit</a>
{{--                                      <a class="btn btn-small btn-info" href="../menus/{{$item ['id']}}/edit">Edit</a>--}}
                                      {{--<a class="btn btn-small btn-info" >Del</a>--}}
                                  </td>
                                    <td class="float-left">
                                        {!! Form::open(['method' => 'POST', 'class' => 'pull-right' ,  'route' => ['menus.destroy' , $item ['id'] ] ]) !!}

                                        {!! Form::hidden('_method','DELETE') !!}
                                        {!! Form::submit(('DEL'), ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
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
</div>

@endsection