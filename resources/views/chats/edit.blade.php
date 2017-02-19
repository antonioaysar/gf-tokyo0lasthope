@extends('layouts.game')

@section('content')
            <h1 class="page-header">Modifica Chat</h1>
            
            <div class="panel-body">
            	{!! Form::model($chat, ['class' => 'form-horizontal', 'method' => 'PATCH','action' => ['ChatsController@update', $chat->id]]) !!}
					@include('chats.form')
				{!! Form::close() !!}
           	</div>
            
           
@endsection