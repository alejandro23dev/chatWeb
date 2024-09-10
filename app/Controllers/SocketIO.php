<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class SocketIO extends Controller
{
    public function index()
    {
        exec('node ./server/server.mjs');
    }
}