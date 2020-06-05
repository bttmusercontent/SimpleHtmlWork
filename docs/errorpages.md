# How to add custom error pages

**SimpleHtmlWork** has 2 types of error pages:

* 404 (not found)
* Lang (when the language your application is using is not found.)

If you want to have custom error pages you need to add a directory named **errors** inside **source/views/** and create the files:

* 404.php 
    * source/views/errors/404.php
* lang.php
    * source/views/errors/lang.php

If you have done this it will show your error pages instead of our error pages.
