@extends('layouts.game')

@section('content')
            <h1 class="page-header">Crea Abilità</h1>
            
            <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/skills') }}">
                        
                        @include('skills.form')
                        
                        
                    </form>
                </div>
            
           
@endsection