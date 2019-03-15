<?php
/**
 * Created by PhpStorm.
 * User: hynet
 * Date: 2018/12/28
 * Time: 13:57
 */

<html>
<{include "public/header.tpl"}><br>
    <head>
        <title><{$title}></title>
    </head>
    <body>
        <{$var}><br>
        <{$var}><br>
        ________________________________________<br>
        <{$var|mystyle:20:red}><br>

        <{html_select_date}><br>
        <{html_select_time}><br>

    </body>
</html>
<{include "public/foot.tpl"}><br>