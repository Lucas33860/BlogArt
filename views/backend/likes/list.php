<?php
include '../../../header.php'; // contains the header and call to config.php

$likes = sql_select("likeart INNER JOIN article ON likeart.numArt = article.numArt INNER JOIN membre ON likeart.numMemb = membre.numMemb", "ROW_NUMBER() OVER() AS id, likeA, article.libTitrArt,  likeart.numArt, likeart.numMemb, membre.pseudoMemb", null, null);?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Likes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Membre (numéro)</th>
                        <th>Article (numéro)</th>
                        <th>Like</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($likes as $like){ ?>
                        <tr>
                        <td><?php echo isset($like['id']) ? $like['id'] : ''; ?></td>
                            <td><?php echo isset($like['pseudoMemb']) ? $like['pseudoMemb'] : ''; ?>(<?php echo isset($like['numMemb']) ? $like['numMemb'] : ''; ?>)</td>
                            <td><?php echo isset($like['libTitrArt']) ? $like['libTitrArt'] : ''; ?> (<?php echo isset($like['numArt']) ? $like['numArt'] : ''; ?>)</td>
                            <td><?php echo isset($like['likeA']) ? $like['likeA'] : ''; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo isset($like['id']) ? $like['id'] : ''; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?php echo isset($like['id']) ? $like['id'] : ''; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
