<?php
include '../../../header.php'; // contains the header and call to config.php

$articles = sql_select("ARTICLE INNER JOIN motclearticle ON article.numArt = motclearticle.numArt
INNER JOIN motcle ON motclearticle.numMotCle = motcle.numMotCle
INNER JOIN thematique ON article.numThem = thematique.numThem
GROUP BY article.numArt;
", "  article.libTitrArt  ,article.numArt, article.dtCreaArt, article.libChapoArt, article.libAccrochArt, GROUP_CONCAT(motcle.libMotCle) AS mots_cle, thematique.libThem");?>




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Articles</th>
                        <th>Actions</th>
                        <th>Titre Article</th>
                        <th>Chapô</th>
                        <th>Titre 1</th>
                        <th>Paragraphe1</th>
                        <th>Titre 2</th>
                        <th>Paragraphe2</th>
                        <th>Titre3</th>
                        <th>Paragraphe3</th>
                        <th>Conclusion</th>
                        <th>URL Photo</th>
                        <th>Thématique</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){ ?>
                        <tr>
                            <td><?php echo isset($article['numArt']) ? $article['numArt'] : ''; ?></td>
                            <td><?php echo isset($article['dtCreaArt']) ? $article['dtCreaArt'] : ''; ?></td>
                            <td><?php echo isset($article['dtMajArt']) ? $article['dtMajArt'] : ''; ?></td>
                            <td><?php echo isset($article['libTitrArt']) ? $article['libTitrArt'] : ''; ?></td>
                            <td><?php echo isset($article['libChapoArt']) ? $article['libChapoArt'] : ''; ?></td>
                            <td><?php echo isset($article['parag1Art']) ? $article['parag1Art'] : ''; ?></td>
                            <td><?php echo isset($article['libSs1Titr1Art']) ? $article['libSs1Titr1Art'] : ''; ?></td>
                            <td><?php echo isset($article['parag2Art']) ? $article['parag2Art'] : ''; ?></td>
                            <td><?php echo isset($article['libSs2Titr2Art']) ? $article['libSs2Titr2Art'] : ''; ?></td>
                            <td><?php echo isset($article['parag3Art']) ? $article['parag3Art'] : ''; ?></td>
                            <td><?php echo isset($article['libSs3Titr3Art']) ? $article['libSs3Titr3Art'] : ''; ?></td>
                            <td><?php echo isset($article['libConclArt']) ? $article['libConclArt'] : ''; ?></td>
                            <td><?php echo isset($article['urlPhotArt']) ? $article['urlPhotArt'] : ''; ?></td>
                            <td><?php echo isset($article['libThem']) ? $article['libThem'] : ''; ?></td>
                       
                            <td>
                                <a href="edit.php?numArt=<?php echo isset($article['numArt']) ? $article['numArt'] : ''; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo isset($b['numArt']) ? $article['numArt'] : ''; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>