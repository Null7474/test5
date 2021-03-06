<?php
$title = "Главная страница";
require_once __DIR__."/../parts/header.php"; ?>

<h2>Посты</h2>
<div class="container">
    <a class="col-mb-4 btn btn-success mt-5 mb-3 p-3" href="/insertpost">
        Добавить новую запись
    </a>
</div>
<div class="row">
    <?php
    foreach ($posts as $row): ?>
        <div class="card mt-3 p-2 col-md-4 col-sm-6" >

            <div class="card-body">
                <h5 class="card-title"><?=$row->title ?></h5>
                <p class="card-text">
                    <?=date_format(new DateTime($row->dataPublication),'d.m.Y')?></p>
                <a class="btn btn-outline-primary p-2" style="width: 100%;"  href="/deletepost.php?id=<?=$row->id;?>">Удалить</a>
                <a class="btn btn-info p-2" style="width: 100%;"  href="/App/db/posts/updatePost.php?id=<?=$row->id;?>">Редактировать</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php require_once __DIR__."/../parts/footer.php"?>
