@extends('layouts.game')

@section('content')
            <h1 class="page-header">Crea Distretto</h1>
            
            <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/districts') }}">
                        
                        @include('districts.form')
                        
                        
                    </form>
                </div>
            
           
@endsection