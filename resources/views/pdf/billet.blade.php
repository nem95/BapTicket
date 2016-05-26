

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ticket</title>
    <link rel="stylesheet" type="text/css" href="{{asset("css/ticket.css")}}"/>
</head>
<body>
<main>
    @for($i = 0; $i < $resas; $i++)

    <div id="details" class="clearfix">
        <div id="invoice">
            <div class="ticket">
                <div class="bleu">
                    <h1> {{$event->title}} </h1>
                    <p class="host">Par {{$event->host}}</p>
                    <div class="loca">
                        <div class="img-loca"><img src="{{asset("img/loc2.png")}}" alt=""></div>
                        <div class="infos">
                            <p > {{$event->localisation}} <br>
                                {{$event->adresse}} {{$event->adresse2 }} <br>
                                {{$event->postal}} {{$event->city}} </p> <h5 class="num">N° 000 001</h5>
                        </div>
                    </div>


                </div>

                <div class="blanc">
                    <p>$user->surname <br>
                        ->name</p>
                    <p class="titre">$event->title</p>
                    <p class="hostblanc">Par $event->host</p>
                    <p>$event->localisation <br>
                        $event->adresse <br>
                        $event->adresse2 <br>
                        $event->postal <br>
                        $event->city</p>
                </div>


            </div>
        </div>
    </div>
    @endfor
</body>
</html>
{{--
@for($i = 0; $i < $resas; $i++)
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Ticket</title>
        <link rel="stylesheet" type="text/css" href="{{asset("css/ticket.css")}}"/>
    </head>
    <body>

        <div id="details" class="clearfix">
            <div id="invoice">
                <div class="ticket">
                    <div class="bleu">
                        <h1> {{$event->title}} </h1>
                        <p class="host">Par {{$event->host}}</p>
                        <p class="loca"><img src="{{asset("img/loc2.png")}}" alt=""> {{$event->localisation}} <br>
                            {{$event->adresse}} {{$event->adresse2 }}<br>
                            {{$event->postal}} {{$event->city}}</p>
                        <h5 class="num">N° 000 001</h5>
                    </div>

                    <div class="blanc">
                        <p>{{$user->surname}} {{$user->name}}</p>
                        <p class="titre">{{$event->title}}</p>
                        <p class="hostblanc">Par {{$event->host}}</p>
                        <p>{{$event->localisation}} <br>
                            {{$event->adresse}} {{$event->adresse2}} <br>
                            {{$event->postal}} {{$event->city}}</p>
                    </div>


                </div>
            </div>
        </div>
    </body>
    </html>
@endfor--}}