@extends('layouts.game')

@section('content')
            <h1 class="page-header">Gestione Quests</h1>
            
            @if ($message = Session::get('success'))
		        <div class="alert alert-success">
		            <p>{{ $message }}</p>
		        </div>
		    @endif
            
            <a class="btn icon-btn scifi-button-3" href="{{ URL::to('quests/create') }}">
			<span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
				Nuova Quest
			</a>
			
			
			<div class="my-div-table">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Titolo</th>
				        <th>Testo</th>
				        <th>Azioni</th>
				      </tr>
				    </thead>
				    <tbody>
				    
					    @foreach($quests as $quests_entry)
							<tr>
								<td>{{ $quests_entry->title }}</td>
								<td>{{ $quests_entry->text }}</td>
								<td>
									<a href="{{ URL::to('quests/' . $quests_entry->id . '/edit') }}" title="Modifica"><span class="glyphicon glyphicon-pencil"></span></a>
									
									<form method="POST" action="{{ URL::to('quests/' . $quests_entry->id) }}" accept-charset="UTF-8" style="display: inline;">
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
			
			{{ $quests->links() }}	
			
           
@endsection