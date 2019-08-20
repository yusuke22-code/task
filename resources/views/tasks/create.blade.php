@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route' => 'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('status','スタッツ:') !!}
                {!! Form::input('text','status',null,['class' => 'form-control']) !!}
                
            </div>
            <div class="form-group">
                {!! Form::label('content','タスク:') !!}
                {!! Form::text('content',null,['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('投稿',['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection