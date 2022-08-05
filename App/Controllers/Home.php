<?php 
namespace App\Controllers;
use App\Models\HomeModels;
use Core\View;

class Home extends \Core\Controller{
    /**
     * Show the index page
     * @return void
     */

     public function indexAction() 
     {
     
       
        View::bindView("Home/index.html",[
           "data"=>"Message from home"
       ]);

       
     }

  protected function before()
  {

    //   return false;
  }
  protected function after(){
   
    //  return false;
  }
}
      