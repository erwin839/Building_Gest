

<!-- Jquery Core Js -->
    <script src="public/Ui_Template/plugins/jquery/jquery.min.js"></script>
   <!--  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> -->

    <!-- Nos Script -->
    <!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>	
    <!-- Bootstrap Core Js -->
    <script src="public/Ui_Template/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
    <!-- Select Plugin Js -->
    <script src="public/Ui_Template/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="public\Ui_Template\plugins\bootstrap-colorpicker\js\bootstrap-colorpicker.js" ></script>
    <!-- DataTables -->
    <script src="public\Ui_Template\plugins\jquery-datatable\jquery.dataTables.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\skin\bootstrap\js\dataTables.bootstrap.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\buttons.flash.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\buttons.html5.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\buttons.print.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\dataTables.buttons.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\jszip.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\pdfmake.min.js"></script>
    <script src="public\Ui_Template\plugins\jquery-datatable\extensions\export\vfs_fonts.js"></script>
    <!-- Fin DataTables -->

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="public/Ui_Template/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="public/Ui_Template/plugins/node-waves/waves.js"></script>
    
    <!-- Jquery CountTo Plugin Js -->
    <script src="public/Ui_Template/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="public/Ui_Template/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
   <!--  <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.3/index.min.js"></script> -->
    
    <!-- Morris Plugin Js -->
    <script src="public/Ui_Template/plugins/raphael/raphael.min.js"></script>
    <script src="public/Ui_Template/plugins/morrisjs/morris.js"></script>
    
    <!-- ChartJs -->
    <script src="public/Ui_Template/plugins/chartjs/Chart.bundle.js"></script>
    
    <!-- Flot Charts Plugin Js -->
    <script src="public/Ui_Template/plugins/flot-charts/jquery.flot.js"></script>
    <script src="public/Ui_Template/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="public/Ui_Template/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="public/Ui_Template/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="public/Ui_Template/plugins/flot-charts/jquery.flot.time.js"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="public/Ui_Template/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="public\sweetalert.js"></script>

    <!-- Fonctions Js (SweetAlert et autres) -->
    <script>

        $(document).ready(function(){

            $(document).on('click', '#btn_login', function(e) {
                    var login = $("#login").val();
                    var password = $("#password").val();
                    var connect = "connect";

                    if($('#login').val() == "" || $('#password').val() == "" ){
                        alert('Entrer les champ');
                    }else {
                        //var data_login = $("#sign_in").serialize();

                        var data_login = [login, password, connect];
                        console.log(data_login);

                        $.ajax({
                            url: "controllers/managerCtrl.php",
                            method: "POST",
                            data: {connect:data_login},
                            dataType: "json",
                            beforeSend: function() {
                                //$(".part_connect").text('Chargement');
                                $('.part_connect').css('background-color', 'white');
                                $(".part_connect").html('<img src="public/Ui_Our/images/Ripple-spinner.gif" width="45px" height="45px" />');
                            },

                            complete: function() {
                                //$(".part_connect").text('Se connecter');
                                $(".part_connect").html('<button class="btn btn-sm bg-pink waves-effect" name="connect" id="btn_login" type="button">Se connecter</button>');
                            },

                            success: function(reponse) {
                                if(reponse.result){
                                    window.location = "/Admin_Gest/acceuil.php?page=ohayo";
                                }else{
                                    //console.log(reponse.error);
                                    swal.fire({
                                        title: 'Erreur',
                                        text: reponse.error,
                                        icon: 'error',
                                        timer: 3500,
                                        showConfirmButton: false,
                                        showCancelButton: false,
                                    })
                                }
                            }
                        });
                        
                    }

            });

            $(document).on('click', '#btn_C_Profil', function(e){

                var data = $('#formProfil').serialize();
                console.log(data);
                
                Dropzone.options.dropzoneFrom = {
                    autoProcessQueue: false,
                    acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
                    init: function(){
                        var submitButton = document.querySelector('#btn_C_Profil');
                        myDropzone = this;
                        submitButton.addEventListener("click", function(){
                            myDropzone.processQueue();
                        });
                        this.on("complete", function(){
                            if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                                var _this = this;
                                _this.removeAllFiles();
                            }
                        });
                    },
                };

                SwalShowConfirmProfil(data);
                e.preventDefault();
            });

            $(document).on('click', '#affichModal', function(e) { 

                $('input').removeAttr('disabled');
                $('#modalForm').trigger('reset');

                if($(this).hasClass('batiment')) {
                    var type = "proprio";
                    $.ajax({
                        url: setUrl(type),
                        method: "POST",
                        data: "allProprio", //Recupere tous les proprios
                        dataType: "Json",

                        success: function(reponse){
                            //alert(reponse.data);
                            console.log(reponse.data);
                            console.log(reponse.data.length);
                            var htmlSelect = "<option disabled > __Proprietaires__ </option>";
                            for (let i = 0; i < reponse.data.length; i++) {
                                htmlSelect += '<option value="'+ reponse.data[i].idP +'"> '+ reponse.data[i].nomP +' ' + reponse.data[i].prenomP +' </option>';
                            }
                            console.log(htmlSelect);
                            $("#proprietaire").html("");
                            $("#proprietaire").fadeIn(htmlSelect);
                            $("select#proprietaire").html(htmlSelect);
                            //document.getElementById("proprietaire").innerHTML = htmlSelect;
                            console.log($("#proprietaire").text());
                        },
                        error: function(reponse){
                            alert("Une erreur s'est produite pendant le chargement des Proprietaires!");
                            console.log("Une erreur s'est produite pendant le chargement des Proprietaires!");
                        }
                    });
                }

                //alert($("#proprietaire option:selected").val());

                /* if($(this).hasClass('proprio')) {
                    $('#labelInfo').text("Ajouter un propriétaire");                        
                    $('#nom').val("");                        
                    $('#prenom').val("");                        
                    $('#adresse').val("");                        
                    $('#email').val("");                        
                    $('#cni').val("");                        
                    $('#phone').val("");                        
                    $('#profession').val("");

                }*/
               /* if($(this).hasClass('locataire')) {
                    $('#labelInfo').text("Ajouter un Locataire");
                    $('#nom').val("");
                    $('#prenom').val("");
                    $('#email').val("");
                    $('#cni').val("");
                    $('#phone').val("");
                    $('#profession').val("");

                }*/
               /* if($(this).hasClass('batiment')) {
                    $('#labelInfo').text("Ajouter un nouvel immeuble");
                    $('#nomBatiment').val("");
                    $('#emplacement').val("");
                    $('#nbEtage').val("");
                    $('#nbAppart').val("");
                    $('#nbLocataire').val("");
                    $('#nomGardien').val("");
                } */

                $('#btnModalAnnuler').text("Annuler");
                $('#btnModalConfirm').text('Ajouter');
                $('#btnModalConfirm').show();
                $('.modal-footer').html('<button type="button" class="btn btn-danger" id="btnModalAnnuler" data-dismiss="modal">Annuler</button><button type="button" class="btn btn-success" id="btnModalConfirm">Ajouter</button>');

                $(document).on('click', '#btnModalConfirm', function(e){
                    var verify = false;
                    var type = $('#modalInfos').attr('aria-labelledby');

                    if(type == "locataire"){
                        if($('#nom').val() == "" || $('#prenom').val() == "" || $('#cni').val() == "" || $('#mtnLoyer').val() == ""){
                            if($('#nom').val() == ""){
                                showErrorForm(nomError, "Veuillez remplir ce champ");
                            }
                            if($('#prenom').val() == ""){
                                showErrorForm(prenomError, "Veuillez remplir ce champ");
                            }
                            if($('#cni').val() == ""){
                                showErrorForm(cniError, "Veuillez remplir ce champ");
                            }
                            if($('#mtnLoyer').val() == ""){
                                showErrorForm(loyerError, "Veuillez remplir ce champ");
                            }
                        }else{
                            verify = true;
                        }
                    }

                    if(type == "proprio"){
                        if($('#nom').val() == "" || $('#prenom').val() == "" || $('#adresse').val() == "" || $('#phone').val() == ""|| $('#cni').val() == ""){
                            if($('#nom').val() == ""){
                                showErrorForm(nomError, "Veuillez remplir ce champ");
                            }
                            if($('#prenom').val() == ""){
                                showErrorForm(prenomError, "Veuillez remplir ce champ");
                            }
                            if($('#phone').val() == ""){
                                showErrorForm(phoneError, "Veuillez remplir ce champ");
                            }
                            if($('#cni').val() == ""){
                                showErrorForm(cniError, "Veuillez remplir ce champ");
                            }
                            if($('#adresse').val() == ""){
                                showErrorForm(adresseError, "Veuillez remplir ce champ");
                            }
                        }else{
                            verify = true;
                        }
                    }

                    if(type == "batiment"){
                        if($('#nomBatiment').val() == "" || $('#emplacement').val() == "" || $('#nbEtage').val() == "" || $('#nbAppart').val() == ""){
                            if($('#nomBatiment').val() == ""){
                                showErrorForm(nomBatError, "Veuillez remplir ce champ");
                            }
                            if($('#emplacement').val() == ""){
                                showErrorForm(emplacementError, "Veuillez remplir ce champ");
                            }
                            if($('#nbEtage').val() == ""){
                                showErrorForm(etageError, "Veuillez remplir ce champ");
                            }
                            if($('#nbAppart').val() == ""){
                                showErrorForm(appartError, "Veuillez remplir ce champ");
                            }
                        }else{
                            verify = true;
                        }
                    }

                    
                    if(verify){
                        var dataForm = $('#modalForm').serialize();
                        console.log(dataForm);
                        SwalAdd(dataForm, type);
                    }

                    e.preventDefault();
                });

                e.preventDefault();
            });

            $(document).on('click', '#gardien', function(e) {
                //var gardien = document.getElementById('')
                var gardien = $('#gardien').attr('id');
                
                if($('#gardienPart').hasClass('hidden')){
                    $("#gardienPart").removeClass('hidden');
                }else {
                    $("#gardienPart").addClass('hidden');
                }
            });

            $(document).on('click', '#seeMore', function(e){
                var id = $(this).data('id');
                var type = $(this).data('type');

                /** Ajout des attribut disabled sur les inputs du modal */
                $('.modal-body input').attr('disabled', 'disabled');
                
                /** On affiche le modal */
                $('.modal-footer').html('<button type="button" class="btn btn-danger" id="btnModalAnnuler" data-dismiss="modal">Annuler</button><button type="button" class="btn btn-success" id="btnModalConfirm">Ajouter</button>');
                $('#modalInfos').modal('show');
                $('#btnModalAnnuler').text("Fermer");
                $('#btnModalConfirm').hide();
                /** On lance la requtte Ajax pour recup les données et les affichées dans le modal*/          
                showInfoByType(id, type);
                e.preventDefault();
            });
            
            $(document).on('click', '#modifier', function(e){
                var id = $(this).data('id');
                var type = $(this).data('type');

                if($('.modal-body input').attr('disabled')) {
                    $('input').removeAttr('disabled');
                }

                // On affiche les donées de l'entitée
                showInfoByType(id, type);

                $('#modalInfos').modal('show');
                $('#btnModalAnnuler').text("Annuler la modification");
                $('#btnModalConfirm').show();
                $('#btnModalConfirm').text("Continuer La modification");
                $('#btnModalConfirm').text("Continuer La modification");
                $('.modal-footer').html('<button type="button" class="btn btn-danger" id="btnModalAnnuler" data-dismiss="modal">Annuler la modification</button><button type="button" class="btn btn-success" id="btnModalConfirm2">Continuer la modification</button>');
                
                $(document).on('click', '#btnModalConfirm2', function(e){
                    var verify = false;
                    if(type == 'proprio') {
                        if($('#nom').val() == "" || $('#prenom').val() == "" || $('#adresse').val() == "" || $('#phone').val() == ""|| $('#cni').val() == ""){
                            if($('#nom').val() == ""){
                                showErrorForm(nomError, "Veuillez remplir ce champ");
                            }
                            if($('#prenom').val() == ""){
                                showErrorForm(prenomError, "Veuillez remplir ce champ");
                            }
                            if($('#phone').val() == ""){
                                showErrorForm(phoneError, "Veuillez remplir ce champ");
                            }
                            if($('#cni').val() == ""){
                                showErrorForm(cniError, "Veuillez remplir ce champ");
                            }
                            if($('#adresse').val() == ""){
                                showErrorForm(adresseError, "Veuillez remplir ce champ");
                            }
                        }else{
                            verify = true;
                        }                       
                        var nom = $('#nom').val();                        
                        var prenom = $('#prenom').val();                        
                        var adresse= $('#adresse').val();                        
                        var email = $('#email').val();                        
                        var cni = $('#cni').val();                        
                        var phone = $('#phone').val();                        
                        var profession = $('#profession').val();

                        var dataUpdate = [id, nom, prenom, adresse, email, cni, phone, profession];

                    }
                    if(type == 'locataire') {
                        if($('#nom').val() == "" || $('#prenom').val() == "" || $('#cni').val() == "" || $('#mtnLoyer').val() == ""){
                            if($('#nom').val() == ""){
                                showErrorForm(nomError, "Veuillez remplir ce champ");
                            }
                            if($('#prenom').val() == ""){
                                showErrorForm(prenomError, "Veuillez remplir ce champ");
                            }
                            if($('#cni').val() == ""){
                                showErrorForm(cniError, "Veuillez remplir ce champ");
                            }
                            if($('#mtnLoyer').val() == ""){
                                showErrorForm(loyerError, "Veuillez remplir ce champ");
                            }
                        }else{
                            verify = true;
                        }
                        var nom = $('#nom').val();
                        var prenom = $('#prenom').val();
                        var email = $('#email').val();
                        var cni = $('#cni').val();
                        var loyer = $('#mtnLoyer').val();
                        var phone = $('#phone').val();
                        var age = $('#age').val();
                        var profession = $('#profession').val();

                        var dataUpdate = [id, nom, prenom, email, cni, phone, age, profession, loyer];

                    }
                    if(type == 'batiment') {
                        if($('#nomBatiment').val() == "" || $('#emplacement').val() == "" || $('#nbEtage').val() == "" || $('#nbAppart').val() == ""){
                            if($('#nomBatiment').val() == ""){
                                showErrorForm(nomBatError, "Veuillez remplir ce champ");
                            }
                            if($('#emplacement').val() == ""){
                                showErrorForm(emplacementError, "Veuillez remplir ce champ");
                            }
                            if($('#nbEtage').val() == ""){
                                showErrorForm(etageError, "Veuillez remplir ce champ");
                            }
                            if($('#nbAppart').val() == ""){
                                showErrorForm(appartError, "Veuillez remplir ce champ");
                            }
                        }else{
                            verify = true;
                        }
                        var nomBat = $('#nomBatiment').val();
                        var nomEmp = $('#emplacement').val();/* 
                        $('#nbEtage').val("502");
                        $('#nbAppart').val("502"); */
                        var nomGardien = $('#nomGardien').val();

                        var dataUpdate = [id, nomBat, nomEmp, nomGardien];
                    }
                    if(verify)SwalUpdate(dataUpdate, type);
                });

                e.preventDefault();
            });

            /** 
                When on clique sur l'un des boutton supprimer on exécute la recherche ajax en fonction du type de personne
                "locataire", "proprietaire", "batiment" ou autre.
             */ 
            $(document).on('click', '#delete', function(e){
                var id= $(this).data('id');
                var type = $(this).data('type');
                delSwal(id, type);
                //SwalDelete(idLocataire);
                e.preventDefault();
            });
            
            $(document).on('click', '#modalConfirm', function(e){
                SwalConfirm();
                e.preventDefault();
            });

            $('table').DataTable({
                
                dom: 'Bfrtip',
                select: true,
                buttons: {
                    buttons: [
                        { extend: 'pdf', text: 'Enregitrer sous PDF', className: 'btn btn-primary btn-lg waves-effect waves-float' },
                        /* { extend: 'copy', text: 'Copier', className: 'btn btn-primary btn-lg waves-effect waves-float' }, */
                        { extend: 'excel', text: 'Exporter vers Excel', className: 'btn btn-primary btn-lg waves-effect waves-float' },
                        { 
                            extend: 'print', 
                            text: 'Imprimer', 
                            messageTop: 'lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa perspiciatis repellat blanditiis reprehenderit sapiente quis est minima cupiditate voluptas, velit vel dicta qui nobis maxime illum. Recusandae nobis possimus sapiente!',
                            className: 'btn btn-primary btn-lg waves-effect waves-float', 
                            customize: function ( win ) {
                                $(win.document.body)
                                    .css('font-size', '10pt')
                                    .prepend(
                                        '<img src="public/Ui_Our/images/niangLogo.png" style="position:absolute; top:0; left:0;" /><p class="text-primary bg-primary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem fugit unde deleniti illo cupiditate accusamus modi placeat, necessitatibus consequuntur explicabo temporibus obcaecati. Eaque culpa beatae cum nisi, id ipsa labore.</p>'
                                    );
            
                                $(win.document.body).find( 'table' )
                                    .addClass( 'compact table-striped' )
                                    .css( 'font-size', 'inherit' );
                                
                                    $(win.document.body).find( 'th' )
                                    .addClass( 'bg-primary' )
                                    .css( 'font-size', 'inherit' )
                                    .css( 'background-color', 'blue' );
                                var medias = win.document.querySelectorAll('[media="screen"]');
                                for(var i=0; i < medias.length;i++){ medias.item(i).media="all" };
                            }
                        },
                    ]
                     
                },

                language: {
                    "decimal":        "",
                    "emptyTable":     "Aucun enregistrement trouvé",
                    "info":           "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                    "infoEmpty":      "Affichage de 0 a 0 des 0 données",
                    "infoFiltered":   "(éléments filtré sur _MAX_ entrées totales)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Show _MENU_ entries",
                    "loadingRecords": "chargement...",
                    "processing":     "en cours...",
                    "search":         "Rechercher :",
                    "zeroRecords":    "Aucun enregistrements correspondants trouvés",
                    "paginate": {
                        "first":      "Premier",
                        "last":       "Dernier",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });

            listLocataires();
            listProprio();
            listBatiment();
        });

        /* Permet d'afficher les #rentes erreurs dans les input pdt un temp deter */
        function showErrorForm(id, message) {
            if(id.hasAttribute('hidden'))
                id.removeAttribute('hidden');
            id.innerText = message;
            setTimeout(() => {
                id.setAttribute('hidden', 'hidden');
            }, 3500);;
        }

        /* Pas encore utilisées */
        /* function Welcome(){
            swal.fire({
                title: 'Cool !',
                text: 'Do you want to continue',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        }

        function SwalConfirm(){
            swal.fire({
                title: "Confirmation",
                text: "Appuyer sur OK pour enregistrer 'Nom_Prenom' ou annuler",
                icon: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                
                /** 
                 * Faire appel a Ajax pour enregistrer 
                */

               /* preConfirm: function(){
                    return swal("Le locataire 'Nom_Prenom' a été enregistrer avec succès !", "success");
                },
                allowOutsideClick: false

                }, function () {
                setTimeout(function () {
                    swal("Le locataire 'Nom_Prenom a été enregistrer avec succès !'");
                }, 2000);
            });
        } */

        /* Swal pour confirmer la modification du profil */
        function SwalShowConfirmProfil(data){
            swal.fire({
                icon: 'info',
                title: 'Voulez-vous modifier les données de profil ?',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: "Non, Annuler",
                confirmButtonText: "Oui, Modifier",
                showLoaderOnConfirm: true,

                preConfirm: function(){
                    return new Promise(function(resolve){
                        $.ajax({
                            url: 'controllers/managerCtrl.php',
                            type: 'POST',
                            data: data,
                            dataType: 'json',
                        })
                        .done(function (reponse){
                            swal.fire('Profil modifié', reponse.message, reponse.status);
                            /* Reaload de la page profil */
                            $('#content container-fluid').load('views/profil.php');
                        })
                        .fail(function(reponse){
                            swal.fire('Un petit soucis !', reponse.message, reponse.status);
                            swal.fire("Oops...", 'Quelque chose a mal tourné avec Ajax', 'error');
                        });
                    });
                },

            });
        }

        /* Permet d'ajouter soit un locataire, un batiment ou un proprio */
        function SwalAdd(dataForm, type) {
            var url = setUrl(type);
            swal.fire({
                icon: 'info',
                title: 'Veuillez confirmer',
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "Oui, Continuer",
                cancelButtonText: "Non, Annuler",
                showLoaderOnConfirm: true,
                preConfirm: function(){
                    return new Promise(function(resolve){
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: dataForm,
                            dataType: 'json',
                        })
                        .done(function (reponse){
                            if(reponse.stat) {
                                swal.fire( {
                                    title : 'Ajouté',
                                    text :  reponse.message,
                                    icon : reponse.status,
                                    timer: 2500,
                                    allowEscapeKey : false,
                                    showConfirmButton : false,
                                    showCancelButton : false,
                                } );
                                listLocataires();
                                listProprio();
                                $('#modalInfos').modal('hide');
                            }else {
                                swal.fire( {
                                    title : 'Attention',
                                    text :  reponse.message,
                                    icon : reponse.status,
                                    timer: 3500,
                                    allowEscapeKey : false,
                                    showConfirmButton : false,
                                    showCancelButton : false,
                                } );   
                            }
                        })
                        .fail(function(reponse){
                            console.log("ici");
                            console.log(reponse.message);
                            swal.fire("Oops...", 'Quelque chose a mal tourné avec Ajax', 'error');
                        });
                    });
                },
                allowOutsideClick: false
            });
        }

        /* Permet de modifier soit un locataire, un batiment ou un proprio */
        function SwalUpdate(dataFormUp, type) {
            var url = setUrl(type);
            swal.fire({
                icon: 'info',
                title: 'Veuillez confirmer la modification',
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "Oui, Modifier",
                cancelButtonText: "Non, Annuler",
                showLoaderOnConfirm: true,
                preConfirm: function(){
                    return new Promise(function(resolve){
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {dataUpdate : dataFormUp},
                            dataType: 'json',
                        })
                        .done(function (reponse){
                            swal.fire( {
                                title : 'Modifié',
                                text :  reponse.message,
                                icon : reponse.status,
                                timer: 2500,
                                allowEscapeKey : false,
                                showConfirmButton : false,
                                showCancelButton : false,
                            } );
                            listLocataires();
                            listProprio();
                            $('#modalInfos').modal('hide');
                        })
                        .fail(function(reponse){
                            /* console.log(reponse.message); */
                            swal.fire("Oops...", 'Quelque chose a mal tourné avec Ajax', 'error');
                        });
                    });
                },
                allowOutsideClick: false
            });
        }

        /* Swal affich les donées d'un locataire, proprietaire ou un batiment en fonction du type */
        function showInfoByType(id, type){
            var url = setUrl(type);
            console.log(url);

                /**
                    A l'envoi des données on connait deja le type (bat, loc ou proprio)
                    au retour pou connaite créer un dans le tableau reponse un premier index contenant le type
                    ex : $reponse = array(); $reponse['type_Data'] = batiment || locataire || proprietaire
                    après vérifier et afficher dans le modal en fonction de lui 
                 */
            
            $.ajax({
                url: url,
                type: 'POST',
                data: 'id='+id,
                dataType: 'json',
            })
            .done(function (reponse){
                if(reponse.type_data == "batiment"){
                    $('#labelInfo').html('Toutes les Informations sur <u class="text-success">' + reponse.data.nomBat + '</u>');
                    /* $('#nom').val(reponse.data.matBat); */
                    $('#nomBatiment').val(reponse.data.nomBat);
                    $('#emplacement').val(reponse.data.emplacement);
                    $('#nbEtage').val(reponse.data.nbEtage);
                    $('#nbAppart').val(reponse.data.nbAppart);
                    //$('#nbLoc').val(reponse.data.nbLoc);
                    $('#proprietaire').val(reponse.data.nomP);
                    $('#numCmp').val(reponse.data.numCmp);
                    //$('#solde').val(reponse.data.solde); 
                    //$('#').val(reponse.data.);

                 }
                //console.log(reponse);

                if(reponse.type_data == "locataire") {
                    $('#labelInfo').html('Toutes les Informations sur <u class="text-primary">' + reponse.data.nomLoc + ' ' + reponse.data.prenomLoc+'</u>');
                    $('#nom').val(reponse.data.nomLoc);
                    $('#prenom').val(reponse.data.prenomLoc);
                    $('#email').val(reponse.data.emailLoc);
                    $('#age').val(reponse.data.ageLoc);
                    $('#cni').val(reponse.data.cniLoc);
                    $('#phone').val(reponse.data.phoneLoc);
                    $('#profession').val(reponse.data.professionLoc);
                    $('select#nomBatiment').html("<option value='"+ reponse.data.idI +"'> "+ reponse.data.nomBat +" </option>");
                    $('#mtnLoyer').val(reponse.data.montantBail);
                    $('#batimentError').text(reponse.data.nomBat);
                    /* $('#solde').val(reponse.data.solde); */
                 }

                if(reponse.type_data == "proprietaire"){
                    $('#labelInfo').html('Toutes les Informations sur <u class="text-primary">' + reponse.data.nomP + ' ' + reponse.data.prenomP+'</u>');
                    $('#nom').val(reponse.data.nomP);                        
                    $('#prenom').val(reponse.data.prenomP);                        
                    $('#adresse').val(reponse.data.adresseP);                        
                    $('#email').val(reponse.data.emailP);                        
                    $('#cni').val(reponse.data.cniP);                        
                    $('#phone').val(reponse.data.phoneP);                        
                    $('#profession').val(reponse.data.professionP);
                 }
            })
            .fail(function(reponse) {
                /* Test  */
                $('#labelInfo').html('Toutes les Informations sur <u class="text-success">' + "test" + ' ' + "test"+'</u>');
                $('#nom').val("test");
                $('#prenom').val("test");
                $('#email').val("test");
                $('#cni').val("test");
                $('#phone').val("test");
                $('#profession').val("Test");
                swal.fire("Oops...", 'Quelque chose a mal tourné avec Ajax', 'error');
            });
        }

        /* Permet de suopprimer chacun des 3 entitees avec la seule fonction*/
        function delSwal(id, type){
            var url = setUrl(type);
            
            swal.fire({
                title: 'Etes-vous sûre?',
                text: "Cette action est irréversible",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: "Non, Annuler",
                confirmButtonText: "Oui, Supprimer",
                showLoaderOnConfirm: true,

                preConfirm: function(){
                    return new Promise(function(resolve){
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: 'delete='+id,
                            dataType: 'json',
                        })
                        .done(function (reponse){
                            swal.fire( {
                                title : 'Supprimé',
                                text :  reponse.message,
                                icon : reponse.status,
                                timer: 1500,
                                allowEscapeKey : false,
                                showConfirmButton : false,
                                showCancelButton : false,
                            } );
                            listLocataires();
                            listProprio();
                            listBatiment();
                        })
                        .fail(function(reponse){
                            /* console.log(reponse.message); */
                            swal.fire("Oops...", 'Quelque chose a mal tourné avec Ajax', 'error');
                        });
                    });
                },
                allowOutsideClick: false
            });


            /* switch (type) {
                case "locataire":
                    alert("je suis le cas Locataire");
                    break;
                case "proprietaire":
                    alert("je suis le cas 2");
                    break;
                case "batiment":
                    alert("je suis le cas 3");
                    break;
            
                default:
                    break;
            } */
        }

        /* Permet de savoir dans quel url envoyer les données */
        function setUrl(type){
            var url;
            if (type == "locataire") 
                url = "controllers/locataireCtrl.php";
            if (type == "proprio") 
                url = "controllers/proprioCtrl.php";
            if (type == "batiment") 
                url = "controllers/buildingCtrl.php";

            return url;
        }

        /* Permet de charger la liste des client via Ajax */
        function listLocataires() {
            $('#content-table-loc').load('views/locataires/ContentLoc.php');
        }

        /* Permet de charger la liste des Proprietaires via Ajax */
        function listProprio() {
            $('#content-table-proprio').load('views/proprio/ContentProprio.php');
        }

        /* Permet de charger la liste des Batiment via Ajax */
        function listBatiment() {
            $('#content-table-bat').load('views/building/ContentBuilding.php');
        }

    </script>
    <!-- Fin FONCTIONS Js -->

    <!-- Custom Js -->
    <script src="public/Ui_Template/js/admin.js"></script>
    <script src="public/Ui_Template/js/pages/forms/advanced-form-elements.js"></script>
    <script src="public/Ui_Template/js/pages/index.js"></script>
    
    <!-- Demo Js -->
    <script src="public/Ui_Template/js/demo.js"></script>