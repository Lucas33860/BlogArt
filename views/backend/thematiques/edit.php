<?php
include '../../../header.php';

if(isset($_GET['numThem'])){
    $numThem = $_GET['numThem'];
    $libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Statut</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/thematiques/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numThem">ID</label>
                    <input id="numThem" name="numThem" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <label for="libThem">Nom du statut</label>
                    <input id="libThem" name="libThem" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br/>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer Update</button>
                </div>
            </form>
        </div>
    </div>
</div>