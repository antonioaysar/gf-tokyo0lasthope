@extends('layouts.game')

@section('content')
            <h1 class="page-header">Gestione Chat</h1>
            
            @if ($message = Session::get('success'))
		        <div class="alert alert-success">
		            <p>{{ $message }}</p>
		        </div>
		    @endif
            
            <a class="btn icon-btn scifi-button-3" href="{{ URL::to('chats/create') }}">
			<span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
				Nuova Chat
			</a>
			
			
			<div class="my-div-table">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Nome</th>
				        <th>Distretto</th>
				        <th>Azioni</th>
				      </tr>
				    </thead>
				    <tbody>
				    
					    @foreach($chats as $chat)
							<tr>
								<td>{{ $chat->name }}</td>
								<td>{{ $chat->district->nome }}</td>
								<td>
									<a href="{{ URL::to('chats/' . $chat->id . '/edit') }}" title="Modifica"><span class="glyphicon glyphicon-pencil"></span></a>
									
									<form method="POST" action="{{ URL::to('chats/' . $chat->id) }}" accept-charset="UTF-8" style="display: inline;">
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
			
			{{ $chats->links() }}	
			
           
@endsection