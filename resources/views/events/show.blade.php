@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;" ><h3>{{ $event->title }}</h3>Créer le : {{ $event->created_at }}</div>

                <div class="panel-body">
                    {{ $event->content }}
                </div>

                <div class="panel-footer" style="text-align: center;">
                @if(Auth::check()
                && (Auth::user()->id == $event->user_id
                || Auth::user()->isAdmin))

                    {!! Form::model($event, array(
                        'route' => array('event.destroy', $event->id),
                        'method' => 'DELETE')) 
                    !!}

                    {!! Form::submit('Supprimer', ['class' => 'btn btn-default']) !!}

                    
                    
                
                    <a class="btn btn-default" href="{{ route('event.edit', $event->id) }}">Modifier l'article</a>
                
                @endif

                    <a class="btn btn-default" href="{{ route('event.index') }}">Retour aux articles</a>

                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection