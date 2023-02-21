<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $db      = \Config\Database::connect();
        // $builder = $db->table('user');
    }
    public function index()
    {
        return view('welcome_message');
    }

    public function select_data_by_array()
    {
        $db      = \Config\Database::connect();
        $query = $db->query('SELECT * FROM user')->getResultArray();
        foreach ($query as $dt) {
            echo $dt['nik'] . "<br>";
        }
    }

    public function form()
    {
        return view('form');
    }
}
