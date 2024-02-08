<?php
include '../../../header.php';
?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajout d'un like</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/likes/create.php' ?>" method="post" enctype="multipart/form-data">
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
                    <label for="numMemb">Membre</label>
                    <select id="numMemb" name="numMemb" class="form-control" required>
                        <?php
                        $membres = sql_select('membre', 'numMemb, pseudoMemb, prenomMemb, nomMemb');
                        foreach ($membres as $membre) {
                            echo '<option value="' . $membre['numMemb'] . '">' . $membre['prenomMemb'] . ' ' . $membre['nomMemb'] . ' (' . $membre['pseudoMemb'] . ') </option>';
                        }
                        ?>
                    </select>
                    <label for="likeA">Like : </label>
                    <input id="no" name="likeA"  type="radio"  value="0" checked="checked"/>
                    <label for="no">non</label>
                    <input id="yes" name="likeA" type="radio"  value="1" />
                    <label for="yes">oui</label>
                </div>
                <br/>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>


