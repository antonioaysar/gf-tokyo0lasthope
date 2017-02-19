@extends('layouts.game')

@section('content')
            <h1 class="page-header">Crea News</h1>
            
            <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/news') }}">
                        
                        @include('news.form')
                        
                        
                    </form>
                </div>
            
           
@endsection