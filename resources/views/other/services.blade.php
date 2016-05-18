@extends('layouts.app')

@section('content')
<div class="createeventbody">    
<div class="createeventh"><h3>Nos services</h3></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 contentother services">
			<p>Witicket est un site qui vous permet: <br>
				- D’organiser des conférences qui touchent le domaine du digital. <br>
				- Vous pouvez être l’organisateur ou celui qui participe aux conférences. <br>
				- De participer aux conférences auxquelles vous avez toujours souhaité. <br>
			</p>
			<div class="clear-fix"></div>
			<p>Besoins d’aide ? <br>
			Vous avez une question relative à votre achat qui vous brûle les lèvres ? <br>
			Gagnez du temps en trouvant une réponse en quelques clics <a class="black" href="{{ url('/faq') }}">ici</a>.</p>
			<div class="clear-fix"></div>
			<p>Sélectionner un sujet : <br>
			<a class="black" href="">- Retour et service après-vente</a> <br>
			<a class="black" href="{{ route('orga.show', Auth::user()->id) }}">- Mon compte Witicket</a> <br>
			<a class="black" href="">- Newsletter</a> <br>
			<a class="black" href="">- Retrouver Witicket sur Facebook</a> <br>
			<a class="black" href="">- Ou Twitter</a> <br>
			<a class="black" href="{{ url('/contact') }}">- Contactez-nous</a> <br>
			</p>
        </div>
    </div>
</div>
</div>

</div>
@endsection