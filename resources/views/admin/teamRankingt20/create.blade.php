@extends('layouts.admin')




@section('content')




    <h2>Add Ranking for T20s</h2>


    <div class="row">


        <div class="col-sm-8">

            <div class="panel-body">

    {!! Form::open(['method'=>'POST', 'action'=> 'TeamRankingT20Controller@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('club_id', 'Club') !!}
                    {!! Form::select('club_id', [''=>'Choose Club'] + $clubs, null, ['class'=>'form-control'])!!}
                </div>



                <div class="form-group">
                    {!! Form::label('points', 'Points') !!}
                    {!! Form::number('points', null, ['class'=>'form-control'])!!}
                </div>





    <div class="form-group">
        {!! Form::submit('Add Ranking', ['class'=>'btn btn-primary col-sm-3']) !!}
    </div>

    {!! Form::close() !!}

            </div>
</div>
    </div>


    @include('includes.form_error')

@stop