<?php
include '../../../header.php'; // contains the header and call to config.php

$comments = sql_select("comment INNER JOIN article ON comment.numArt = article.numArt INNER JOIN membre ON comment.numMemb = membre.numMemb", "article.libTitrArt, comment.numCom, dtCreaCom, libCom, dtModCom, attModOK, notifComKOAff, dtDelLogCom, delLogiq, comment.numArt, comment.numMemb, membre.pseudoMemb", null, "comment.numCom ASC");?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date Création</th>
                        <th>Commentaires</th>
                        <th>Derniere modification</th>
                        <th>Modificaion approuvée</th>
                        <th>Notification KO</th>
                        <th>Date Refus</th>
                        <th>Commentaires non afficher</th>
                        <th>Article (numéro)</th>
                        <th>Membre (numéro)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($comments as $comment){ ?>
                        <tr>
                        <td><?php echo isset($comment['numCom']) ? $comment['numCom'] : ''; ?></td>
                            <td><?php echo isset($comment['dtCreaCom']) ? $comment['dtCreaCom'] : ''; ?></td>
                            <td><?php echo isset($comment['libCom']) ? $comment['libCom'] : ''; ?></td>
                            <td><?php echo isset($comment['dtModCom']) ? $comment['dtModCom'] : ''; ?></td>
                            <td><?php echo isset($comment['attModOK']) ? $comment['attModOK'] : ''; ?></td>
                            <td><?php echo isset($comment['notifComKOAff']) ? $comment['notifComKOAff'] : ''; ?></td>
                            <td><?php echo isset($comment['dtDelLogCom']) ? $comment['dtDelLogCom'] : ''; ?></td>
                            <td><?php echo isset($comment['delLogiq']) ? $comment['delLogiq'] : ''; ?></td>
                            <td><?php echo isset($comment['libTitrArt']) ? $comment['libTitrArt'] : ''; ?> (<?php echo isset($comment['numArt']) ? $comment['numArt'] : ''; ?>)</td>
                            <td><?php echo isset($comment['pseudoMemb']) ? $comment['pseudoMemb'] : ''; ?>(<?php echo isset($comment['numMemb']) ? $comment['numMemb'] : ''; ?>)</td>
                            <td>
                                <a href="edit.php?numCom=<?php echo isset($comment['numCom']) ? $comment['numCom'] : ''; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo isset($comment['numCom']) ? $comment['numCom'] : ''; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>