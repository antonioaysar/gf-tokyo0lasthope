<div class="row details">
	
	<div class="row">
		
		<h3><strong>Dati Anagrafici</strong></h3>
		
		<div class="col-md-6">
			
			<!-- Name -->
            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
            	<label class="col-md-4 control-label">@lang('messages.first_name'):</label>
                <label class="col-md-6 character-card-label">{{ $personaggio->nome }}</label>
        	</div>
        	
        	<!-- Surname -->
			<div class="form-group{{ $errors->has('cognome') ? ' has-error' : '' }}">
            	<label for="cognome" class="col-md-4 control-label">@lang('messages.last_name'):</label>
            	<label class="col-md-6 character-card-label">{{ $personaggio->cognome }}</label>
           	</div>
           	
           	<!-- Place of Birth -->
			<div class="form-group{{ $errors->has('birthplace') ? ' has-error' : '' }}">
            	<label for="birthplace" class="col-md-4 control-label">Nato a:</label>
            	<label class="col-md-6 character-card-label">{{ $personaggio->birthplace }}</label>
           	</div>
           	
           	<!-- Dinastia -->
			<div class="form-group">
            	<label for="dinastia" class="col-md-4 control-label">Dinastia:</label>
            	<label class="col-md-6 character-card-label">Test</label>
           	</div>
			
		</div>
		<div class="col-md-6">
		
			<!-- Age -->
			<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
            	<label for="age" class="col-md-6 control-label">Età apparente:</label>
            	<label class="col-md-6 character-card-label">{{ $age }}</label>
           	</div>
           	
           	<!-- Birth date -->
			<div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
            	<label for="birthdate" class="col-md-6 control-label">Data di nascita:</label>
            	<label class="col-md-6 character-card-label">{{ $birthdate_formatted }}</label>
           	</div>
           	
           	<!-- Mestiere -->
			<div class="form-group">
            	<label for="job" class="col-md-6 control-label">Mestiere:</label>
            	<label class="col-md-6 character-card-label">Add column</label>
           	</div>
           	
           	<!-- Race -->
			<div class="form-group{{ $errors->has('race') ? ' has-error' : '' }}">
            	<label for="race" class="col-md-6 control-label">Discendenza:</label>
            	<label class="col-md-6 character-card-label">{{ $personaggio->id_razza }}</label>
           	</div>
		
		</div>
	</div>
		
	<div class="row">
		<!-- Caratteristiche -->
		<h3><strong>Caratteristiche</strong></h3>
			
		<div class=row">
			<div class="col-md-12">
				<label for="race" class="col-md-3 control-label">Livello:</label>
        		<label class="col-md-3 character-card-label">20</label>
			</div>	
				
		</div>
			
		<div class="col-md-6">
            	
            <label for="race" class="col-md-6 control-label">Forza:</label>
            <label class="col-md-6 character-card-label">{{ $personaggio->car0 }}</label>
            	
            <label for="race" class="col-md-6 control-label">Robustezza:</label>
            <label class="col-md-6 character-card-label">{{ $personaggio->car1 }}</label>
            	
            <label for="race" class="col-md-6 control-label">Destrezza:</label>
            <label class="col-md-6 character-card-label">{{ $personaggio->car2 }}</label>
            	
		</div>
				
		<div class="col-md-6">
            <label for="race" class="col-md-6 control-label">Intelligenza:</label>
            <label class="col-md-6 character-card-label">{{ $personaggio->car3 }}</label>
            	
            <label for="race" class="col-md-6 control-label">Saggezza:</label>
            <label class="col-md-6 character-card-label">{{ $personaggio->car4 }}</label>
            	
            <label for="race" class="col-md-6 control-label">Percezioni:</label>
            <label class="col-md-6 character-card-label">{{ $personaggio->car5 }}</label>
		</div>
		
	</div>             
	
	<div class="row">
		
		<h3><strong>Note del Master</strong></h3>
		
		<form id="character-details" class="form-horizontal details-form" role="form" method="POST">
    	{{ csrf_field() }}
		
			 <div class="form-group col-md-12">
				{!! Form::textarea('master_notes', null, array('class' => 'form-control', 'rows' => '4', 'readonly' => 'readonly')) !!}
		     </div>
		                      
		</form>
		
	</div>
	
	<div class="row">
		
		<div class="col-md-6">
		
			<!-- Data iscrizione -->
			<div class="form-group">
            	<label for="birthdate" class="col-md-6 control-label">Data iscrizione:</label>
            	<label class="col-md-6 character-card-label">{{ $birthdate_formatted }}</label>
           	</div>
     	</div>
     	
     	<div class="col-md-6">
           	
           	<!-- Ultimo ingresso -->
			<div class="form-group">
            	<label for="birthdate" class="col-md-6 control-label">Ultimo ingresso:</label>
            	<label class="col-md-6 character-card-label">{{ $birthdate_formatted }}</label>
           	</div>
		
		</div>
	</div>	       
		
</div>