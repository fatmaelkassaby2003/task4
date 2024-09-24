<?php

function get_request_type()
{
    return $_SERVER['REQUEST_METHOD'];
}

function post_method()
{
    if(get_request_type()=="POST")
    {
        return true;
    }
    else 
    {
        return false;
    }
}


function reciveinput($value)
{
    trim(htmlentities(htmlspecialchars($value)));
}