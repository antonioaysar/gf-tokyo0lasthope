@extends('layouts.game')

@section('content')
            <h1 class="page-header">Gestione Distretti</h1>
            
            @if ($message = Session::get('success'))
		        <div class="alert alert-success">
		            <p>{{ $message }}</p>
		        </div>
		    @endif
            
            <a class="btn icon-btn scifi-button-3" href="{{ URL::to('districts/create') }}">
			<span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
				Nuovo Distretto
			</a>
			
			
			<div class="my-div-table">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Nome</th>
				        <th>Descrizione</th>
				        <th>Posizione</th>
				        <th>Azioni</th>
				      </tr>
				    </thead>
				    <tbody>
				    
					    @foreach($districts as $district_entry)
							<tr>
								<td>{{ $district_entry->nome }}</td>
								<td>{{ $district_entry->descrizione }}</td>
								<td>{{ $district_entry->position }}</td>
								<td>
									<a href="{{ URL::to('districts/' . $district_entry->id . '/edit') }}" title="Modifica"><span class="glyphicon glyphicon-pencil"></span></a>
									
									<form method="POST" action="{{ URL::to('districts/' . $district_entry->id) }}" accept-charset="UTF-8" style="display: inline;">
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
			
			{{ $districts->links() }}	
			
           
@endsection