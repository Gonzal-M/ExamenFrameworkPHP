<header class="page-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <h1><a href="/" class="no-link-style">Examen PHP</a></h1>
            </div>
        </div>
        <form class="form-inline">
            @if(!auth()->check())
            <ul>
                <a href="{{url('/inscription')}}" class="btn btn-info">Inscription</a>

                <a href="{{url('/connexion')}}" class="btn btn-info">Connexion</a>

                <a href="{{url('/users')}}" class="btn btn-info">Utilisateurs</a>

            </ul>

            @else

            <ul>
                <a href="/posts" class="btn btn-info">Profil</a>

                <a href="{{url('/password_modification')}}" class="btn btn-info">Modification Mot de Passe</a>

                <a href="{{url('/signout')}}" class="btn btn-info">Déconnexion</a>

            </ul>
            @endif
        </form>
    </nav>

</header>
