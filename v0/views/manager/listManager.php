

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    LISTE DES GERANTS DE BATIMENTS
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouterLoc" id="myModal"> Ajouter </button>
                    </div>
                    <!-- FIN BOUTTON POUR LE MODAL -->

                    <!-- Modal -->
                    <div class="modal fade" id="ajouterLoc" tabindex="-1" role="dialog" aria-labelledby="ajouterLocLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ajouterLocLabel">Ajouter un Locataire</h5>
                                    <!-- Petit boutton fermer -->
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> -->
                                </div>
                                <div class="modal-body">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="Nom" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span> -->
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="Prenom">
                                                </div>
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
                                                    <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">fingerprint</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="C.N.I">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">phone</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="Téléphone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">work</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="Profession">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-success" id="modalConfirm">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TABLEAU DES LOCATAIRES -->
                    <div class="row text-center table-responsive">
                        <table class="table table-hover  table-condensed table-stripped" id="tableLoc">
                            <thead>
                                <tr>
                                    <th class="text-center">N</th>
                                    <th class="text-center">Nom</th>
                                    <th class="text-center">Prenom</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Téléphone</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Niang</td>
                                    <td>Samsi</td>
                                    <td>Exemple@min.com</td>
                                    <td>77 xxx xx xx</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Modifier"> <i class="fa fa-edit"></i> </a>
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Voir plus"> <i class="fa fa-eye"></i> </a>
                                        <a class="btn btn-sm btn-danger" id="delete" data-type="manager" data-toggle="tooltip" data-placement="top" title="Supprimer"> <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- FIN TABLEAU DES LOCATAIRES -->

                </div>
            </div>
        </div>
    </div>
</div>
