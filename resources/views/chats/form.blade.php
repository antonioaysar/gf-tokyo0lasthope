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
 	
 	<!-- District -->
	<div class="form-group{{ $errors->has('district_id') ? ' has-error' : '' }}">
    	<label for="district_id" class="col-md-4 control-label">Distretto</label>
        <div class="col-md-6">        
			{!! Form::select('district_id', $districts_arr, null, array('class' => 'form-control')) !!}

            	@if ($errors->has('district_id'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('district_id') }}</strong>
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