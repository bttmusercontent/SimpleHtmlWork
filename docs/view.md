# How to add a view

Open `source/views` directory.

Now we are in there we will add a file named **simple.php**. And we will add te below code to test if its works.

```php
echo 'Simple view is working!';
```

Now you have added a view, but it is not linked to any route. So you need to add this view to a route.
So open `router/routes.php` and add a route with the below code:

```php
$router->set('/simple', function () {
    Sw::View('simple');
});
```

So if you will go to domain.com/simple it will show: **Simple view is working!**

Now you successfully created and added a view!
If you don't know how to create a route then please check [this](router.md) page.
