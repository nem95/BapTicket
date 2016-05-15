@extends('layouts.app')

@section('content')
<div class="container-fluid bgshowevent">
    <div class="row">
    @include('errors.message')
    <img class="imgshowevent" src="{{asset("img/conf-1.jpg")}}" alt="conf">
    <div><h2 class="showeventh displaynone">{{ $event->title }}</h2></div>
        <div class="col-md-10 col-md-offset-1">
            <div class="showeventtitle displaynone">
                <h3 class="showeventh2">Description de l'événement</h3>
                <h4 class="showeventh3">Date de l'événement - {{ $event->date }} à {{ $event->debut }}</h4>
            </div>
            <div class="eventtitlemobile displaynoneweb">
                <h3 class="bold">{{ $event->title }}</h3>
                <div class="dateevent">
                    <i class="fa fa-calendar" aria-hidden="true"></i> {{ $event->date }} - {{ $event->debut }} à {{ $event->fin }}
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="showeventcontent">
                <p>{{ $event->content }}</p>
                <p class="showtags">Tags:</p>
            </div>

            <div class="showbtn centermobile">
                <a href=""><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>                    
                <a href=""><i class="fa fa-2x fa-google-plus" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-2x fa-share" aria-hidden="true"></i></a>
            </div>

            <div class="placesevent">
                <div class="priceevent2">
                    <i class="fa fa-user" aria-hidden="true"></i>  {{ $event->placesLeft }}/{{ $event->places }}
                    <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }}
                    <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                </div>
            </div>

            <table class="tableshow displaynone">
                <tr>
                    <td>Nom</td>
                    <td>Date</td>
                    <td>Heure</td>
                    <td>Prix</td>
                    <td>Disponibilité</td>
                    <td>Quantité</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Type de billet</td>
                    <td>{{$event->date}}</td>
                    <td>{{$event->debut}} à {{$event->fin}}</td>
                    <td>GRATUIT</td>
                    <td>{{ $event->placesLeft }}/{{ $event->places }}</td>
                    <td>{!! Form::selectRange('number', 1, 3) !!}</td>
                    <td><button class="btnshow"><a href="">Réserver</a></button></td>
                </tr>
            </table>
            <br>
            <div class="btnmobile row">
                <button class="btnevent"><a href="">Participer</a></button>
            </div>
            
        </div>
        <div class="embed-container maps">
            <address>
                {{ $event->adresse }} {{ $event->adresse2 }}, {{ $event->postal }} {{ $event->city }}
            </address>
        </div>
        
        <div class="col-md-10 col-md-offset-1 displaynone">
            <div class="col-md-9">
                <div class="showeventtitle">
                    <h3 class="showeventh2">Profil de l'organisateur</h3>
                    <div class="showbtn2">
                        <a href=""><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>                    
                        <a href=""><i class="fa fa-2x fa-google-plus" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-2x fa-share" aria-hidden="true"></i></a>
                    </div>
                </div>
                <br>
                <div class="showorgacontent">
                    <p>Prénom: {{ $user->surname }}
                    <br>
                    Nom: {{ $user->name }}
                    <br>
                    Profession: {{ $user->sector }}</p>

                    <div class="clear-fix"></div>

                    <p>Description: <br> {{ $user->known }}</p>
                    <a href="" class="eventshowa">En savoir plus...</a>
                </div>
                
            </div>
            <div class="col-md-3">
                <img src="{{asset($user->photo)}}" alt="profil" class="imgshoworga">
                <p>Note:</p>
                <div class="btnshoworga">
                    <button class="btnshow"><a class="showa" href="{{route('orga.show', $event->user_id)}}">Voir le profil</a></button>
                </div>
                
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1 showeventmobileprofil">
            <div class="col-sd-12">
                <img src="{{asset($user->photo)}}" alt="profil" class="imgshoworga">
                <p>Note:</p>
                <div class="btnshoworga row">
                    <div class="showbtn2 centermobile">
                        <a href=""><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>                    
                        <a href=""><i class="fa fa-2x fa-google-plus" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-2x fa-share" aria-hidden="true"></i></a>
                    </div>

                    <button class="btnevent"><a class="showa" href="{{route('orga.show', $event->user_id)}}">Voir le profil</a></button>
                </div>
                
            </div>
            <div class="col-md-9">
                <div class="showeventtitle">
                    
                    
                </div>
                <br>
                <div class="showorgacontent">
                    <p>Prénom: {{ $user->surname }}
                    <br>
                    Nom: {{ $user->name }}
                    <br>
                    Profession: {{ $user->sector }}</p>

                    <div class="clear-fix"></div>

                    <p>Description: <br> {{ $user->known }}</p>
                    <a href="" class="eventshowa">En savoir plus...</a>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection