{{ csrf_field() }}

	<!-- Name -->
	<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
    	<label for="nome" class="col-md-4 control-label">Nome</label>
        <div class="col-md-6">        
			{!! Form::text('nome', null, array('class' => 'form-control', 'autofocus' => 'autofocus')) !!}

            	@if ($errors->has('nome'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('nome') }}</strong>
                    </span>
                @endif
       	</div>
 	</div>
 	
 	<!-- Description -->
	<div class="form-group{{ $errors->has('descrizione') ? ' has-error' : '' }}">
    	<label for="descrizione" class="col-md-4 control-label">Descrizione</label>
        <div class="col-md-6">        
			{!! Form::textarea('descrizione', null, array('class' => 'form-control')) !!}

            	@if ($errors->has('descrizione'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('descrizione') }}</strong>
                    </span>
                @endif
       	</div>
 	</div>                                        

	<!-- Position -->
	<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
    	<label for="position" class="col-md-4 control-label">Posizione</label>
        <div class="col-md-6">        
			{!! Form::text('position', null, array('class' => 'form-control')) !!}

            	@if ($errors->has('position'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('position') }}</strong>
                    </span>
                @endif
       	</div>
 	</div>

	<div class="form-group">
    	<div class="col-md-6 col-md-offset-4">
        	<button type="submit" class="btn btn-primary">
            	Conferma
            </button>
       	</div>
 	</div>