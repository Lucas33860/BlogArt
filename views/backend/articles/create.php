<?php
include '../../../header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajout d'article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numArt">Num Article</label>
                    <input id="numArt" name="numArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="dtCreaArt">Date création</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="dtMajArt">Date MAJ</label>
                    <input id="dtMajArt" name="dtMajArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" name="libChapoArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libSs1Titr1Art">Titre 1</label>
                    <input id="libSs1Titr1Art" name="libSs1Titr1Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" name="parag1Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libSs2Titr2Art">Titre 2</label>
                    <input id="libSs2Titr2Art" name="libSs1Titr1Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" name="parag2Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libSs3Titr3Art">Titre 3</label>
                    <input id="libSs3Titr3Art" name="libSs1Titr1Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" name="parag2Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" name="libConclArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="urlPhotArt">URL Photo</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="numThem">Thématique</label>
                    <input id="numThem" name="numThem" class="form-control" type="text" autofocus="autofocus" />

                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
