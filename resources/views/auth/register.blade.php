@inject('utils', 'App\Http\Utilities\Utilities')

@extends('layouts.app')

@section('title', 'Iscrizione')
@section('description', 'Iscriviti su Tokyo 0 Last Hope')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading"><h3>@lang('messages.register')</h3></div>  -->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

						<!-- User Details start -------------------------------------------------------------------------------------------------------->
						 <div class="stats-subtitle">
							<h4>@lang('messages.user_details')</h4>
						</div>
						
						<!-- EMail -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">@lang('messages.email')</label>

                            <div class="col-md-6">
								<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" maxlength="50" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!-- Password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">@lang('messages.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!-- Confirm Password -->
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation" class="col-md-4 control-label">@lang('messages.confirm_password')</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <hr class="dotted">
                        
                        <!-- User Details end -------------------------------------------------------------------------------------------------------->

						<!-- Character Details start ------------------------------------------------------------------------------------------------->
						 <div class="stats-subtitle">
							<h4>@lang('messages.character_details')</h4>
						</div>
						
						<!-- Name -->
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">@lang('messages.first_name')</label>

                            <div class="col-md-6">
                                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" maxlength="20" >

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Surname -->
						<div class="form-group{{ $errors->has('cognome') ? ' has-error' : '' }}">
                            <label for="cognome" class="col-md-4 control-label">@lang('messages.last_name')</label>

                            <div class="col-md-6">
                                <input type="text" name="cognome" id="cognome" class="form-control" value="{{ old('cognome') }}" maxlength="50">

                                @if ($errors->has('cognome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cognome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						

                        <!-- Sesso -->
                        <div class="form-group{{ $errors->has('sesso') ? ' has-error' : '' }}">
                            <label for="sesso" class="col-md-4 control-label">@lang('messages.sex')</label>

                            <div class="col-md-6">
                                <select id="sesso" name="sesso" class="form-control">
                                	<option value="" disabled selected></option>
									<option value="m" >@lang('messages.man')</option>
									<option value="f">@lang('messages.woman')</option>
								</select>

                                @if ($errors->has('sesso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sesso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Age -->
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">@lang('messages.age')</label>

                            <div class="col-md-2">
                                <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}" maxlength="3" min="0" step="1">

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Birthplace 
						<div class="form-group{{ $errors->has('birthplace') ? ' has-error' : '' }}">
                            <label for="birthplace" class="col-md-4 control-label">@lang('messages.birthplace')</label>

                            <div class="col-md-6">
                                <input type="text" name="birthplace" id="birthplace" class="form-control" value="{{ old('birthplace') }}" maxlength="50" required>

                                @if ($errors->has('birthplace'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthplace') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        -->
                        
                        <!-- Birthdate 
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}"> 
					        <label for="birthdate" class="col-md-4 control-label">@lang('messages.birthdate')</label>
					        
					        <div class="col-md-6">
					        	<input type="date" class="form-control" id="birthdate" name="birthdate" />
					        	
					        	@if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
					        </div>
					    </div>
					    -->

                        <!-- Race 
                        <div class="form-group{{ $errors->has('id_razza') ? ' has-error' : '' }}">
                            <label for="id_razza" class="col-md-4 control-label">@lang('messages.descent')</label>

                            <div class="col-md-6">
                                <select id="id_razza" name="id_razza" class="form-control" required>
									<option value="1000" selected="selected">@lang('messages.human')</option>
								</select>

                                @if ($errors->has('id_razza'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_razza') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        -->
                        
                        <!-- Classe Sociale -->
                        <div class="form-group{{ $errors->has('social_class') ? ' has-error' : '' }}">
                            <label for="social_class" class="col-md-4 control-label">@lang('messages.social_class') 
                            	<a id="help-discendenze" href="#" data-toggle="tooltip" title="#" target="_blank">
                            		<i class="fa fa-info-circle" aria-hidden="true"></i>
                            	</a>
                            </label>

                            <div class="col-md-6">
                                <select id="social_class" name="social_class" class="form-control">
                                	<option value="" disabled selected></option>
									@foreach($utils::socialClassesRegistration() as $socialClass)
										<option value="{{ $socialClass }}">{{ $socialClass }}</option>
									@endforeach
								</select>

                                @if ($errors->has('social_class'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('social_class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Discendenza -->
                        <div class="form-group{{ $errors->has('discendenza_id') ? ' has-error' : '' }}">
                            <label for="discendenza_id" class="col-md-4 control-label">@lang('messages.descent') 
                            	<a id="help-discendenze" href="{{ url('/ambientazione#discendenze') }}" data-toggle="tooltip" title="http://tokyo0lasthope/ambientazione#discendenze" target="_blank">
                            		<i class="fa fa-info-circle" aria-hidden="true"></i>
                            	</a>
                            </label>

                            <div class="col-md-6">
                                <select id="discendenza_id" name="discendenza_id" class="form-control">
                                	<option value="" disabled selected></option>
									@foreach($utils::discendenze() as $discendenza)
										<option value="{{ $discendenza->id }}">{{ $discendenza->name }}</option>
									@endforeach
								</select>

                                @if ($errors->has('discendenza_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('discendenza_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Caratteristiche -->
                        <div class="stats-subtitle">
							<h4>@lang('messages.characteristics')</h4>
						</div>
						
						<div class="form-group{{ $errors->has('car0') ? ' has-error' : '' }}">

                                @if ($errors->has('car0'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('car0') }}</strong>
                                    </span>
                                @endif
                        </div>
						
							<div class="row">
							
								<!-- Stats column 1 -->
								<div class="col-md-5 col-md-offset-1">
									
									<!-- Strength -->
									<div class="form-group">
			                            <label for="car0" class="col-md-4 control-label">@lang('messages.car0')</label>
			
			                            <div class="col-md-5">
			                                <select id="car0" name="car0" class="form-control" required>
												@foreach($utils::all() as $code => $skill_point)
													<option value="{{ $code }}">{{ $skill_point }}</option>
												@endforeach
											</select>
			                            </div>
			                            
			                            <span id="car0-bonus" class="stats-bonus">(+0)</span>
			                        </div>
			                        
			                        <!-- Dex -->
									<div class="form-group{{ $errors->has('car1') ? ' has-error' : '' }}">
			                            <label for="car1" class="col-md-4 control-label">@lang('messages.car1')</label>
			
			                            <div class="col-md-5">
			                                <select id="car1" name="car1" class="form-control" required>
												@foreach($utils::all() as $code => $skill_point)
													<option value="{{ $code }}">{{ $skill_point }}</option>
												@endforeach
											</select>
			
			                                @if ($errors->has('car1'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('car1') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                            
			                            <span id="car1-bonus" class="stats-bonus">(+0)</span>
			                        </div>
			                        
			                        <!-- Const -->
									<div class="form-group{{ $errors->has('car2') ? ' has-error' : '' }}">
			                            <label for="car2" class="col-md-4 control-label">@lang('messages.car2')</label>
			
			                            <div class="col-md-5">
			                                <select id="car2" name="car2" class="form-control" required>
												@foreach($utils::all() as $code => $skill_point)
													<option value="{{ $code }}">{{ $skill_point }}</option>
												@endforeach
											</select>
			
			                                @if ($errors->has('car2'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('car2') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                            
			                            <span id="car2-bonus" class="stats-bonus">(+0)</span>
			                        </div>			                        
			                        
								</div>
								
								<!-- Stats column 2 -->
								<div class="col-md-5 col-md-offset-1">
									
									<!-- Mind -->
									<div class="form-group{{ $errors->has('car3') ? ' has-error' : '' }}">
			                            <label for="car3" class="col-md-4 control-label">@lang('messages.car3')</label>
			
			                            <div class="col-md-5">
			                                <select id="car3" name="car3" class="form-control" required>
												@foreach($utils::all() as $code => $skill_point)
													<option value="{{ $code }}">{{ $skill_point }}</option>
												@endforeach
											</select>
			
			                                @if ($errors->has('car3'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('car3') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                            
			                            <span id="car3-bonus" class="stats-bonus">(+0)</span>
			                        </div>
			                        
			                        <!-- Will -->
									<div class="form-group{{ $errors->has('car4') ? ' has-error' : '' }}">
			                            <label for="car4" class="col-md-4 control-label">@lang('messages.car4')</label>
			
			                            <div class="col-md-5">
			                                <select id="car4" name="car4" class="form-control" required>
												@foreach($utils::all() as $code => $skill_point)
													<option value="{{ $code }}">{{ $skill_point }}</option>
												@endforeach
											</select>
			
			                                @if ($errors->has('car4'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('car4') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                            
			                            <span id="car4-bonus" class="stats-bonus">(+0)</span>
			                        </div>
			                        
			                        <!-- Perceptions -->
									<div class="form-group{{ $errors->has('car5') ? ' has-error' : '' }}">
			                            <label for="car5" class="col-md-4 control-label">@lang('messages.car5')</label>
			
			                            <div class="col-md-5">
			                                <select id="car5" name="car5" class="form-control" required>
												@foreach($utils::all() as $code => $skill_point)
													<option value="{{ $code }}">{{ $skill_point }}</option>
												@endforeach
											</select>
			
			                                @if ($errors->has('car5'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('car5') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                            
			                            <span id="car5-bonus" class="stats-bonus">(+0)</span>
			                        </div>
									
								</div>
							</div>
							
							<div class="row">
								<div class="column-md-6 col-md-offset-3">
		                            <label for="sp-available" class="col-md-4 control-label">@lang('messages.sk_available'):</label>
		
		                            <div class="col-md-2">
		                                <input type="text" name="sp-available" id="sp-available" class="form-control" value="40" disabled>
		                            </div>
		                        </div>
	                        </div>
						
						<!-- Character Details end ------------------------------------------------------------------------------------------------->
						
						<!-- Termini e Condizioni -->
                        <div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
                        	<label class="checkbox-inline">
                        		<input type="checkbox" name="terms" value="terms">
                        		Accetto i termini e le condizioni di utilizzo. Per maggiori informazioni 
                        		<a href="#" data-toggle="modal" data-target="#terms-modal">clicca qui.</a>
                        	</label>
       

                                @if ($errors->has('terms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('terms') }}</strong>
                                    </span>
                                @endif

                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="scifi-button-2">
                                    Conferma
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            
            <!-- Modal -->
  <div class="modal fade" id="terms-modal" role="dialog" style="padding:10px">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Termini e Condizioni</h4>
        </div>
        <div class="modal-body">
          <!-- condizioni d'uso -->
				<div class="my-justify">Registrazione (ai sensi del D. Lgs
					n&deg;196/2003 - Codice in materia di protezione dei dati
					personali): L&#039;utente, registrandosi, presta il consenso al
					trattamento dei suoi dati ed autorizza l&#039;inserimento degli
					stessi nella banca dati del gioco con il fine di inserirli
					nell&#039;elenco dei suoi utenti. Gli stessi dati NON saranno ceduti
					e utilizzati da alcun soggetto estraneo a chi, attualmente o in
					futuro, gestisce il presente gioco. I dati saranno trattati con
					strumenti elettronici e informatici serviranno esclusivamente per
					partecipare al gioco e per ricevere eventuali ed indispensabili
					comunicazioni tecniche via e-mail (come l&rsquo;invio della psw
					all&rsquo;indirizzo di posta elettronica dichiarata in sede di
					registrazione). Autorizzando al trattamento dei dati, l&rsquo;utente
					autorizza non solo la registrazione dell&rsquo;indirizzo
					e&ndash;mail ma permette la registrazione dell&rsquo;indirizzo IP,
					l&rsquo;ora dell&rsquo;iscrizione e l&rsquo;ora di ogni login.
					L&#039;indicazione di dati personali completi &egrave; assolutamente
					volontaria e facoltativa. L&#039;interessato potr&agrave;&nbsp; in
					ogni momento e gratuitamente esercitare i diritti di cui
					all&#039;art. 7 del D.Lgs n&deg;196/2003, quali: la
					possibilit&agrave;&nbsp; di accedere ai registri del Garante,
					ottenere informazioni in relazione ai dati che lo riguardano,
					ottenere la cancellazione o il blocco, ovvero l&#039;aggiornamento,
					la rettifica o l&#039;integrazione inviando una e-mail
					all&#039;indirizzo indicato nella home page.
				</div>

				<div class="my-justify">L&#039;utente dichiara inoltre di
					aver preso visione del regolamento, come proposto in homepage, di
					averlo compreso ed accettato in ogni sua parte, e di rispondere a
					tutti i requisiti richiesti, comprese le eventuali restrizioni di
					et&agrave;.
				</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="scifi-button-2" data-dismiss="modal">Chiudi</button>
        </div>
      </div>
      
    </div>
  </div>
            
            
        </div>
    </div>
    
</div>
@endsection

@section('custom-js')

<script src="{{ elixir('assets/js/register-js.js') }}" type="text/javascript"></script>

@endsection
