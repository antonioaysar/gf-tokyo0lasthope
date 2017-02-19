{{ csrf_field() }}

	<!-- Text -->
	<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
    	<label for="text" class="col-md-4 control-label">Testo</label>

        <div class="col-md-6">
        
			{!! Form::textarea('text', null, array('class' => 'form-control', 'autofocus' => 'autofocus', 'maxlength' => '300')) !!}


            	@if ($errors->has('text'))
                	<span class="help-block">
                    	<strong>{{ $errors->first('text') }}</strong>
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