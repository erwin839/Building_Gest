

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    LISTE DES PROPRIETAIRES DE BATIMENTS
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">une autre action</a></li>
                            <li><a href="javascript:void(0);">Autre chose encore à ajouter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="border border-light p-3 mb-4">
                    <!-- BOUTTON POUR LE MODAL -->
                    <div class="text-right">
                        <button type="button" class="btn btn-primary proprio" data-toggle="modal" data-target="#modalInfos" id="affichModal"> Ajouter </button>
                    </div>
                    <!-- FIN BOUTTON POUR LE MODAL -->

                    <!-- Modal -->
                    <div class="modal fade" id="modalInfos" tabindex="-1" role="dialog" aria-labelledby="proprio" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="labelInfo">Ajouter un Propriétaire</h5>
                                    <!-- Petit boutton fermer -->
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> -->
                                </div>
                                <form method="post" id="modalForm">
                                    <div class="modal-body">
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="nom" id="nom" placeholder="Nom" autofocus>
                                                    </div>
                                                    <div id="nomError" class="form-inline"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <!-- <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span> -->
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="prenom" id="prenom" placeholder="Prenom">
                                                    </div>
                                                    <div id="prenomError" class="form-inline"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">room</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="adresse" id="adresse" placeholder="Adresse" autofocus>
                                                    </div>
                                                    <div id="adresseError" class="form-inline"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="phone" id="phone" placeholder="Téléphone">
                                                    </div>
                                                    <div id="phoneError" class="form-inline"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control email"  name="email" id="email" placeholder="Ex: example@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">fingerprint</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date"  name="cni" id="cni" placeholder="C.N.I">
                                                    </div>
                                                    <div id="cniError" class="form-inline"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">money</i>
                                                    </span> 
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" name="nbImm" id="nbImm" min="1" placeholder="Nombre d'immeuble">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">work</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="profession" id="profession" placeholder="Profession">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnModalAnnuler">Annuler</button>
                                        <button type="button" class="btn btn-success" id="btnModalConfirm">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- TABLEAU DES LOCATAIRES -->
                    <div id="content-table-proprio"></div>
                    <!-- FIN TABLEAU DES LOCATAIRES -->
                </div>
            </div>
        </div>
    </div>
</div>


