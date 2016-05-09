@extends('layouts.app')

@section('content')
<div class="createeventh"><h3>Créer une conférence</h3></div>
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-12">
            <div class="createevent">
                <div class="numbevent">
                    <h4><span class="number">1</span> Description de l'évènement</h4>
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
                                {!! Form::label('content', 'Description') !!}
                                {!! Form::textarea('content', '',
                                    ['class' => 'form-control'])
                                !!}
                            </div>
                            <div class="form-group">
                            {!! Form::label('', 'Tags :') !!}
                                <div class="tags">
                                <p><span>Le TAG<button><img class="delete-icon" src="{{ asset("img/icons/icon-delete.png") }}" alt="Icone de suppersion du tag..."></button></span>
                                    {{--@foreach()
                                        <span>Le TAG<button><img class="delete-icon" src="{{ asset("img/icons/icon-delete.png") }}" alt="Icone de suppersion du tag..."></button></span>
                                    @endforeach--}}
                                </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                {!! Form::label('debut', 'Début* :') !!}
                                {!! Form::time('duration', '',
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

                            <div class="form-group">
                                {!! Form::label('localisation', 'Lieu de la conférence :') !!}
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
                            <div class="form-group">
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

                                {{ Form::hidden('sector', 'secret') }}
                                </div>

                            <div class="form-group">
                                {!! Form::label('places', 'Places disponibles :') !!}
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

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722671287!2d2.2775170023698585!3d48.858837739220725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1462733419328" width="100%" height="380px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('img', 'Image de conférence :') !!}
                                {!! Form::file('image')!!}
                            </div>
                        </div>

                        <div class="numbevent2">
                            <h4><span class="number">2</span> Création des billets</h4>
                            <hr class="hrevent">
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
@endsection