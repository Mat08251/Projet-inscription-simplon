
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="../index.php"><img class="logo" src="../images/logo-simplon_23.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li class="nav-item1">
                <a class="nav-link mr-sm-2" href="../index.php"><span class="icon"><i class="fas fa-home"></i></span>ACCUEIL</a>
            </li>
                <?php if(isset($_SESSION['mail'])){ ?>
                    <div class="deconnexion">
                        <li class="nav-item">
                        <span class="icon"><i class="fas fa-user"></i></span><?= $_SESSION['pseudo']; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-sm-2" href="../traitement/deconnexion_session.php">Deconnexion</a>
                    </li>
                    </div>
                    <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link mr-sm-2" href="#connexion" rel="modal:open"><span class="icon"><i class="fas fa-user"></i></span>SE CONNECTER</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
