<?php $v->layout("_theme"); ?>

<?php foreach($tasks as $task): ?>
    <div class="card">
        <div class="card-header"><?= $task->title; ?></div>
        <div class="card-body">
            <p class="card-text text-justify">
                <?= $task->description; ?>
            </p>
        </div>
        <div class="card-footer p-0">
            <a class="btn btn-dark btn-block text-light" href="/remove">REMOVER</a>
        </div>
    </div>
<?php endforeach; ?>