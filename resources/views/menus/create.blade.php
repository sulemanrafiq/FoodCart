@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">MENU CARD</div>
                    <div class="card-body">

                            {!! Form::open(['route'=> 'menus.store', 'method'=> 'POST'  ]) !!}

                            <div class="form-row">
                                <div class="form-group">
                                    {!! Form::label('name','Item Name') !!}
                                    {!! Form::text('item_name',null,['class'=>'form-group', 'id'=>'item_name']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::button(isset($model)? 'update':'save', ['class'=>'btn btn-success', 'type'=>'submit']) !!}

                                </div>

                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
