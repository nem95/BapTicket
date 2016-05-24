<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ticket</title>
    <link rel="stylesheet" type="text/css" href="{{asset("css/ticket.css")}}"/>
</head>
<body>
<main>
    <div id="details" class="clearfix">
        <div id="invoice">
        	<div class="container-fluid">
        		<div class="row ticket">
        			<div class="col-md-12">
        				<img src="{{asset("img/ticket_bg.png")}}" alt="billet" class="img-responsive">
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-8">
        				<h2>{{$event->title}}</h2>
        				<div class="clear-fix"></div>
        				<h4>Par {{$event->host}}</h4>

        				<div class="col-md-6">
        					<h4><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }} <br>
        						{{ $event->adresse }} <br>
        						{{ $event->adresse2 }} <br>
        						{{ $event->postal }} {{ $event->city }}</h4>
        				</div>
        				<div class="col-md-6">
        					<h4>N° 000 123</h4>
        				</div>
        			</div>
        			<div class="col-md-4">
        				<h4>{{ $user->surname }} {{ $user->name }}</h4>
        				<div class="clear-fix"></div>
        				<h2>{{$event->title}}</h2>
        				<div class="clear-fix"></div>
        				<h4>Par {{$event->host}}</h4>
        				<div class="clear-fix"></div>
        				<h4><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }} <br>
        						{{ $event->adresse }} <br>
        						{{ $event->adresse2 }} <br>
        						{{ $event->postal }} {{ $event->city }}</h4>
        			</div>
        		</div>
        	</div>            
        </div>
    </div>
</body>
</html>