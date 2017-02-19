@extends('layouts.game') @section('content')
	<div class="main-title">
		<h3>{{ $tmp_district->nome . ' - ' . $tmp_chat->name }}</h3>
	</div>

	<div class="row">
		
		<div id="chatRoom" class="row chat-room">
			@include('chats.board');
		</div>
		
		<form id="newVerification" class="form-horizontal" role="form" method="POST">
	    	{{ csrf_field() }}
			
			<input type="hidden" name="chat_id" value="{{ $tmp_chat->id }}">
			
			<!-- 
			<div class="row" style="color: white;">
				<label for="type" class="col-md-3 control-label">Canale</label>
				<label for="recipient" class="col-md-3 control-label">Tag/Dest./PNG</label>
				<label for="message" class="col-md-3 control-label">Messaggio/Azione</label>
			</div>
			 -->
	    
		    <div class="row chat-form">	               
		                        
                <!-- Type -->
				<div class="{{ $errors->has('type') ? ' has-error' : '' }}">
			    	
			        <div class="col-md-2">        
						{!! Form::select('type', ['P' => 'Parlato', 'S' => 'Sussurro', 'M' => 'Master', 'N' => 'PNG'], null, array('placeholder' => '- Canale -', 'class' => 'form-control')) !!}
			
			            	@if ($errors->has('type'))
			                	<span class="help-block">
			                    	<strong>{{ $errors->first('type') }}</strong>
			                    </span>
			                @endif
			       	</div>
			 	</div>
			 	
			 	<!-- Tag/Dest./PNG -->
				<div class="{{ $errors->has('recipient') ? ' has-error' : '' }}">
			    	
			        <div class="col-md-2">        
						{!! Form::text('recipient', null, array('placeholder' => 'Tag/PNG', 'class' => 'form-control')) !!}
			
			            	@if ($errors->has('recipient'))
			                	<span class="help-block">
			                    	<strong>{{ $errors->first('recipient') }}</strong>
			                    </span>
			                @endif
			       	</div>
			 	</div>
			 	
			 	<!-- Message -->
				<div class="{{ $errors->has('message') ? ' has-error' : '' }}">
			    	
			        <div class="col-md-8">        
						{!! Form::text('message', null, array('placeholder' => 'Messaggio', 'class' => 'form-control')) !!}
			
			            	@if ($errors->has('message'))
			                	<span class="help-block">
			                    	<strong>{{ $errors->first('message') }}</strong>
			                    </span>
			                @endif
			       	</div>
			 	</div>			            				            
        	
        	<!-- 
	        <div class="col-md-2">
	        	<button type="submit" class="btn btn-primary">
	            	Invia
	            </button>
	       	</div>
	       	 -->
	       		        	
		</div>
		
		<!-- 
		<div class="row" style="color: white; margin-top: 10px">
			<label for="skill" class="col-md-3 control-label">Usa Abilità</label>
			<label for="recipient" class="col-md-3 control-label">Usa Caratteristica</label>
			<label for="message" class="col-md-3 control-label">Tira Dado</label>
		</div>
		 -->
	    
	    <div class="row chat-form">
                                   
	    	<!-- Skills -->
			<div class="{{ $errors->has('skil') ? ' has-error' : '' }}">
				    	
				<div class="col-md-3">        
					{!! Form::select('skill', $skills_arr, null, array('placeholder' => '- Abilità -', 'class' => 'form-control')) !!}
		
		            @if ($errors->has('skill'))
	                <span class="help-block">
				    	<strong>{{ $errors->first('skill') }}</strong>
				   	</span>
				    @endif
				</div>
			 </div>
			 	
			<!-- Stats -->
			<div class="{{ $errors->has('stat') ? ' has-error' : '' }}">
				    	
				<div class="col-md-2">        
					{!! Form::select('stat', ['0' => 'Forza', '1' => 'Robustezza', '2' => 'Destrezza', '3' => 'Intelligenza', '4' => 'Saggezza', '5' => 'Percezioni'], null, array('placeholder' => '- Caratteristica -', 'class' => 'form-control')) !!}
		
		            @if ($errors->has('stat'))
	                <span class="help-block">
				    	<strong>{{ $errors->first('stat') }}</strong>
				   	</span>
				    @endif
				</div>
			 </div>
			
			<!-- Spells -->
			<div class="{{ $errors->has('spell') ? ' has-error' : '' }}">
				    	
				<div class="col-md-2">        
					{!! Form::select('spell', [], null, array('placeholder' => '- Skill -', 'class' => 'form-control')) !!}
		
		            @if ($errors->has('spell'))
	                <span class="help-block">
				    	<strong>{{ $errors->first('spell') }}</strong>
				   	</span>
				    @endif
				</div>
			 </div>
			 
			 <!-- Dice -->
			<div class="{{ $errors->has('dice') ? ' has-error' : '' }}">
				    	
				<div class="col-md-2">        
					{!! Form::select('dice', ['0' => 'd4', '1' => 'd6', '2' => 'd8', '3' => 'd10', '4' => 'd12', '5' => 'd20', '6' => 'd100'], null, array('placeholder' => '- Dado -', 'class' => 'form-control')) !!}
		
		            @if ($errors->has('dice'))
	                <span class="help-block">
				    	<strong>{{ $errors->first('dice') }}</strong>
				   	</span>
				    @endif
				</div>
			 </div>		 	
		            				            
	        <!-- Object -->
			<div class="{{ $errors->has('object') ? ' has-error' : '' }}">
				    	
				<div class="col-md-2">        
					{!! Form::select('object', [], null, array('placeholder' => '- Oggetto -', 'class' => 'form-control')) !!}
		
		            @if ($errors->has('object'))
	                <span class="help-block">
				    	<strong>{{ $errors->first('object') }}</strong>
				   	</span>
				    @endif
				</div>
			 </div>		
	        	
		        <div class="col-md-1">
		        	<button type="submit" class="btn btn-primary">
		            	Invia
		            </button>
		       	</div>
        	
		</div>		                       
        
        </form>                
    </div>
	
	
@endsection
