<?php 
namespace Core;
class View {

     /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to

    /**
     * Render a view file
     * @param string $view the view file
     * @return void
     */
   
    
    public static function bindView($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {


            $loader = new \Twig\Loader\FilesystemLoader('../App/Views');

            $twig = new \Twig\Environment($loader, [
                
            ]);
        }

       
        echo $twig->render($template, $args);
    }
  

}