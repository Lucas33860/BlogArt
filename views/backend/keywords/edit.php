<?php
include '../../../header.php';

if(isset($_GET['numMotCle'])){
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit mot clé</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/keywords/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMotCle">ID</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <label for="libMotCle">Nom du statut</label>
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br/>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer mot clé</button>
                </div>
            </form>
        </div>
    </div>
</div>