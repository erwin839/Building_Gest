<?php 
    require_once 'includes/header.php';

    /**
     *  -> Set wallPaper of beautiful house
     *  -> Lock session for a week
     * 
     */
?>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin basé sur bootstrap - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" /*action="controllers/managerCtrl.php"*/ >
                    <div class="msg">Connectez-vous pour commencer votre session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="login" placeholder="login" id="login" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Se souvenir de moi</label>
                        </div>
                        <div class="col-xs-4 part_connect">
                            <button class="btn btn-block bg-pink waves-effect" name="connect" id="btn_login" type="button">Se connecter</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">S'inscrire maintenant!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        require_once 'includes/scripts.php';
        require_once 'includes/footer.php';
    ?>