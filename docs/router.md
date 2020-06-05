# How to add a route

Open `router/routes.php`<br>

Okay so when you opened the `routes.php` you can see that there are 3 standard routes that I created for development purposes.
Those routes are: 

```php
$router->set('/', function (){
    Sw::View('index');
});

$router->set('/about', function (){
    Sw::View('about');
});

$router->set('/contact', function (){
    Sw::View('contact');
});
```

As you can see we set a route like `$router->set('/route', function(){ [view-method-here] })`

So for example if we want to create a route with the route **information** we need to do this.

```php
$router->set('/information', function () {

});
```

But we also need a view to display to the visitor. So we also need to create a view. 
So we will go to `source/views/` and will create a view with the name **info**.
Please be aware that the file needs to be a PHP file or else you cannot use the helpers and the view will not work!
So we will create a **info.php** file and we will set below code inside that file:

```php
echo 'Information view';
```

Now we need to go back to our `routes.php` so we can add the view to our route. Now we will add the view to the route. So our code will now be this:

```php
$router->set('/information', function () {
    Sw::View('info');
});
```

Now you successfully created a route.

