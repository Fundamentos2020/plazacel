<?php
require_once('vendor/autoload.php');
class Usuario extends Illuminate\Database\Eloquent\Model {
    protected $table = 'usuarios';
    public $timestamps = false;
}
