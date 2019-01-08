<?php
/**
 * Created by PhpStorm.
 * User: vcyber
 * Date: 2019/1/7
 * Time: 16:51
 */

namespace App\Http\Controllers\Front;

class IndexController  extends CommonController
{
    public function __construct()
    {
         echo "Front!";
    }

    public function index(){
        return 'Front Index Action!';
    }
    public function getArticleList(){
        echo "List";

    }

}