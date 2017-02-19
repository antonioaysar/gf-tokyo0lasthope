		
			 @foreach($chat_messages as $message)
				<p>
					<span>{{ $message->created_at->hour . ':' . $message->created_at->minute}}</span> 
					<img alt="min" src="../../../assets/images/t0lh/testaminim.png">
					<span><strong>{{ $message->personaggio['nome'] . ': ' }}</strong></span> 
					@if($message->type == 'P')
						<span class="chat-tags">{{ '[' . $message->recipient . '] ' }}</span>
					@endif
					<?php echo $message->message; ?> 
					</p>
			@endforeach
            
           
