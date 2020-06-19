<?php

spl_autoload_register(function ($class){
    if (file_exists("Libraries/Core".$class.".php"))
    {
        require_once (LIBS.'Core/'.$class.".php");
    }
});