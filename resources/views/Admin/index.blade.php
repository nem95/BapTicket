@extends('layouts.app')

@section('content')

<div class="spacemenu">
</div>
<div class="whitebg">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 nopadding">
                <h4 class="hcoladmin">Utilisateurs</h4>
                <!-- Début foreach list as user -->
                @foreach($user as $users)
                    <div class="dashboardusers col-md-12">
                        <div class="col-md-3   col-sm-2  col-xs-3">
                            @if($users->photo != '')
                                    <img class="img-responsive imgshoworga" src="{{asset($users->photo)}}">
                            @else
                                <img src="{{ asset("img/defaults-img/default-profil.png") }}" alt="" class="img-responsive imgshoworga">
                            @endif
                        </div>
                        <div class="col-md-3 col-sm-9 col-xs-9">
                            <p>{{$users->name}} <br>
                                {{$users->surname}} <br>
                                {{$users->sectors}} <br>
                        </p>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p>Déscription :  <br>
                                {{substr($users->known,  0, 70)}}</p>
                            <a href="{{route('admin.edit', $users->id)}}" class="btndashEdit">Editer</a>
                            <a href="{{route('organisateur.show', $users->id)}}" class="btndash">En savoir plus</a>

                        </div>
                    </div>
                @endforeach
                <!-- Fin foreach list as user -->
            </div>



            <div class="col-md-9 nopadding">
                <h4 class="hcoladmin Conf">Conférences</h4>

                <!-- Début foreach list as event -->
                @foreach($event as $events)
                    <div class="col-md-4 col-sm-4">
                        <div class="borderevent">
                            <div class="imgfullmobile">
                                <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                                <span class="priceevent">GRATUIT</span>
                            </div>
                            <div class="bodyevent">
                                <div class="h4index">
                                    <h4 class="black"><a href="{{ route('evenement.show', $events->id) }}">{{ str_limit($events->title, $limit = 70, $end = '...') }}</a></h4>
                                </div>


                                <div class="dateevent">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> {{ $events->date }} - {{ $events->debut }} à {{ $events->fin }}
                                </div>


                                <div class="contentevent">
                                    <p>{{ str_limit($events->content, $limit = 85, $end = '...') }}</p>
                                </div>

                                <a href="{{ route('evenement.show', $events->id) }}" class="eventa">En savoir plus...</a>

                                <div class="clearfix"></div>

                                <div class="placesevent">
                                    <i class="fa fa-user" aria-hidden="true"></i>  {{ $events->places - $events->reservations->count() }}/{{ $events->places }}
                                    <div class="priceevent2">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $events->localisation }}
                                        <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                                    </div>
                                </div>



                            </div>
                            <button class="btnevent"><a href="{{route('evenement.edit', $events->id)}}">Modifier </a></button>


                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @endforeach
                    @include('pagination.default', ['paginator' => $event])

                            <!-- Fin foreach list as event -->
            </div>

        </div>
    </div>
    
</div>
@endsection