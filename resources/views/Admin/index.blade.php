@extends('layouts.app')

@section('content')

    <div class="container-fluid ">


        <div class="row">
            <div class="col-md-12">
                @include('errors.message')

                @foreach($event as $list)
                    <div class="col-md-3">
                        <div class="borderevent">
                            <div class="topevent">
                                <img class="imgevent" src="{{asset("img/conference.jpg")}}" alt="conf">
                            </div>
                            <div class="bodyevent">
                                <h4><a href="{{ route('evenement.show', $list->id) }}">{{ $list->title }}</a>
                                    <div class="clear-fix"></div></h4>
                                <div class="clearfix"></div>
                                {{ $list->content }}
                                <div class="clear-fix"></div>
                                <a href="{{ route('evenement.show', $list->id) }}" class="eventa">En savoir plus...</a>

                                <div class="clearfix"></div>

                                <div class="placesevent"><i class="fa fa-user" aria-hidden="true"></i> Places: {{ $list->placesTaken }}/{{ $list->places }}</div>
                                <button class="btnevent">Participer</button>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('errors.message')

                    <table>
                        <tr>
                            <td class="col-md-2">Nom</td>
                            <td class="col-md-2">Prénom</td>
                            <td class="col-md-2">Organisateur</td>
                        </tr>

                        @foreach($user as $users)
                            <tr>
                                <td class="col-md-2"> {{$users->name}}</td>
                                <td class="col-md-2">{{$users->surname}}</td>
                                @if($users->is_orga == 1)
                                    <td class="col-md-2">OUI</td>
                                @else
                                    <td class="col-md-2">NON</td>
                                @endif
                                <td class="col-md-2"><button><a href="{{route('orga.edit', $users->id)}}">Edit</a></button></td>
                                <td class="col-md-2"><button> Delete</button></td>
                            </tr>
                        @endforeach

                    </table>

            </div>
        </div>
    </div>
@endsection