<?php
include '../../../header.php';

?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajout de Commentaires</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="numArt">Article</label>
                    <select id="numArt" name="numArt" class="form-control" autofocus="autofocus" required>
                        <?php
                        $articles = sql_select('article', 'numArt, libTitrArt');
                        foreach ($articles as $article) {
                            echo '<option value="' . $article['numArt'] . '">' . $article['libTitrArt'] . '</option>';
                        }
                        ?>
                    </select>
	
                    <label for="dtCreaCom">Date création</label>
                    <input id="dtCreaCom" name="dtCreaCom" class="form-control" type="date" required />

                    <label for="libCom">Commentaire</label>
                    <input id="libCom" name="libCom" class="form-control" type="text" required />

                    <label for="numMemb">Membre</label>
                    <select id="numMemb" name="numMemb" class="form-control" required>
                        <?php
                        $membres = sql_select('membre', 'numMemb, pseudoMemb, prenomMemb, nomMemb');
                        foreach ($membres as $membre) {
                            echo '<option value="' . $membre['numMemb'] . '">' . $membre['prenomMemb'] . ' ' . $membre['nomMemb'] . ' (' . $membre['pseudoMemb'] . ') </option>';
                        }
                        ?>
                    </select>
                </div>
                <br/>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

