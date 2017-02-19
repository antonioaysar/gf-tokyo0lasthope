@extends('layouts.game')

@section('content')
            <h1 class="page-header">Crea Quests</h1>
            
            <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/quests') }}">
                        
                        @include('quests.form')
                        
                        
                    </form>
                </div>
            
           
@endsection