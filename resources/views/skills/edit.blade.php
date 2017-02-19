@extends('layouts.game')

@section('content')
            <h1 class="page-header">Modifica Abilità</h1>
            
            <div class="panel-body">
            	{!! Form::model($skill, ['class' => 'form-horizontal', 'method' => 'PATCH','action' => ['SkillsController@update', $skill->id]]) !!}
					@include('skills.form')
				{!! Form::close() !!}
           	</div>
            
           
@endsection