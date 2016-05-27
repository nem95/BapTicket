@extends('layouts.app')

@section('content')
<div class="createeventbody">
    

<div class="createeventh"><h3>Modifier une conférence</h3></div>
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-12">
            <div class="createevent">
                <div class="numbevent">
                    <h4 class="gray"><span class="number">1</span> Description de l'événement</h4>
                    <hr class="hrevent">
                </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{route('evenement.update', $event->id)}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                        <input type="hidden" name="_method" value="PUT"/>
                        <div class="form-group">
                            <label class="col-md-12">Nom de la conférence:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" placeholder="{{$event->title}}" value="{{$event->title }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Description:</label>
                            <div class="col-md-6">
                                    <textarea class="form-control" name="content" rows="8" cols="40" placeholder="Saisir votre description ici" maxlength="500">{{$event->content}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Début:</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control" name="debut" placeholder="{{$event->debut}}" value="{{$event->debut}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Fin:</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control" name="fin" placeholder="{{$event->fin}}" value="{{$event->fin}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Nom du lieu:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="localisation" placeholder="{{$event->localisation}}" value="{{$event->localisation}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Adresse:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse" placeholder="{{$event->adresse}}" value="{{$event->adresse}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Adresse 2:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse2" placeholder="{{$event->adresse2}}" value="{{$event->adresse2}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Ville:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" placeholder="{{$event->city}}" value="{{$event->city}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Code postal:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal" placeholder="{{$event->postal}}" value="{{$event->postal}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Sujet de la conférence:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subject" placeholder="{{$event->subject}}" value="{{$event->subject}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Conférencier(s):</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="host" placeholder="{{$event->host}}" value="{{$event->host}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Places:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="places" placeholder="{{$event->places}}" value="{{$event->places}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Date:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="date" placeholder="{{$event->date}}" value="{{$event->date}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-3">
                                <button type="submit" class="btn center-block btnlogin">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-3">
                        <form class="" role="form" method="POST" action="{{route('evenement.destroy',['id' => $event->id])}}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger center-block ">
                                Supprimer
                            </button>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection