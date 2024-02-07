<?php
include '../../../header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajout d'article</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="dtCreaArt">Date création</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="date" autofocus="autofocus" required />

                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" name="libChapoArt" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="libAccrochArt">Accroche Article 1 </label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" name="parag1Art" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="libSsTitr1Art">Sous-Titre 1</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" name="parag2Art" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="libSsTitr2Art">Sous-Titre 2</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" name="parag3Art" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" name="libConclArt" class="form-control" type="text" autofocus="autofocus" required />

                    <label for="urlPhotArt">Nom Photo</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" autofocus="autofocus" type="file" name="image" accept=".jpg, .jpeg, .png, .gif, .webp" required />

                    <label for="numThem">Thématique</label>
                    <select id="numThem" name="numThem" class="form-control" required>
                        <?php
                        $thematiques = sql_select('thematique', 'numThem, libThem');
                        foreach ($thematiques as $thematique) {
                            echo '<option value="' . $thematique['numThem'] . '">' . $thematique['libThem'] . '</option>';
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
