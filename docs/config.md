# How to add custom configurations

So let's say, you want to add custom variables to your applications configuration file.
Let's say for this documentation you want add a variable for an e-mail address. Then there are 2 ways you can do this.

**1.** Add this to the `config/app.php` <br>
**2.** Create a separate configuration file. <br>

Let's discuss both ways.

### **Way 1**

You need to add a line of code that will be this:

```php
define('key', 'value');
```

Let's say our e-mail address is **shw@exmaple.com**, and our key will be **APP_MAIL** we need to add the code like:

```php
define('APP_MAIL', 'shw@example.com');
```

Now that we have done that we need to go to the file **SimpleHtmlWork/helpers/Config.php**, and we need to add that line of code to the array.
So let's do that now. The array by default is:

```php
$str = array(
    'name' => APP_NAME,
    'lang' => APP_LANG,
    'url' => APP_URL,
    'cdn' => APP_CDN,
);
```

The only thing we need to do is add our custom configuration key to that array. So we will do that like:

```php
$str = array(
    'name' => APP_NAME,
    'lang' => APP_LANG,
    'url' => APP_URL,
    'cdn' => APP_CDN,
    // Below we will add the custom configuration variable.
    'mail' => APP_MAIL
);
```

Now that we have done that we can get the mail value of our application with the **Config helper**. For that please check [this](helpers.md) documentation.

### **Way 2**

If you have a lot of these custom configuration, and you want to keep them all separate you can also create a new file inside the config directory.
Let say we have a lot of variables for our application e-mail we will add a new file inside the **config** directory and name the file **mail.php**

Now that we have created the **mail.php** configuration file you need to add a code with a key and a value. So let's say we have 3 e-mail addresses for our application then we also will have 3 keys and 3 values. For example like:
 
* Email one
    * **MAIL_INFO**
    * **info_shw@exmaple.com**
* Email two
    * **MAIL_ABUSE**
    * **abuse_shw@exmaple.com**
* Email three
    * **MAIL_PAYMENTS**
    * **pay_shw@exmaple.com**

We also need to add this inside our **mail.php** file. With the below code:

```php
define('MAIL_INFO', 'info_shw@exmaple.com');
define('MAIL_ABUSE', 'abuse_shw@exmaple.com');
define('MAIL_PAYMENTS', 'pay_shw@exmaple.com');
```


Now that we have done that we need to go to the file **SimpleHtmlWork/helpers/Config.php**, and we need to add that lines of code to the array.
So let's do that now. The array by default is:

```php
$str = array(
    'name' => APP_NAME,
    'lang' => APP_LANG,
    'url' => APP_URL,
    'cdn' => APP_CDN,
);
```

The only thing we need to do is add our custom configuration keys to that array. So we will do that like:

```php
$str = array(
    'name' => APP_NAME,
    'lang' => APP_LANG,
    'url' => APP_URL,
    'cdn' => APP_CDN,
    // Below we will add the custom configuration variables.
    'info_mail' => MAIL_INFO,
    'abuse_mail' => MAIL_ABUSE,
    'pay_mail' => MAIL_PAYMENTS
);
```

Now that we have done that we can get the mail value of our application with the **Config helper**. For that please check [this](helpers.md) documentation.
