@extends('layouts.game')

@section('content')
            <h1 class="page-header">Modifica Quest</h1>
            
            <div class="panel-body">
            	{!! Form::model($quest, ['class' => 'form-horizontal', 'method' => 'PATCH','action' => ['QuestsController@update', $quest->id]]) !!}
					@include('quests.form')
				{!! Form::close() !!}
           	</div>
            
           
@endsection