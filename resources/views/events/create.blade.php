@extends('layouts.app')

@section('content')
<div class="createeventbody">
    

<div class="createeventh"><h3>Créer une conférence</h3></div>
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-12">
            <div class="createevent">
                <div class="numbevent">
                    <h4><span class="number">1</span> Description de l'événement</h4>
                    <hr class="hrevent">
                </div>
                    {!! Form::open(array('route' => 'event.store', 'method' => 'POST'))!!}

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('title', 'Nom de la conférence* :') !!}
                                {!! Form::text('title', '',
                                    ['class' => 'form-control', 'placeholder' => 'Donnez un nom à votre conférence'])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('content', 'Description* :') !!}
                                {!! Form::textarea('content', '',
                                    ['class' => 'form-control'])
                                !!}
                            </div>
                            <div class="form-group">
                            {!! Form::label('', 'Tags :') !!}
                                <div class="tags">
                                <p><span>Le TAG<button><img class="delete-icon" src="{{ asset("img/icons/icon-delete.png") }}" alt="Icône de suppression du tag..."></button></span>
                                    {{--@foreach()
                                        <span>Le TAG<button><img class="delete-icon" src="{{ asset("img/icons/icon-delete.png") }}" alt="Icone de suppersion du tag..."></button></span>
                                    @endforeach--}}
                                </p>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                {!! Form::label('debut', 'Début* :') !!}
                                {!! Form::time('debut', '',
                                    ['class' => 'form-control'])
                                !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                {!! Form::label('fin', 'Fin* :') !!}
                                {!! Form::time('fin', '',
                                    ['class' => 'form-control'])
                                !!}
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('localisation', 'Lieu de la conférence* :') !!}
                                {!! Form::text('localisation', '',
                                    ['class' => 'form-control', 'placeholder' => 'Nom du lieu'])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('adresse', '',
                                    ['class' => 'form-control', 'placeholder' => 'Adresse'])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('adresse2', '',
                                    ['class' => 'form-control', 'placeholder' => 'Adresse 2'])
                                !!}
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7">
                                    {!! Form::text('city', '',
                                    ['class' => 'form-control', 'placeholder' => 'Ville'])
                                    !!}
                                </div>
                                <div class="col-md-5">
                                    {!! Form::text('postal', '',
                                    ['class' => 'form-control', 'placeholder' => 'Code Postal'])
                                    !!}
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('subject', 'Sujet de la conférence :') !!}
                                {!! Form::text('subject', '',
                                    ['class' => 'form-control'])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('host', 'Conférencier(s) :') !!}
                                {!! Form::text('host', '',
                                    ['class' => 'form-control'])
                                !!}
                                </div>

                            <div class="form-group">
                                {!! Form::label('places', 'Places disponibles* :') !!}
                                {!! Form::text('places', '',
                                    ['class' => 'form-control'])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('date', 'Date de l\'évènement* :') !!}
                                {!! Form::date('date', '',
                                    ['class' => 'form-control'])
                                !!}
                            </div>
                            

                            <div class="embed-container createeventmap">

                            <input name="example" type="text" value="$_POST['adresse']" />

                                <address>
                                    
                                </address>
                                    
                                    
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('img', 'Image de conférence :') !!}
                                {!! Form::file('img')!!}
                            </div>
                        </div>

                        <div class="numbevent2">
                            <h4><span class="number">2</span> Création des billets</h4>
                            <hr class="hrevent">
                        </div>

                        <div class="bordertableevent panel panel-default">
                                                    
                            <table class="createeventtable">
                                <tr class="trhead">
                                    <td>Nom du billet</td>
                                    <td>Quantité disponible</td>
                                    <td>Prix</td>                                        
                                    <td>Options</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <p>GRATUIT</p>
                                    </td>
                                    <td>
                                        <i class="fa fa-2x fa-cog" aria-hidden="true"></i>
                                        <i class="fa fa-2x fa-trash" aria-hidden="true"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <i class="fa fa-2x fa-cog" aria-hidden="true"></i>
                                        <i class="fa fa-2x fa-trash" aria-hidden="true"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text">
                                    </td>
                                    <td>
                                        <p>INVITÉ / VIP</p>
                                    </td>
                                    <td>
                                        <i class="fa fa-2x fa-cog" aria-hidden="true"></i>
                                        <i class="fa fa-2x fa-trash" aria-hidden="true"></i>
                                    </td>
                                </tr>
                            </table>
                            <div class="parametresbillet">
                                <p>Paramètres</p>
                                <hr class="billethr">
                                <div class="form-group">
                                {!! Form::label('', 'Description du billet :') !!}
                                {!! Form::textarea('', '',
                                    ['class' => 'form-control', 'size' => '20x4'])
                                !!}
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        {!! Form::label('', 'Début de vente des billets :') !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::date('', '',
                                            ['class' => 'form-control'])
                                        !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::time('', '',
                                        ['class' => 'form-control'])
                                        !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        {!! Form::label('', 'Fin de vente des billets :') !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::date('', '',
                                            ['class' => 'form-control'])
                                        !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::time('', '',
                                        ['class' => 'form-control'])
                                        !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::checkbox('', ''); !!} Masquer la visibilité de ce billet
                                    </div>
                                </div>
                                
                            </div> 
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-12 ajoutbillet">
                                        <button class="btnbillet"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i> Billet Payant</a></button>
                                        <button class="btnbillet"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i> Billet Gratuit</a></button>
                                        <button class="btnbillet"><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i> Don</a></button>
                                    </div>
                                </div>
                            </div>  

                        </div>
                                                        
                    


                            {!! Form::submit('Créer la conférence',
                                ['class' => 'btn btnlogin'])
                            !!}


                            <a class="btn btnlogin" href="{{ route('event.index') }}">Retour à l'accueil</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
@endsection