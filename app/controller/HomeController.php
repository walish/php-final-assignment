<?php

namespace App\Controller;

use Cu\Controller\Controller;

class HomeController extends Controller
{

    public function index($req, $res)
    {
        $res->contentType = 'text/html';
        try {
            $res->render('index.php');
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function search($req, $res)
    {
        $res->contentType = 'text/html';
        try {
            $res->render('search.php');
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
 
}
