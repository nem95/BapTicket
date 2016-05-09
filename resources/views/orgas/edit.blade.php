@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 orga-edit">
            <form class="form-horizontal" role="form" method="POST" action="{{route('orga.update', $user->id)}}">
                {!! csrf_field() !!}

                <input type="hidden" name="_method" value="PUT"/>
                <div class="form-group">
                    <label class="col-md-4 control-label">Prénom</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="surname" placeholder="{{$user->surname}}" value="{{$user->surname }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Nom</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="{{$user->name}}" value="{{$user->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="email" placeholder="{{$user->email}}" value="{{$user->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Numéro de telephone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="tel" placeholder="{{$user->tel}}" value="{{$user->tel }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Adresse postale </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="adresse" placeholder="{{$user->adresse}}" value="{{$user->adresse}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Code postale </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="postal" placeholder="{{$user->postal}}" value="{{$user->postal }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Ville </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="city" placeholder="{{$user->city}}" value="{{$user->city }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Pays </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="country" placeholder="{{$user->country}}" value="{{$user->country}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Facebook </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialfb" placeholder="{{$user->socialfb}}" value="{{$user->socialfb }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Twitter </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialtt" placeholder="{{$user->socialtt}}" value="{{$user->socialtt }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Instagram </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialig" placeholder="{{$user->socialig}}" value="{{$user->socialig }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Google+ </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="socialgg" placeholder="{{$user->socialgg}}" value="{{$user->socialgg }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Profession </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sectors" placeholder="{{$user->sectors}}" value="{{$user->sectors}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Description </label>
                    <div class="col-md-6">
                            @if($user->known != '')
                            <textarea class="form-control" name="known" rows="10" cols="40" placeholder="Saisir votre description ici" maxlength="500">{{$user->known}}</textarea>
                            @else
                            <textarea class="form-control" name="known" rows="10" cols="40" placeholder="Saisir votre description ici" maxlength="500"></textarea>
                            @endif


                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Newsletter</label>
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
                            <i class="fa fa-btn fa-sign-in"></i>Enregistrer les modifications
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection