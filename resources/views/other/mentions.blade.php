@extends('layouts.app')

@section('content')
<div class="createeventbody">    
<div class="createeventh cadetblue"><h3>Mentions légales</h3></div>
<div class="container-fluid">

        <div class="contentother whitetext">
            <div class="row darkcadetblue">
                <div class="col-md-8 col-md-offset-2">
                    <p>Le site « www.witicket.com » est une publication de : <br>
            WiTicket SAS au capital de 352 512 €,<br>
            12 Avenue Léonard de Vinci, 92400 Courbevoie <br>
            RCS Créteil (414 948 695) <br>
            Numéro d'identification TVA : FR 89 414 948 695 <br>
            Réseaux Sociaux : Les sites ou pages WITICKET des réseaux sociaux (tels que FACEBOOK, TWITTER, GOOGLE+, INSTAGRAM, PINTEREST, SNAPCHAT …) sont également édités par WITICKET.</p>
                </div>
            </div>

            <div class="row darkslategray">
                <div class="col-md-8 col-md-offset-2">
                    <h4>Directeur de la publication et de la rédaction :</h4>
                    <p>Alexandre Viros <br>
            Pour tous les textes et œuvres présentés sur ces sites : Tous droits d'auteur des œuvres réservés. <br>
            Sauf autorisation formelle et écrite, la reproduction ainsi que toutes les utilisations des œuvres autres que la consultation individuelle et privée sont interdites. Toute demande d'autorisation pour quelque utilisation que ce soit doit être adressée à la rédaction : Witicket, 12 Avenue Léonard de Vinci, 92400 Courbevoie <br>
            Les informations diffusées n'engagent pas la responsabilité de Witicket. Nous nous efforçons de les tenir à jour et exactes. Néanmoins, nous ne pouvons les garantir. <br>
            Nous vérifions la qualité des sites que nous recommandons, néanmoins nous ne saurions être responsables, contrôler ou garantir l'actualité et l'exactitude des informations diffusées sur les sites des sociétés, organismes ou personnes privées vers lesquels nous avons établi des liens. <br>
            Le site www.witicket.com est hébergé par la société Colt. <br>
            Les marques citées appartiennent à leurs propriétaires respectifs.</p>
                    <div class="clear-fix">
                        <p>
                    Witicket - Siège social : 12 Avenue Léonard de Vinci, 92400 Courbevoie - 
Tél : +33 (0)1 41 16 70 00- RCS Créteil (414 948 695). <br>
Pour nous contacter, <a href="{{ url('/contact') }}">cliquez ici</a>.
                        </p>
                    </div>
                    
                </div>
                
            </div>
            
            
        </div>

</div>

</div>
@endsection