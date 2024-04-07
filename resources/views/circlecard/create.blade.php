@extends('layouts.admin')


@section('content')
    <div class="card mb-12 mb-xl-12" id="kt_profile_details_view" style="margin: 10px; padding: 10px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Create New Circle Card</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-12 mb-xl-12" id="kt_profile_details_view" style="margin: 10px; padding: 10px">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {!! Form::open(array('route' => 'circle.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Circle:</strong>{!! Form::label('*',"*",['style'=>"color:red"]) !!}
                    {!! Form::select('circle_id',$circles, null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Card:</strong>{!! Form::label('*',"*",['style'=>"color:red"]) !!}
                    {!! Form::select('card_id',$cards, null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Salary:</strong>{!! Form::label('*',"*",['style'=>"color:red"]) !!}
                    {!! Form::text('salary', null, array('placeholder' => 'Salary','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Start:</strong>{!! Form::label('*',"*",['style'=>"color:red"]) !!}
                    {!! Form::text('start', null, array('placeholder' => 'Start','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>{!! Form::label('*',"*",['style'=>"color:red"]) !!}
                    {!! Form::text('status', null, array('placeholder' => 'Status','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
@endsection
