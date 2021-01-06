<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">

            <?php if ($this->session->flashdata("success")) :?>       
            <p class = "alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if ($this->session->flashdata("danger")) :?> 
            <p class = "alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>