@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row h1event searchcontainer">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
                <div class="col-md-6">
                    <h1 class="eventstitle titleindex">RESULTAT DE LA RECHERCHE</h1>
                </div>
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @include('errors.message')

                @if($search != '')
                    @foreach($search as $event)
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="borderevent">
                                <div class="imgfullmobile">
                                    <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                                    <span class="priceevent">GRATUIT</span>
                                </div>
                                <div class="bodyevent">
                                    <div class="h4index">
                                        <h4 class="black"><a href="{{ route('evenement.show', $event->id) }}">{{ str_limit($event->title, $limit = 65, $end = '...') }}</a></h4>
                                    </div>


                                    <div class="dateevent">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{ $event->date }} - {{ $event->debut }} à {{ $event->fin }}
                                    </div>


                                    <div class="contentevent">
                                        <p>{{ str_limit($event->content, $limit = 85, $end = '...') }}</p>
                                    </div>

                                    <a href="{{ route('evenement.show', $event->id) }}" class="eventa">En savoir plus...</a>

                                    <div class="clearfix"></div>

                                    <div class="placesevent">
                                        <i class="fa fa-user" aria-hidden="true"></i>  {{ $event->places - $event->reservations->count() }}/{{ $event->places }}
                                        <div class="priceevent2">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }}
                                            <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                                        </div>
                                    </div>



                                </div>
                                <button class="btnevent"><a href="{{ route('evenement.show', $event->id) }}">Participer</a></button>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        @include('pagination.default', ['paginator' => $list])

                    @endforeach

                    @forelse ($search as $event)
                        <p></p>
                    @empty
                        <p class="error">Aucunes conférences ne correspond à votre recherche</p>

                            <div class="slider-search">
                                @foreach($list as $event)

                                    <div class="col-md-3">
                                        <div class="borderevent">
                                            <div class="imgfullmobile">
                                                <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                                                <span class="priceevent">GRATUIT</span>
                                            </div>
                                            <div class="bodyevent">
                                                <div class="h4index">
                                                    <h4 class="black"><a href="{{ route('evenement.show', $event->id) }}">{{ str_limit($event->title, $limit = 65, $end = '...') }}</a></h4>
                                                </div>


                                                <div class="dateevent">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i> {{ $event->date }} - {{ $event->debut }} à {{ $event->fin }}
                                                </div>


                                                <div class="contentevent">
                                                    <p>{{ str_limit($event->content, $limit = 85, $end = '...') }}</p>
                                                </div>

                                                <a href="{{ route('evenement.show', $event->id) }}" class="eventa">En savoir plus...</a>

                                                <div class="clearfix"></div>

                                                <div class="placesevent">
                                                    <i class="fa fa-user" aria-hidden="true"></i>  {{ $event->places - $event->reservations->count() }}/{{ $event->places }}
                                                    <div class="priceevent2">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }}
                                                        <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                                                    </div>
                                                </div>



                                            </div>
                                            <button class="btnevent"><a href="{{ route('evenement.show', $event->id) }}">Participer</a></button>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    @endforelse

                @else
                    <p class="error">Aucunes conférences ne correspond à votre recherche</p><br>

                    <p class="error">Les dernières conférences</p>
                    <div class="slider-search">
                    @foreach($list as $event)

                            <div class="col-md-3">
                                <div class="borderevent">
                                    <div class="imgfullmobile">
                                        <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                                        <span class="priceevent">GRATUIT</span>
                                    </div>
                                    <div class="bodyevent">
                                        <div class="h4index">
                                            <h4 class="black"><a href="{{ route('evenement.show', $event->id) }}">{{ str_limit($event->title, $limit = 65, $end = '...') }}</a></h4>
                                        </div>


                                        <div class="dateevent">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> {{ $event->date }} - {{ $event->debut }} à {{ $event->fin }}
                                        </div>


                                        <div class="contentevent">
                                            <p>{{ str_limit($event->content, $limit = 85, $end = '...') }}</p>
                                        </div>

                                        <a href="{{ route('evenement.show', $event->id) }}" class="eventa">En savoir plus...</a>

                                        <div class="clearfix"></div>

                                        <div class="placesevent">
                                            <i class="fa fa-user" aria-hidden="true"></i>  {{ $event->places - $event->reservations->count() }}/{{ $event->places }}
                                            <div class="priceevent2">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }}
                                                <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                                            </div>
                                        </div>



                                    </div>
                                    <button class="btnevent"><a href="{{ route('evenement.show', $event->id) }}">Participer</a></button>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                    @endforeach
                    </div>

                @endif

            </div>
        </div>

        <div class="row ">
            <div class="col-md-12 none">
                <div class="none">
                    <p class="error">Les dernières conférences</p>
                    <div class="slider-search">
                        @foreach($list as $event)

                            <div class="col-md-3">
                                <div class="borderevent">
                                    <div class="imgfullmobile">
                                        <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                                        <span class="priceevent">GRATUIT</span>
                                    </div>
                                    <div class="bodyevent">
                                        <div class="h4index">
                                            <h4 class="black"><a href="{{ route('evenement.show', $event->id) }}">{{ str_limit($event->title, $limit = 65, $end = '...') }}</a></h4>
                                        </div>


                                        <div class="dateevent">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> {{ $event->date }} - {{ $event->debut }} à {{ $event->fin }}
                                        </div>


                                        <div class="contentevent">
                                            <p>{{ str_limit($event->content, $limit = 85, $end = '...') }}</p>
                                        </div>

                                        <a href="{{ route('evenement.show', $event->id) }}" class="eventa">En savoir plus...</a>

                                        <div class="clearfix"></div>

                                        <div class="placesevent">
                                            <i class="fa fa-user" aria-hidden="true"></i>  {{ $event->places - $event->reservations->count() }}/{{ $event->places }}
                                            <div class="priceevent2">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->localisation }}
                                                <i class="fa fa-eur" aria-hidden="true"></i> GRATUIT
                                            </div>
                                        </div>



                                    </div>
                                    <button class="btnevent"><a href="{{ route('evenement.show', $event->id) }}">Participer</a></button>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
