<?php
require_once('vendor/autoload.php');
class Inventario extends Illuminate\Database\Eloquent\Model {
    protected $table = 'inventario';
    public $timestamps = false;
}
