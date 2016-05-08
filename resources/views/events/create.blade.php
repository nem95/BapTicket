@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default createevent">
                <div class="panel-heading">Créer un évènement</div>
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'event.store',
                            'method' => 'POST'
                            ))
                        !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('subject', 'Sujet') !!}
                                {!! Form::text('subject', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('host', 'Conférencier') !!}
                                {!! Form::text('host', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('sector', 'Secteur') !!}
                                {!! Form::text('sector', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('content', 'Description') !!}
                                {!! Form::textarea('content', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('localisation', 'Localisation') !!}
                                {!! Form::text('localisation', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('places', 'Places disponibles') !!}
                                {!! Form::text('places', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('date', 'Date') !!}
                                {!! Form::date('date', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('duration', 'Durée') !!}
                                {!! Form::text('duration', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('materiel', 'Matériel requis') !!}
                                {!! Form::textarea('materiel', '', 
                                    ['class' => 'form-control']) 
                                !!}
                            </div>
                        
                    </div>
                    <div class="panel-footer">
                        {!! Form::submit('Créer',
                            ['class' => 'btn btnlogin'])
                        !!}

                        {!! Form::close() !!}
                        <a class="btn btn-default" href="{{ route('event.index') }}">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection