@extends('layouts.game')

@section('content')
            <h1 class="page-header">Modifica Distretto</h1>
            
            <div class="panel-body">
            	{!! Form::model($district, ['class' => 'form-horizontal', 'method' => 'PATCH','action' => ['DistrictsController@update', $district->id]]) !!}
					@include('districts.form')
				{!! Form::close() !!}
           	</div>
            
           
@endsection