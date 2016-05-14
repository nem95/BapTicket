@extends('layouts.app')

@section('content')
<div class="modifprofilbg">
<div class="createeventh"><h3>Modifier le profil</h3></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="numbevent">
                <h4><span class="number">1</span> Informations générales (Elles apparaîtront sur votre profil)</h4>
                <hr class="hrevent">
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{route('orga.update', $user->id)}}" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <input type="hidden" name="_method" value="PUT"/>
                <div class="form-group">
                    <label class="col-md-12">Prénom:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="surname" placeholder="{{$user->surname}}" value="{{$user->surname }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Nom:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="{{$user->name}}" value="{{$user->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Profession:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sectors" placeholder="{{$user->sectors}}" value="{{$user->sectors}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Description:</label>
                    <div class="col-md-6">
                            @if($user->known != '')
                            <textarea class="form-control" name="known" rows="8" cols="40" placeholder="Saisir votre description ici" maxlength="500">{{$user->known}}</textarea>
                            @else
                            <textarea class="form-control" name="known" rows="8" cols="40" placeholder="Saisir votre description ici" maxlength="500"></textarea>
                            @endif
                    </div>
                </div>

                

                <div class="numbevent">
                    <h4><span class="number">2</span> Informations personnelles (Elles n'apparaîtront pas sur votre profil)</h4>
                    <hr class="hrevent">
                </div>

                <div class="form-group">
                    <label class="col-md-12">Email:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email" placeholder="{{$user->email}}" value="{{$user->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Numéro de telephone:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="tel" placeholder="{{$user->tel}}" value="{{$user->tel }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Adresse:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="adresse" placeholder="{{$user->adresse}}" value="{{$user->adresse}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Adresse 2:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="adresse" placeholder="{{$user->adresse}}" value="{{$user->adresse}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Code postale:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="postal" placeholder="{{$user->postal}}" value="{{$user->postal }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Ville:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="city" placeholder="{{$user->city}}" value="{{$user->city }}">
                    </div>
                </div>

                <div class="numbevent">
                    <h4><span class="number">3</span> Photo de profil</h4>
                    <hr class="hrevent">
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <input name="image" type="file">
                        <p class="errors">{!!$errors->first('image')!!}</p>
                        @if(Session::has('error'))
                            <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                    </div>
                </div>

                <div class="numbevent">
                    <h4><span class="number">4</span> Réseaux sociaux</h4>
                    <hr class="hrevent">
                </div>

                <div class="form-group">
                    <label class="col-md-12">Facebook:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialfb" placeholder="{{$user->socialfb}}" value="{{$user->socialfb }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Twitter:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialtt" placeholder="{{$user->socialtt}}" value="{{$user->socialtt }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Instagram:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialig" placeholder="{{$user->socialig}}" value="{{$user->socialig }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Google+:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialgg" placeholder="{{$user->socialgg}}" value="{{$user->socialgg }}">
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="col-md-12">Newsletter:</label>
                    <div class="col-md-6">
                        <p>Voulez-vous vous inscrire a notre Newsletter ?</p>
                            @if($user->newsletter == 1)
                                <input type="radio" name="newsletter" value="1" checked> OUI
                                <input type="radio" name="newsletter" value="0" > NON<br>
                            @else
                                <input type="radio" name="news" value="1" > OUI
                                <input type="radio" name="news" value="0" checked> NON<br>
                            @endif



                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn center-block btnlogin">
                            Enregistrer
                        </button>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
@endsection