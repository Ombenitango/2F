<?php 
namespace App\Controllers;
use App\Models\HomeModels;
use Core\View;
class Home extends \Core\Controller {
    function index(){
        View::bindView('Home/index.html',[
            
        ]);
    }

}


?>