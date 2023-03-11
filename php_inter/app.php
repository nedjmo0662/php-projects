<?php

class App
{
    public $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
}