# How to create connection with database

**SimpleHtmlWork** can connect with the database since version **v1.1**

To connect to the database you need a database + you need the change the configuration file.

1. Go to 'config/database.php' and change the configuration to your needs. <br>
2. Upload `shw.sql` into your database. This file is located in the root of this project. <br>
3. Go to a random view and enter the following code: <br>
```php
<?php
    // Get something from database.
    $app = DB::query('SELECT * FROM application');
    $app->execute();
    if($app->rowCount() > 0) {
        while ($shw = $app->fetch()) {
            echo $shw['version'].'<br>';
            echo $shw['creator'].'<br>';
            echo "<a href='".$shw['github_link']."'>Check on GitHub!</a>";
        }
    } else {
        echo 'Oops.. Something whent wrong.';
    }
?>
```
4. Now you have a success full connection to the database!
