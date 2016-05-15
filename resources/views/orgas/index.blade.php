@extends('layouts.app')

@section('content')

    <div class="container-fluid profil-orga">

        <div class="row profil">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-8">
                    <div class="profilOrga">
                        <div class="title">
                            <h1 class="profil-title">Profil</h1>
                        </div>
                        <div class="social">
                            @if(Auth::check() &&  Auth::user()->socialfb != '')
                                <a href="{{ Auth::user()->socialfb }}" target="_blank">
                                    <img class="icones" src="{{ asset("img/icons/icon-fb.png") }}" alt="Icone Facebook">
                                </a>
                            @endif
                            @if(Auth::check() &&  Auth::user()->socialtt != '')
                                <a href="{{ Auth::user()->socialtt }}" target="_blank">
                                    <img class="icones" src="{{ asset("img/icons/icon-tt.png") }}" alt="Icone Twitter">
                                </a>
                            @endif
                            @if(Auth::check() &&  Auth::user()->socialig != '')
                                <a href="{{ Auth::user()->socialig }}" target="_blank">
                                    <img class="icones" src="{{ asset("img/icons/icon-ig.png") }}" alt="Icone Instagram">
                                </a>
                            @endif
                            @if(Auth::check() &&  Auth::user()->socialgg != '')
                                <a href="{{ Auth::user()->socialgg }}" target="_blank">
                                    <img class="icones" src="{{ asset("img/icons/icon-gg.png") }}" alt="Icone Google+">
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="infos">
                        <p>Prénom : {{ Auth::user()->surname }}</p>
                        <p>Nom : {{ Auth::user()->name }}</p>
                        <p class="Marge-bot">Profession : {{ Auth::user()->sectors }}</p>
                        <p>Description :</p>
                        <p class="Marge-bot">{{ Auth::user()->known }}</p>
                    </div>
                    @if(Auth::check() &&  Auth::user()->is_orga == 1 || Auth::check() &&  Auth::user()->is_admin ==1)
                        <div class="tags">
                            <p>Tags :
                                @foreach($tags as $tag)
                                    <span>
                                        {{$tag->name}}<button><img class="delete-icon" src="{{ asset("img/icons/icon-delete.png") }}" alt="Icone de suppersion du tag..."></button>
                                    </span>
                                @endforeach

                                <span>
                                    <form class="" role="form" method="POST" action="#">
                                        {!! csrf_field() !!}

                                        <input type="hidden" name="_method" value="PUT"/>
                                        <input type="text" class="" name="tag" placeholder="Ajouter un théme a vos favoris" value="">

                                    </form>
                                </span>
                            </p>
                        </div>
                    @else
                        <div class="tag">
                            {{--@foreach()

                            @endforeach--}}
                        </div>
                    @endif

                </div>
                <div class="col-md-4">
                    <div class="profil-pic">
                        @if(Auth::user()->photo !='')
                            <img src="{{ asset(Auth::user()->photo) }}" alt="" class="img-responsive">
                        @else
                            <img src="{{ asset("img/defaults-img/default-profil.png") }}" alt="" class="img-responsive">
                        @endif

                        @if(Auth::check() &&  Auth::user()->is_orga == 1 || Auth::check() &&  Auth::user()->is_admin ==1)
                            <a href="{{route('orga.edit', Auth::user()->id)}}" class="modif-prfl">Modifier le profil</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row h1event">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
                <div class="col-md-6">
                    <h1 class="eventstitle">LES TOP CONFÉRENCES</h1>
                </div>
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            @include('errors.message')

            @foreach($list as $event)
                <div class="col-md-3">
                    <div class="borderevent">
                        <div class="topevent">
                        <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                        </div>
                        <div class="bodyevent">
                            <h4><a href="{{ route('event.show', $event->id) }}">{{ $event->title }}</a>
                            <div class="clear-fix"></div></h4>
                            <div class="clearfix"></div>
                            {{ $event->content }}
                            <div class="clear-fix"></div>
                            <a href="{{ route('event.show', $event->id) }}" class="eventa">En savoir plus...</a>

                            <div class="clearfix"></div>

                            <div class="placesevent"><i class="fa fa-user" aria-hidden="true"></i> Places: {{ $event->placesTaken }}/{{ $event->places }}</div>
                            <button class="btnevent">Participer</button>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{---{!! $list->links() !!}--}}
            </div>
        </div>
    </div>
@endsection
