@extends('layouts.app')
 
@section('content')
    <div class="slider">
        <div>
            <img src="{{asset("img/conf-1.jpg")}}" alt="" class="img-responsive">
            <div class="slide-1">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis dolores eaque expedita, iure porro rem sint unde! Autem corporis ex facilis fuga harum in iure reiciendis tempore ut voluptate.</p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset("img/conf-2.jpg")}}" alt="" class="img-responsive">
            <div class="slide-2">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque et facilis in laborum officiis porro, quae quas recusandae voluptas! Ab cumque eos ex ipsa mollitia officiis pariatur quo voluptatibus.</p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset("img/conf-3.jpg")}}" alt="" class="img-responsive">
            <div class="slide-3">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab autem dolorem doloremque dolores est, harum, inventore ipsum, iusto laudantium modi molestiae omnis quis ratione repellat vero voluptas? Adipisci, necessitatibus?</p>
                <div class="participe">
                    <button class="participer">Participer</button>
                    <button class="plus">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row h1event">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-3">
                    <hr class="titlehr">
                </div>
                <div class="col-md-6">
                    <h1 class="eventstitle titleindex">LES TOP CONFÉRENCES</h1>
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
        @include('pagination.default', ['paginator' => $list])
    </div>
@endsection
