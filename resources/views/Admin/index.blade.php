@extends('layouts.app')

@section('content')

<div class="spacemenu">
</div>
<div class="whitebg">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 nopadding">
                <h4 class="hcoladmin">Utilisateurs</h4>
                <div class="filtres">
                    <p>Filtres :</p>
                    <ul class="filtresul">
                        <li><input type="checkbox" aria-label="..."> Âge: <input type="text" placeholder="Âge" class="filtersize"></li>
                        <li><input type="checkbox" aria-label="..."> Date de création: <input type="date" class="filtersize"></li>
                        <li><input type="checkbox" aria-label="..."> Sexe: <input type="checkbox" aria-label="..."> Masculin <input type="checkbox" aria-label="..."> Féminin</li>
                    </ul>
                </div>
                
                <!-- Début foreach list as user -->
                <div class="dashboardusers col-md-12">
                    <div class="col-md-3">
                        <img class="" src="{{asset("img/hollande2.jpg")}}" alt="conf">
                    </div>
                    <div class="col-md-3">
                        <p>Nom <br>
                    Prénom <br>
                    Profession <br>
                    Age</p>
                    </div>
                    <div class="col-md-6">
                        <p>Sexe: M <br>
                        Description user avec limites caractères</p>
                        <a href="#" class="btndash">En savoir plus</a>
                    </div>
                </div>
                <!-- Fin foreach list as user -->
            </div>

            <div class="col-md-6">
                <div class="dashhead col-md-12">
                    <div class="col-md-6">
                        <h3>Nom Prénom</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btndash2">Retour profil</a>
                    </div>
                </div>

                <hr class="dashheadhr">

                <div class="dashedituser col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>UTILISATEURS</h4>
                        </div>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control searchmenuinput" placeholder="Entrer le nom">
                            </div>
                        </div>
                    </div>

                    <hr class="whitehr">

                    <div class="row dashuser">
                        <div class="col-md-3">
                            <img class="img-responsive" src="{{asset("img/hollande2.jpg")}}" alt="conf">
                        </div>
                        <div class="col-md-3">
                            {!! Form::open(array())!!}
                                <div class="form-group">
                                    {!! Form::text('name', '',
                                        ['class' => 'form-control', 'placeholder' => 'Nom'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('surname', '',
                                        ['class' => 'form-control', 'placeholder' => 'Prénom'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Âge'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Sexe'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Adresse'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Profession'])
                                    !!}
                                </div>
                            {!! Form::close() !!}
                            <p>Nombre de connections: <br>
                            Conférences participées: <br>
                            Conférences organisées</p>    
                        </div>
                        <div class="col-md-3">
                            <p class="marginbtm">Description:</p>
                            <p>Description de l'utilisateur</p>
                            
                            <div class="statutbtn">
                                <a href="#" class="userororga1"> Utilisateur </a><a href="#" class="userororga2"> Organisateur </a>
                            </div>

                            <div class="dashsocialuser">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>

                                    <a href="#" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                            </div>
                        </div>

                        <div class="col-md-3 dashbtnright">
                            <a href="#">Modifier le profil</a>
                            <a href="#">Enregistrer le profil</a>
                            <a href="#">Supprimer le profil</a>
                        </div>
                    </div>
                    
                </div>

                <hr class="dashheadhr">

                <div class="dashedituser col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>CONFÉRENCES</h4>
                        </div>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control searchmenuinput" placeholder="Entrer le nom">
                            </div>
                        </div>
                    </div>

                    <hr class="whitehr">

                    <div class="row dashuser">
                        {!! Form::open(array())!!}
                        <div class="col-md-12 dashtitleevent">
                            {!! Form::text('title', '',
                                ['class' => 'form-control', 'placeholder' => 'Titre de la conférence'])
                            !!}
                        </div>
                        <div class="col-md-3">
                            <img class="img-responsive" src="{{asset("img/hollande2.jpg")}}" alt="conf">
                        </div>
                        <div class="col-md-6">
                            
                                <div class="form-group">
                                    {!! Form::text('subjet', '',
                                        ['class' => 'form-control', 'placeholder' => 'Sujet'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('host', '',
                                        ['class' => 'form-control', 'placeholder' => 'Conférencier'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::date('date', '',
                                        ['class' => 'form-control'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Lieu'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Adresse'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Adresse 2'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Ville'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Postal'])
                                    !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('', '',
                                        ['class' => 'form-control', 'placeholder' => 'Places'])
                                    !!}
                                </div>
                            
                        </div>
 

                        <div class="col-md-3 dashbtnright">
                            <a href="#">Modifier la conférence</a>
                            <a href="#">Enregistrer la conférence</a>
                            <div class="form-group">
                                {!! Form::textarea('content', '',
                                    ['class' => 'form-control', 'placeholder' => 'Description'])
                                !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 dashdeleventbtn">
                            <a href="#">Supprimer la conférence</a>
                        </div>
                    </div>
                    
                </div>

            {!! Form::close() !!}
            </div>

            <div class="col-md-3 nopadding">
                <h4 class="hcoladmin">Conférences</h4>
                <div class="filtres">
                    <p>Filtres :</p>
                    <ul class="filtresul">
                        <li><input type="checkbox" aria-label="..."> Âge: <input type="text" placeholder="Âge" class="filtersize"></li>
                        <li><input type="checkbox" aria-label="..."> Date de création: <input type="date" class="filtersize"></li>
                        <li><input type="checkbox" aria-label="..."> Sexe: <input type="checkbox" aria-label="..."> Masculin <input type="checkbox" aria-label="..."> Féminin</li>
                        <li><input type="checkbox" aria-label="..."> Lieu: <input type="text" placeholder="Lieu" class="filtersize"></li>
                    </ul>
                </div>

                <!-- Début foreach list as event -->
                <div class="dashboardusers col-md-12">
                    <div class="col-md-3">
                        <img class="" src="{{asset("img/hollande2.jpg")}}" alt="conf">
                    </div>
                    <div class="col-md-3">
                        <p>Titre <br>
                    Host <br>
                    Date <br>
                    Sujet</p>
                    </div>
                    <div class="col-md-6">
                        <p>Sexe: M <br>
                        Description user avec limites caractères</p>
                        <a href="#" class="btndash">En savoir plus</a>
                    </div>
                </div>
                <!-- Fin foreach list as event -->
            </div>

        </div>
    </div>
    
</div>
@endsection