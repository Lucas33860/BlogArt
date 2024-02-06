<?php
include '../../../header.php'; // contains the header and call to config.php

$keywords = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all keywords$keywords in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mot-Clés</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Mots Clés</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($keywords as $keyword){ ?>
                        <tr>
                            <td><?php echo isset($keyword['numMotCle']) ? $keyword['numMotCle'] : ''; ?></td>
                            <td><?php echo isset($keyword['libMotCle']) ? $keyword['libMotCle'] : ''; ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo isset($keyword['numMotCle']) ? $keyword['numMotCle'] : ''; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo isset($keyword['numMotCle']) ? $keyword['numMotCle'] : ''; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>