<?php

namespace DAO;

class MatcchDAO
{
    private $db;

    public function __construct($db){
        $this ->db = $db;
    }
}