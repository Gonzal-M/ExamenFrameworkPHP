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
                    <a href="" class="btn btn-info">Inscription</a>

                    <a href="" class="btn btn-info">Connexion</a>

                </ul>

            @else

                <ul>
                    <a href="" class="btn btn-info">Profil</a>

                    <a href="" class="btn btn-info">Panier</a>

                    <a href="" class="btn btn-info">Déconnexion</a>

                </ul>
            @endif
        </form>
    </nav>

</header>