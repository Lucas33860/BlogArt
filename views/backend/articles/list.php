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
                        <th>Date Création</th>
                        <th>Titre Article</th>
                        <th>Chapô</th>
                        <th>Thématique</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){ ?>
                        <tr>
                            <td><?php echo isset($article['numArt']) ? $article['numArt'] : ''; ?></td>
                            <td><?php echo isset($article['dtCreaArt']) ? $article['dtCreaArt'] : ''; ?></td>
                            <td><?php echo isset($article['libTitrArt']) ? $article['libTitrArt'] : ''; ?></td>
                            <td><?php echo isset($article['libChapoArt']) ? $article['libChapoArt'] : ''; ?></td>
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