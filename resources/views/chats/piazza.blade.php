@extends('layouts.game')

@section('content')
            <h1 class="page-header">Crea Chat</h1>
            
            <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/chats') }}">
                        
                        @include('chats.form')
                        
                        
                    </form>
                </div>
            
           
@endsection