# 2F - Fast Framework
Is a MVC php framework developed with the mindset of developing web application very fast, All you need is composer installed and you're aready to go.
## Here is how to create application using 2F
- Install  [composer](https://getcomposer.org/download)
- Run this `composer create-project tanzaverse/2f` from command line interface
- Change your sever configuration file from 

- `DocumentRoot "/opt/lampp/htdocs/"` to `DocumentRoot "/opt/lamp/htdocs/my_project_name/public"`
-  And put your project inside server's public director example for xampp users it will be `/opt/lamp/htdocs`
-  Then just type your server's address like `http://localhost/` and you are done.

## Debugging errors duing development

Move to `App\Config.php` and change `const SHOW_ERRORS=false;` to `const SHOW_ERRORS=true;`

## Creating or adding routes
- Create class inside `App/Controllers/Your_classname` and create function as shown below
 ### Example 
 ```php 
<?php 
namespace App\Controllers; use App\Models\HomeModels;
use Core\View;
class Home extends \Core\Controller {
    function about(){
       
    }

}
?> 
```

- Create file inside `App/Views/Your_folder_name/_your_filename`
- Update function you created by adding this line of code 
```php 
 View::bindView('Your_folder_name/_your_filename.html',[
            
        ]);
 ```
## Create or adding model to interact with database and send data to controller
- Create class inside `App/Models/Your_model_name.php` 

Example 
```php
<?php 
namespace App\Models;
use PDO;
class HomeModels extends \Core\Model{
 public static function getAll()
 {
    $conn=static::getDB();// this is connection from database
 }
}
?>
```
## Connecting to database 
To connect to database all you need is to change App/Confing.php file to you're database details
Example 

```php

<?php
namespace App;

class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'clms';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    const SHOW_ERRORS=false;
}
?>
```

## To see the route you created
- Just type `you are server's name followed by classname and function name ` in browser's search bar

Example if you created class named as `About` and function as `index` the your route will be `About/index`
`http://localhost/About/index`
