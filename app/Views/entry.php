<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- Conteúdo personalizado -->
<div class="container py-5">

    <div class="row">
        <div class="col-md-7 col-12" style="overflow: auto; height: 800px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">

                            <h1 class="pt-1 m-1 ms-2 display-2 texto-azul"><strong style="padding-right: 3px"><?= $id ?></strong> <a title='Download PDB' href='<?= base_url() ?>public/pdb/structures/complex/<?= "" ?>.pdb'><i class="fas fa-arrow-alt-circle-down"></i></a></h1>

                            <div style="margin: 10px 0 30px 0">
                                <a target="_blank" style='text-decoration:none' title="Search in PDB" href="https://www.rcsb.org/structure/<?= "" ?>">
                                    <span class="badge bg-dark text-light ms-2">PDB</span>
                                </a>

                                <a target="_blank" style='text-decoration:none' title="Search in UniProt" href="https://www.uniprot.org/uniprot/?query=<?= "" ?>+database:pdb">
                                    <span class="badge bg-info">UniProt</span>
                                </a>

                                <a target="_blank" style='text-decoration:none' title="Search in PubMed" href="https://www.ncbi.nlm.nih.gov/pubmed/?term=<?= "" ?>">
                                    <span class="badge bg-warning">PubMed</span>
                                </a>


                            </div>

                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td><?= $info[1] ?></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td><?= $info[2] ?></td>
                                </tr>

                                <tr>
                                    <th>RNA length</th>
                                    <td><?= $info[3] ?></td>
                                </tr>

                                <tr>
                                    <th>Protein length</th>
                                    <td><?= $info[4] ?></td>
                                </tr>

                                <tr>
                                    <th>Number of contacts</th>
                                    <td><?= $info[5] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="texto-azul m-2"><strong>RNA</strong></h4>
                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>Description</th>
                                    <td>
                                        <?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Organism</th>
                                    <td>
                                        <em><?= "" ?></em>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Chain</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Length</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Binding Area (&#8491;<sup>2</sup>)</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Hydrophobic (% a.a.)</th>
                                    <td>
                                        <div class="progress">

                                            <div class="progress-bar" role="progressbar" style="width: <?= "" ?>%;"><?= "" ?>%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Molecular Weight</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Aromaticity</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Instability</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Isoelectric Point</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Sequence</th>
                                    <td style="width: 200px; display: inline-block; word-wrap:break-word;"><strong>
                                        </strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="texto-azul m-2"><strong>Protein</strong></h4>
                            <table class="table table-condensed table-striped">
                                <!--<tr>
                                    <th>PDB ID</th>
                                    <td><a target="_blank" href="https://www.rcsb.org/structure/<?= "" ?>"><?= "" ?></a></td>
                                </tr>-->
                                <tr>
                                    <th>Description</th>
                                    <!-- <td style="width: 450px; display: inline-block; word-wrap:break-word;"> -->
                                    <td>
                                        <?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Organism</th>
                                    <!-- <td style="width: 450px; display: inline-block; word-wrap:break-word;"> -->
                                    <td>
                                        <em><?= "" ?></em>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Chain</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Length</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Binding Area (&#8491;<sup>2</sup>)</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Molecular Weight</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Aromaticity</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Instability</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Isoelectric Point</th>
                                    <td><?= "" ?></td>
                                </tr>
                                <tr>
                                    <th>Sequence</th>
                                    <td style="width: 450px; display: inline-block; word-wrap:break-word;"><strong>
                                        </strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-md-5 col-12">
            <input id="pdb" value="</?=''?>" hidden></input>
            <input id="peptide_chain" value="</?=''?>" hidden></input>
            <input id="receptor_chain" value="</?=''?>" hidden></input>

            <div id="3DmolViewerComplex" style="min-height: 800px; margin:10px 0; width: 100%; position: relative;"></div>
        </div>
    </div>

</div>
<!-- / FIM Conteúdo personalizado -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
$(function() {
let BASE_URL = ""; 
var PDB_DIR = BASE_URL + "/data/structures/<?= $id ?>/"

// GLOBAL VAR
viewer = $3Dmol.createViewer("3DmolViewerComplex", {
    defaultcolors : $3Dmol.rasmolElementColors
});
viewer.setBackgroundColor(0xeeeeee);

var id_complex = "<?= $id ?>";

//codigo herdado do betagdb
var atomcallback = function(atom, viewer) {
    if (atom.clickLabel === undefined
            || !atom.clickLabel instanceof $3Dmol.Label) {
        atom.clickLabel = viewer.addLabel(atom.resn + " " + atom.resi + " ("+ atom.elem + ")", {
            fontSize : 10,
            position : {
                x : atom.x,
                y : atom.y,
                z : atom.z
            },
            backgroundColor: "black"
        });
        atom.clicked = true;
    }

    //toggle label style
    else {

        if (atom.clicked) {
            var newstyle = atom.clickLabel.getStyle();
            newstyle.backgroundColor = 0x66ccff;

            viewer.setLabelStyle(atom.clickLabel, newstyle);
            atom.clicked = !atom.clicked;
        }
        else {
            viewer.removeLabel(atom.clickLabel);
            delete atom.clickLabel;
            atom.clicked = false;
        }

    }
};

$.get(PDB_DIR + id_complex + ".pdb", function(data) {
    model = viewer.addModel(data, 'pdb', {keepH:true});
    viewer.setStyle({chain: receptor_chain}, {cartoon: {color: 'spectrum'}});
    
    /* colore por estrutura secundaria */
    var m = viewer.getModel();
    viewer.setStyle({},{cartoon:{}}); /* Cartoon */

    viewer.setStyle(
        {},
        {cartoon:{color:'spectrum'}});

    viewer.addSurface(
        $3Dmol.SurfaceType.VDW, 
        // {opacity:0.7, volscheme: new $3Dmol.Gradient.RWB(-10,10)},
        {'opacity':0.6,'color':'green'},
        {chain: receptor_chain}
    );

    viewer.setStyle({},{cartoon:{color:'white'}, line:{}},{chain: receptor_chain}); /* lines */


    /* Name of the atoms */
    atoms = m.selectedAtoms({});
    for ( var i in atoms) {
        var atom = atoms[i];
        atom.clickable = true;
        atom.callback = atomcallback;
    }

    viewer.setStyle({chain: peptide_chain}, {stick: {colorscheme:'yellowCarbon'}});
    viewer.addSurface(
        $3Dmol.SurfaceType.VDW, 
        {'opacity':0.6,'color':'orange'},
        {chain: peptide_chain}
    );
      viewer.zoomTo();      
    viewer.render();
})


}); 

</script>

<?= $this->endSection() ?>
