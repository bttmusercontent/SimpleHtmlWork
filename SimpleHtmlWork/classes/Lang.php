<?php
/*
 * Copyright (c) 2020 SimpleHtmlWork
 * https://github.com/Julianvschijndel/SimpleHtmlWork
 * --------------------------------------------------
 * SimpleHtmlWork. ~ Version: 1
 * --------------------------------------------
 *
 * Please do not edit this file if you don't know what you are doing.
 * I will not give support if you edit this file and SimpleHtmlWork is not
 * working anymore. If you know what you're doing and then you think
 * you can or actually can improve my code then please make a pull request
 * and I will look into it.
 *
*/

class Lang
{
    /**
     * text
     *
     * @param string $text
     * @return string
    */
    public static function text($text) {
        if(file_exists('source/lang/'.APP_LANG.'.php')) {
            $lang = include 'source/lang/'.APP_LANG.'.php';
            return $lang[$text];
        } else {
            ErrorHandler::languageFileNotFound();
        }
    }
}
