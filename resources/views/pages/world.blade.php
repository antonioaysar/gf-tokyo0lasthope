@extends('layouts.app')

@section('title', 'Ambientazione')
@section('description', 'Ambientazione di Tokyo 0 Last Hope')


@section('content')

			<div class="rulebook">
                <div class="col-xs-12 col-sm-4 col-md-4 rulebook-index">
                	<div class="row">
                			<h4>@lang('messages.world')</h4>

	                			<ul>
	                				<li><a id="anticamente" href="#anticamente">» @lang('messages.anticamente')</a></li>
	                				<li><a id="tokyo" href="#tokyo">» @lang('messages.tokyo')</a></li>
	                				<li><a id="tokyo0" href="#tokyo0">» @lang('messages.tokyo0')</a></li>
	                				<li><a id="magia" href="#magia">» @lang('messages.magia')</a></li>
	                				<li><a id="pngambientazione" href="#pngambientazione">» @lang('messages.pngambientazione')</a></li>
	                				<li><a id="sistema_sanitario" href="#sistema_sanitario">» @lang('messages.sistema_sanitario')</a></li>
	                				<li><a id="oltremondovelo" href="#oltremondovelo">» @lang('messages.oltremondovelo')</a></li>
	                				<li><a id="discendenze" href="#discendenze">» @lang('messages.discendenze')</a></li>
	                				<li><a id="dinastie" href="#dinastie">» @lang('messages.dinastie')</a></li>
	                				<li><a id="cronologia" href="#cronologia">» @lang('messages.cronologia')</a></li>
	                				<li><a id="faq" href="#faq">» @lang('messages.faq')</a></li>              				
	                			</ul>
                	</div>
                	<div class="visible-xs-block rulebook-separator"></div>
                </div>
                
                <div class="col-xs-12 col-sm-8 col-md-8 rulebook-board">
                	<div id="anticamente-panel">
	                		@include('pages.world.anticamente')	
	                	</div>
	                	<div id="tokyo-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.tokyo')	
	                	</div>
	                	<div id="tokyo0-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.tokyo0')	
	                	</div>
	                	<div id="magia-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.magia')	
	                	</div>
	                	<div id="pngambientazione-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.pngambientazione')
	                	</div>
	                	<div id="sistema_sanitario-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.sistema_sanitario')
	                	</div>
	                	<div id="oltremondovelo-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.oltremondovelo')
	                	</div>
	                	<div id="discendenze-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.discendenze')
	                	</div>
	                	<div id="dinastie-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.dinastie')
	                	</div>
	                	<div id="cronologia-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.cronologia')
	                	</div>
	                	<div id="faq-panel" class="rulebook-boards-hidden">
	                		@include('pages.world.faq')
	                	</div>

                </div>
                
			</div>  	            


@endsection

@section('custom-js')

<script src="{{ elixir('assets/js/world-js.js') }}" type="text/javascript"></script>

@endsection