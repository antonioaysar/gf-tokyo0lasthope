@inject('utils', 'App\Http\Utilities\Utilities')

@extends('layouts.game')

@section('content')
            <h1 class="page-header">Gestione Abilità</h1>
            
            @if ($message = Session::get('success'))
		        <div class="alert alert-success">
		            <p>{{ $message }}</p>
		        </div>
		    @endif
            
            <a class="btn icon-btn scifi-button-3" href="{{ URL::to('skills/create') }}">
			<span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
				Nuova Abilità
			</a>
			
			
			<div class="my-div-table">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Abilità</th>
				        <th>Descrizione</th>
				        <th>Caratteristica</th>
				        <th>Razza</th>
				        <th>Azioni</th>
				      </tr>
				    </thead>
				    <tbody>
				    
					    @foreach($skills as $skill_entry)
							<tr>
								<td>{{ $skill_entry->name }}</td>
								<td>{{ $skill_entry->description }}</td>
								<td>{{ $utils::stat_matching($skill_entry->stat) }}</td>
								<td>{{ $utils::race_matching($skill_entry->id_race) }}</td>
								<td>
									<a href="{{ URL::to('skills/' . $skill_entry->id . '/edit') }}" title="Modifica"><span class="glyphicon glyphicon-pencil"></span></a>
									
									<form method="POST" action="{{ URL::to('skills/' . $skill_entry->id) }}" accept-charset="UTF-8" style="display: inline;">
										{{ csrf_field() }}
									
										{{ method_field('DELETE') }}								
										<button type="submit" title="Elimina"><i class="glyphicon glyphicon-remove"></i></button>
									</form>						
								</td>
							</tr>
						@endforeach
					
					</tbody>
				</table>
			</div>
			
			{{ $skills->links() }}
			
				
			
           
@endsection