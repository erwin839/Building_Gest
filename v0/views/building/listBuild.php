

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    LISTE DES BATIMENTS
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
                        <button type="button" class="btn btn-primary batiment" data-toggle="modal" data-target="#modalInfos" id="affichModal"> Ajouter </button>
                    </div>
                    <!-- FIN BOUTTON POUR LE MODAL -->

                    <!-- Modal -->
                    <div class="modal fade" id="modalInfos" tabindex="-1" role="dialog" aria-labelledby="batiment" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="labelInfo">Ajouter un Batiment</h5>
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
                                                        <i class="material-icons">home</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="nomBatiment" id="nomBatiment" placeholder="Nom du bâtiment" autofocus>
                                                    </div>
                                                    <div class="form-inline" id="nomBatError"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">room</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="emplacement" id="emplacement" placeholder="Emplacement">
                                                    </div>
                                                    <div class="form-inline" id="emplacementError"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">format_list_numbered</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number" class="form-control"  name="nbEtage" id="nbEtage" placeholder="Nombre étages">
                                                    </div>
                                                    <div class="form-inline" id="etageError"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">format_list_numbered</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" name="nbAppart" id="nbAppart" placeholder="Nombres d'appartements">
                                                    </div>
                                                    <div class="form-inline" id="appartError"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">format_list_numbered</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" id="nbLoc" placeholder="nombre de locataire">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                <select class="form-control show-tick" data-live-search="true" name="idPro" id="proprietaire">
                                                    <option disabled > __Proprietaire__ </option>
                                                    <option value="1" selected> moi </option>
                                                    <option value="2"> toi </option>
                                                    <option value="2"> toi </option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="checkbox" name="" id="gardien">
                                                <label for="gardien"> Ajouter un gardien </label>
                                            </div>
                                        </div>
                                        <div class="row clearfix hidden" id="gardienPart">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="nomGardien" id="nomGardien" placeholder="Nom du gardien">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="prenomGardien" id="prenomGardien" placeholder="Prenom du gardien">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">contact_phone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="telGardien" id="telGardien" placeholder="Téléphone du gardien">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">payments</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="salaireGardien" id="salaireGardien" placeholder="Salaire du gardien">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="btnModalAnnuler" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success" id="btnModalConfirm">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- TABLEAU DES LOCATAIRES -->
                    <div id="content-table-bat"></div>
                    <!-- FIN TABLEAU DES LOCATAIRES -->

                </div>
            </div>
        </div>
    </div>
</div>
