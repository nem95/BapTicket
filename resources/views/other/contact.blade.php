@extends('layouts.app')

@section('content')
<div class="createeventbody">    
<div class="createeventh"><h3>Contact</h3></div>
<div class="container-fluid">
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<div class="numbevent">
                <h4 class="gray"><span class="number">1</span> Informations personnelles</h4>
                <hr class="hrevent">
            </div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
    		{!! Form::open(array(
                    'route' => 'contact.store',
                    'method' => 'POST'
                ))
            !!}
            <div class="form-group">
                {!! Form::label('nom', 'Nom:') !!}
                {!! Form::text('nom', '', 
                    ['class' => 'form-control']) 
                !!}
            </div>
            <div class="form-group">
                {!! Form::label('prenom', 'Prénom:') !!}
                {!! Form::text('prenom', '', 
                    ['class' => 'form-control']) 
                !!}
            </div>
            <div class="form-group">
                {!! Form::label('mail', 'Adresse mail:') !!}
                {!! Form::text('mail', '', 
                    ['class' => 'form-control']) 
                !!}
            </div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<div class="numbevent">
                <h4 class="gray"><span class="number">2</span> Votre message</h4>
                <hr class="hrevent">
            </div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-6 col-md-offset-3">
    		<div class="form-group">
                {!! Form::label('objet', 'Objet:') !!}
                {!! Form::text('objet', '', 
                ['class' => 'form-control']) 
                !!}
            </div>
    		<div class="form-group">
                {!! Form::label('message', 'Message:') !!}
                {!! Form::textarea('message', '', 
                ['class' => 'form-control']) 
                !!}
            </div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-12 btncontact">
    		{!! Form::submit('Envoyer le message',
                ['class' => 'btn btnlogin'])
            !!}
            {!! Form::close() !!}
    	</div>
    </div>

                        
                            
                        
                        
    
</div>

</div>
@endsection