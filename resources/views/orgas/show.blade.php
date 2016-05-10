@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 pageprofil">
            <div class="col-md-9">
                <div class="showeventtitle">
                    <h3 class="showeventh2">Profil</h3>
                    <div class="showbtn2">
                        <a href=""><i class="fa fa-2x fa-share" aria-hidden="true"></i></a>
                        @if(Auth::check() &&  Auth::user()->socialfb != '')
                            <a href="{{ Auth::user()->socialfb }}" target="_blank">
                                <i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
                            </a>
                        @endif
                        @if(Auth::check() &&  Auth::user()->socialtt != '')
                            <a href="{{ Auth::user()->socialtt }}" target="_blank">
                                <i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
                            </a>
                        @endif
                        @if(Auth::check() &&  Auth::user()->socialig != '')
                            <a href="{{ Auth::user()->socialig }}" target="_blank">
                                <i class="fa fa-2x fa-instagram" aria-hidden="true"></i>
                            </a>
                        @endif
                        @if(Auth::check() &&  Auth::user()->socialgg != '')
                            <i class="fa fa-2x fa-google-plus" aria-hidden="true"></i>
                        @endif
                    </div>
                </div>
                <br>
                <div class="showorgacontent">
                    <p>Prénom: {{ Auth::user()->surname }}
                    <br>
                    Nom: {{ Auth::user()->name }}
                    <br>
                    Profession: {{ Auth::user()->sectors }}</p>

                    <div class="clear-fix"></div>

                    <p>Description: <br> {{ Auth::user()->known }}</p>

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
                
            </div>
            <div class="col-md-3">
                @if(Auth::user()->photo !='')
                    <img src="{{ asset(Auth::user()->photo) }}" alt="" class="img-responsive imgshoworga">
                @else
                    <img src="{{ asset("img/hollande.jpg") }}" alt="" class="img-responsive imgshoworga">
                @endif
                <p>Note:</p>
                <div class="btnshoworga">
                    @if(Auth::check() &&  Auth::user()->is_orga == 1 || Auth::check() &&  Auth::user()->is_admin ==1)
                        <button class="btnshow"><a href="{{route('orga.edit', Auth::user()->id)}}">Modifier le profil</a></button>
                    @endif
                </div>              
            </div>
        </div>
    </div>
</div>

<div class="showorgatitle"><h2 class="showeventh">Mes conférences organisées</h2></div>

    <div class="container-fluid">
    
        <div class="row">
            <div class="col-md-12">
            @include('errors.message')

            @foreach($list as $event)
                <div class="col-md-3">
                    <div class="borderevent">
                        <div class="topevent">

                        <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                        <span class="priceevent">GRATUIT</span>
                        </div>
                        <div class="bodyevent">
                            <h4><a href="{{ route('event.show', $event->id) }}">{{ $event->title }}</a></h4>
                            
                            <div class="dateevent">
                                <i class="fa fa-calendar" aria-hidden="true"></i> {{ $event->date }} - {{ $event->debut }} à {{ $event->fin }}
                            </div>
                            
            
                            <div class="contentevent">
                                <p>{{ str_limit($event->content, $limit = 85, $end = '...') }}</p>
                            </div>
                            
                            <a href="{{ route('event.show', $event->id) }}" class="eventa">En savoir plus...</a>

                            <div class="clearfix"></div>

                            <div class="placesevent">
                                <i class="fa fa-user" aria-hidden="true"></i>  {{ $event->placesLeft }}/{{ $event->places }}
                                <div class="priceevent2">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }}
                                    <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <button class="btnevent"><a href="{{ route('event.show', $event->id) }}">Participer</a></button>

                        <div class="clearfix"></div>
                    </div>
                </div>
            @endforeach

            {{---{!! $list->links() !!}--}}
            </div>
        </div>

    </div>

@endsection