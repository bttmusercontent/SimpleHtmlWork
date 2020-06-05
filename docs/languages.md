# How to use the languages

If you want to add custom languages to your application you can do that by this below steps.

**Step 1.** <br>

Go to `config/app.php` and change the **APP_LANG** to the name of the file. 
By default, it is set to **en**, so the system will get the `source/lang/en.php` file.<br>

**Step 2.** <br>

Okay let's say for this example we want to set the language to Dutch (Netherlands) we need to change the value of **APP_LANG** form *en* to *nl*
Then we need to create a file inside `source/lang/` so we will create a file inside that folder named: **nl.php**.

**Step 3.** <br>

Now that we have done that we will open our **nl.php** file and add below code at the bottom of the file:

```php
/*
 * Do not delete this!
*/
return $lang;
```

That code needs to be at the bottom of the language file in order to work.

**Step 4.** <br>

Now we have done all the above steps so new we need to set values inside our **nl.php** file. So let's do that now.
For example the home page has a text that says: **Thank you for using SimpleHtmlWork**. 

Now we want that to be displayed in Dutch.
So we need to add a code. But first we need to check what is the key of that text. So we will open the **en.php** file and check it.
The key of that text is **welcomeText** so now inside our **nl.php** we will add the below code:

```php
// For this example I actually wrote the text in Dutch.
$lang['welcomeText'] = "Dankjewel voor het gebruiken van ".APP_NAME."";
```

You can use configuration variables inside the text by simply adding `".[configuration-key-here]."`

# Create own keys for language.

If you want to use own keys for language files you can simply add a line to the correct language file like:

```php
$lang['key-here'] = "Text here";
```

You can call your text with the following [helper](helpers.md):
```php
<?= Lang::text('key-here') ?>
```

And then it will display the text that belongs to the key.
