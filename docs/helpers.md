# How to use the helpers.

**SimpleHtmlWork** has a few helpers to make somethings easier.

In the future we will add more helpers and this documentation file will be updated!

List of the helpers:
* Config
    * get
* Asset
    * file
    * cdn
* Sw
    * View
    * title
* Lang
    * text
    
### **Config helper.**

So let's say you want to get a value from the configuration file. And for this example we want to get the name of our application. You can use the below code:

```php
<?= Config::get('name') ?>
// Or you can use
<?= Config::get(APP_NAME) ?>
```

### **Asset helper.**

**Asset (file)**: 

So let's say you want to get an asset from you're **source/css** directory, and the file you want to get is **style.css**
First of all we need to set the correct code for that inside the `<head></head>` section of the code. That code will be:

```html
<link rel="stylesheet" type="text/css" href="">
```

Now that we have done that we need to add our helper to get the **style.css** file from the **source/css** directory be the following code:

```php
<link rel="stylesheet" type="text/css" href="<?= Asset::file('css/style.css') ?>">
```

Now te **style.css** will be loaded when you go to the page.

**Asset (cdn)**:

Now we will exactly the same thing as above only now we will get the file from the cdn of your website (if you have these). So for this example lets say we want the logo of your website from your cdn.
First of all we eed to set the correct code for that inside the place where we want the image to be displayed. That code will be:

```html
<img src="" class="" alt="Logo of my website">
```

Now that we have done that we need to add our helper to get the logo. So for this example the logo will be stored in our cdn like **assets/logos/logo.png**. So the code to get that will be:

```php
<img src="<?= Asset::cdn('assets/logos/logo.png') ?>" class="" alt="Logo of my website">
```

Now the logo will be showing when you go to the page.

### **Sw helper.**

**Sw (view)**:

In order to set a view to a route you need to create a view and a route. 
Please check [how to create a route](router.md) and [how to create a view](view.md) for that.

**Sw (title)**:

If you want to set a title to a page you can do that with our helper. First of all you need to set a title tag inside the `<head></head>` of your page.
So we will do that with the below code:

```html
<title></title>
```

Now that we have done that we will add our helper to set a title to the page. The **Sw title** needs 3 values.
So for example I have a route that is **about me**, and I want to display a title for that route I need to add the below code inside the title tag.

```php
// Example
<title><?= Sw::title('The name of my application', 'The separator I want to use.', 'The title of my page.')?></title>

// Real code
<title><?= Sw::title(Config::get('name'), '-', 'About me')?></title>

// You can also use a html shortcode like &mdash; as a separator.
<title><?= Sw::title(Config::get('name'), '&mdash;', 'About me')?></title>
```

If you're using multiple languages in your application you can also use the **Lang text** helper. For example like:

```php
<title><?= Sw::title(Config::get('name'), '-', Lang::text('about_me_title'))?></title>
```

### **Lang helper**

So if you are having a multiple language application you can get languages variables with the below code:

```php
<?= Lang::text('key-here')?>
```

Please check [how to use the languages](languages.md) for that.
