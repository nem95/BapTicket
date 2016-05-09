@extends('layouts.app')

@section('content')
<div class="container-fluid bgshowevent">
    <div class="row">
    @include('errors.message')
    <img class="imgshowevent" src="{{asset("img/conf-1.jpg")}}" alt="conf">
    <div><h2 class="showeventh">{{ $event->title }}</h2></div>
        <div class="col-md-10 col-md-offset-1">
            <div class="showeventtitle">
                <h3 class="showeventh2">Description de l'événement</h3>
                <h4 class="showeventh3">Date de l'événement - {{ $event->date }} à {{ $event->start }}</h4>
            </div>
            <div class="clearfix"></div>
            <div class="showeventcontent">
                <p>{{ $event->content }}</p>
                <p class="showtags">Tags:</p>
            </div>

            <div class="showbtn">
                <a href=""><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>                    
                <a href=""><i class="fa fa-2x fa-google-plus" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-2x fa-share" aria-hidden="true"></i></a>
            </div>

            <table class="tableshow">
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
                    <td>00:00 à 00:00</td>
                    <td>GRATUIT</td>
                    <td>{{ $event->placesLeft }}/{{ $event->places }}</td>
                    <td>{!! Form::selectRange('number', 1, 3)!!}</td>
                    <td><button class="btnshow">Réserver</button></td>
                </tr>
            </table>
        </div>
        <address>
            119 rue du vieux pont, Nanterre
        </address>
        <div class="col-md-10 col-md-offset-1">
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
                    <p>Prénom: UserSurname
                    <br>
                    Nom: UserName
                    <br>
                    Profession: UserSector</p>

                    <div class="clear-fix"></div>

                    <p>Description: <br> UserContent</p>
                    <a href="" class="eventshowa">En savoir plus...</a>
                </div>
                
            </div>
            <div class="col-md-3">
                <img src="{{asset("img/hollande.jpg")}}" alt="profil" class="imgshoworga">
                <p>Note:</p>
                <div class="btnshoworga">
                    <button class="btnshow"><a href="{{route('orga.show', $event->user_id)}}">Voir le profil</a></button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection