<!DOCTYPE html>
<html>
<head>
	<title>chat app</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	 <style type="text/css" media="screen">
	 	.list-group{
	 		overflow-y: scroll;
	 		height: 200px;
	 	}
	 </style>
</head>
<body>
	<div class="container">
		<div class="row" id="app">
			<div class="col-md-4  offset-md-4">
				  <li class="list-group-item active">Chat Room</li>
				  <div class="badge badge-pill badge-primary">
				  	@{{ typing }}
				  </div>

				<ul class="list-group" v-chat-scroll>
				   <message
				   v-for="value,index in chat.message" 
				   :key=value.index
				   :color=chat.color[index]
				   :user= chat.user[index]	 
				   :time= chat.time[index]	 
				   >
				   	@{{ value }}
				   </message>
				</ul>
				  <input type="text" class="form-control"  placeholder="Type your message here..." v-model='message' @keyup.enter='send'>

			</div>
			
		</div>
	</div>
</body>
<script src="{{ asset('js/app.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</html>