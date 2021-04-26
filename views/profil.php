<?php
    /*
     *  -> Y afficher tous les profils en tenant compte des infos à
     *      afficher en fonction de celui dont on veut afficher le profile.
     * 
     *  -> Utiliser beaucoup de javascript dans le projet pour le
     *      rendre le plus dynamique possible (surtout avec Ajax).
     *
    */

?>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-3">
        <div class="card profile-card">
            <div class="profile-header">&nbsp;</div>
            <div class="profile-body">
                <div class="image-area">
                    <img src="<?= ($_SESSION['auth']['imgProfil'] == null)? 'public/Ui_Our/images/user.PNG' : 'public\Ui_Our\images\\'.$_SESSION['auth']['imgProfil'] ?>"  width="120" height="120" alt="Building21 - Profile Image" />
                </div>
                <div class="content-area">
                    <h3> <?= strtoupper($_SESSION['auth']['nom']) . ' ' . ucfirst($_SESSION['auth']['prenom']) ?> </h3>
                    <p> <?= ($_SESSION['auth']['phone'] == null)? 'Téléphone pas défini' : $_SESSION['auth']['phone'] ?> </p>
                    <p> <?= ucfirst($_SESSION['auth']['nomProfil']) ?> </p>
                </div>
            </div>
            <div class="profile-footer">
                <ul>
                    <!-- <li>
                        <span>Clients</span>
                        <span> <?= "ss" ?> </span>
                    </li>
                    <li>
                        <span>Dépots</span>
                        <span> <?= "ddd" ?> </span>
                    </li>
                    <li>
                        <span>Retraits</span>
                        <span><?= "ccc" ?></span>
                    </li> -->
                    <p>Trouve quoi mettre ici</p>
                </ul>
                <!-- <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button> -->
            </div>
        </div>

        <!-- <div class="card card-about-me">
            <div class="header">
                <h2>ABOUT ME</h2>
            </div>
            <div class="body">
                <ul>
                    <li>
                        <div class="title">
                            <i class="material-icons">library_books</i>
                            Education
                        </div>
                        <div class="content">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">location_on</i>
                            Location
                        </div>
                        <div class="content">
                            Malibu, California
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">edit</i>
                            Skills
                        </div>
                        <div class="content">
                            <span class="label bg-red">UI Design</span>
                            <span class="label bg-teal">JavaScript</span>
                            <span class="label bg-blue">PHP</span>
                            <span class="label bg-amber">Node.js</span>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">notes</i>
                            Description
                        </div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
                        </div>
                    </li>
                </ul>
            </div>
        </div> -->
    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Paramètres du profil</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Changer de mot de passe</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            
                        <!-- PARTIE HOME -->
          
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                            <!-- <form class="form-horizontal" id="formProfil"> -->
                            <form action="" method="POST" class="form-horizontal upload-form" id="formProfil">
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Nom d'utilisateur</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="username" name="ch_username" placeholder="Nom d'utilisateur" value="<?= ($_SESSION['auth']['username'] == null)? 'Pas definie' : $_SESSION['auth']['username'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Name" class="col-sm-2 control-label">Nom</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?= $_SESSION['auth']['nom'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName" class="col-sm-2 control-label">Prenom</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" value="<?= $_SESSION['auth']['prenom'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="adress" class="col-sm-2 control-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="<?= $_SESSION['auth']['adresse']?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birth" class="col-sm-2 control-label">Téléphone</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="<?= ($_SESSION['auth']['phone'] == null)? 'Téléphone non definie' : $_SESSION['auth']['phone'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="demo-masked-input">
                                            <div class="col-sm-10">
                                                <b>Date</b>
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?= ($_SESSION['auth']['email'] == null)? 'Mail non definie' : $_SESSION['auth']['email'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="demo-masked-input">
                                            <div class="col-sm-10">
                                                <b>Profil</b>
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <!-- <i class="material-icons">date_range</i> -->
                                                <i class="fa fa-image"></i>
                                            </span>
                                                
                                                <form action="/file-upload" id="dropzoneFrom" class="dropzone dropzone-custom needsclick">
                                                    <!-- <input type="file" name="file" /> -->
                                                </form>
                                                <form action="controllers/managerCtrl.php" class="form-inline dropzone dropzone-custom needsclick">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="InputSkills" class="col-sm-2 control-label">Skills</label>

                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                                            <label for="terms_condition_check">J'accepte les <a href="#">termes et conditions</a> (à toi de voir ^-^) </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="button" class="btn btn-danger" id="btn_C_Profil" name="btnProfil" >MODIFIER</button>
                                        </div>
                                    </div>
                            </form>
                            
                        </div>

                        <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="OldPassword" class="col-sm-3 control-label">Ancien mot de passe</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Ancien mot de passe" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPassword" class="col-sm-3 control-label">Nouveau mot de passe</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="Nouveau mot de passe" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPasswordConfirm" class="col-sm-3 control-label">Nouveau mot depasse (Confirmation)</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="Nouveau mot depasse (Confirmation)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-danger" id="Btn_C_Password" >MODIFIER</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>