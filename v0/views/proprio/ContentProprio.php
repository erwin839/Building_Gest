
<?php
    require '../../models/proprioBD.php';

    $proprios = getProprios();

?>

<div class="row text-center table-responsive">
    <table class="table table-hover nowrap table-condensed table-stripped" id="tableLoc">
        <thead>
            <tr>
                <!-- <th data-priority="10" class="text-center">N</th> -->
                <th data-priority="1" class="text-center">Nom</th>
                <th data-priority="2" class="text-center">Prenom</th>
                <th data-priority="3" class="text-center">Adresse</th>
                <!-- <th data-priority="5" class="text-center">Email</th> -->
                <th data-priority="6" class="text-center">Téléphone</th>
                <!-- <th data-priority="7" class="text-center">Cni</th> -->
                <!-- <th data-priority="8" class="text-center">Nombre Immeubles</th> -->
                <!-- <th data-priority="9" class="text-center">Prefession</th> -->
                <th data-priority="4" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($proprios as $pro) : ?>
            <tr>
                <!-- <td> <= $pro['idP'] ?> </td> -->
                <td> <?= $pro['nomP'] ?> </td>
                <td> <?= $pro['prenomP'] ?> </td>
                <td> <?= $pro['adresseP'] ?> </td>
                <!-- <td>  //$pro['emailP'] ?> </td> -->
                <td> <?= $pro['phoneP'] ?> </td>
                <!-- <td>  //$pro['cniP'] ?> </td> -->
                <!-- <td>  // $pro['nbIm'] 00 ?> </td> -->
                <!-- <td>  //$pro['professionP'] ?> </td> -->
                <td>
                    <a class="btn btn-sm btn-warning" id="modifier" data-type="proprio" data-id="<?= $pro['idP'] ?>" data-toggle="tooltip" data-placement="top" title="Modifier"> <i class="fa fa-edit"></i> </a>
                    <a class="btn btn-sm btn-primary"  id="seeMore" data-type="proprio" data-id="<?= $pro['idP'] ?>" data-toggle="tooltip" data-placement="top" title="Voir plus"> <i class="fa fa-eye"></i> </a>
                    <a class="btn btn-sm btn-danger" id="delete" data-type="proprio" data-id="<?= $pro['idP'] ?>" data-toggle="tooltip" data-placement="top" title="Supprimer"> <i class="fa fa-trash"></i> </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<script>

        $('#tableLoc').DataTable({  
            responsive: true,
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
    
</script>