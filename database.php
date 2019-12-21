<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . "/vendor/autoload.php";

$capsule = new Capsule;

$capsule->addConnection(DATABASE_CONFIG);

$capsule->setAsGlobal();

$capsule->bootEloquent();

$schema = $capsule->schema();

//Tabela de tarefas
$schema->dropIfExists('tasks');

$schema->create('tasks', function ($table){
    $table->increments('id');
    $table->string('title');
    $table->text('description');
    $table->timestamps();
});