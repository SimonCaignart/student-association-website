

    <div class="modal fade" id="modalLRForm" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
    
            <!--Content-->
            <div class="modal-content">
        
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
        
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" id="CI" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                    Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Inscription</a>
                </li>
                </ul>
        
                <!-- Tab panels -->
                <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <form method="POST" action="{{ route('login') }}">
                                @csrf
          {{-- INPUT CONNEXION / MAIL --}}
                    <div class="modal-body mb-1">
                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                        <div class="form-group row">
                                <input id="email" class="modalLRInput" type="email" placeholder="Votre Adresse Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        {{-- INPUT CONNEXION / MOT DE PASSE --}}
                    <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                            <input id="password" type="password" class="modalLRInput" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Votre Mot de Passe"required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group row">
                            <div class="form-check">
                                <input  class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </form>
                    </div>

               {{-- BUTTON CONNEXION  --}}
                    <div class="text-center mt-2">
                        <button class="btn btn-warning" type="submit" >   {{ __('Connexion') }}<i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                    </div>

              {{-- PAS ENCORE INSCRIS --}}
                    <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                        <p id="textModal">Pas encore inscris ? <a href="#panel8" data-toggle="tab" class="blue-text">Inscription</a></p>
                      

            {{-- BUTTON FERMER --}}
                    </div>
                    <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                    </div>
        
                </div>
                <!--/.Panel 7-->
        

                <!--Panel 8 INSCRIPTION-->
                <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <form method="POST" action="{{ route('register') }}">
                                @csrf
                    <!--Body-->
                    <div class="modal-body">
                        {{-- INSCRIPTION CESI CENTER --}}
                            <i class="fas fa-school"></i>
                            <label for="Cesi_id">Centre CESI</label>
                           @include('inc.centerSelect')
                    
                           {{-- INSCRIPTION EMAIL --}}
                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                        <input id="email"  placeholder="Adresse Mail"  class="modalLRInput" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <i class="fas fa-user-graduate"></i>


                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                            <input id="firstname" type="text" class="modalLRInput" placeholder="Prénom"class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="given-name" autofocus>

                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                            <input id="name" type="text" class="modalLRInput" placeholder="Nom"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="family-name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>
                        </div>
                        </div>

                        {{-- MOT DE PASSE / INSCRIPTION --}}
                    <div class="md-form form-sm mb-5">
                            <i class="fas fa-lock prefix"></i>
                            <input id="password" class="modalLRInput" placeholder="Mot de passe"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
        
                     {{-- CONFIRM MOT DE PASSE / INSCRIPTION --}}
                    <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                            <input id="password-confirm" type="password" class="modalLRInput"  class="form-control" placeholder="Confirmer le mot de passe" name="password_confirmation" required autocomplete="new-password">
                    </div>


                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">J'accepte les conditions d'utilisation</label>
                        </div>
                    <div class="text-center form-sm mt-2">
                        <button class="btn btn-warning" type="submit"> {{ __('Inscription') }} <i class="fas fa-sign-in"></i></button>
                    </div>
        
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                    <div class="options text-left">
                        <p  id="textModal">Vous avez déjà un compte ? <a data-toggle="tab" href="#panel7" class="blue-text">Se connecter</a></p>
                    </div>
                    <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
                <!--/.Panel 8-->
            </form>
                </div>
        
            </div>
            </div>
            <!--/.Content-->
        </div>
        </div>
        <!--Modal: Login / Register Form-->
 