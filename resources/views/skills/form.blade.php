{{ csrf_field() }}

	<!-- Name -->
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    	<label for="name" class="col-md-4 control-label">Nome</label>
        <div class="col-md-6">        
			{!! Form::text('name', null, array('class' => 'form-control', 'autofocus' => 'autofocus')) !!}

            	@if ($errors->has('name'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
       	</div>
 	</div>

	<!-- Description -->
	<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    	<label for="description" class="col-md-4 control-label">Descrizione</label>
        <div class="col-md-6">        
			{!! Form::textarea('description', null, array('class' => 'form-control')) !!}

            	@if ($errors->has('description'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
       	</div>
 	</div>
 	
 	<!-- Statistic -->
	<div class="form-group{{ $errors->has('stat') ? ' has-error' : '' }}">
    	<label for="description" class="col-md-4 control-label">Caratteristica</label>
        <div class="col-md-6">        
			{!! Form::select('stat', ['0' => 'Forza', '1' => 'Robustezza', '2' => 'Destrezza', '3' => 'Intelligenza', '4' => 'Saggezza', '5' => 'Percezioni'], '0', array('class' => 'form-control')) !!}

            	@if ($errors->has('stat'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('stat') }}</strong>
                    </span>
                @endif
       	</div>
 	</div>
 	
	<!-- Race -->
	<div class="form-group{{ $errors->has('id_race') ? ' has-error' : '' }}">
    	<label for="id_race" class="col-md-4 control-label">Razza</label>
        <div class="col-md-6">        
			{!! Form::select('id_race', ['-1' => 'Non riservata', '1000' => 'Umani'], '-1', array('class' => 'form-control')) !!}

            	@if ($errors->has('id_race'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('id_race') }}</strong>
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