@extends('layouts.game')

@section('content')
            <h1 class="page-header">Modifica News</h1>
            
            <div class="panel-body">
            	{!! Form::model($news, ['class' => 'form-horizontal', 'method' => 'PATCH','action' => ['NewsController@update', $news->id]]) !!}
					@include('news.form')
				{!! Form::close() !!}
           	</div>
            
           
@endsection