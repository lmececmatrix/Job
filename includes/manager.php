<?php

function redirect($page)
{
    header("Location : $page");
    exit();
}

function isCookie()
{
    setcookie('test', '', time() + (86400 * 30), '/');

    if (isset($_COOKIE['test'])) {
        return true;
    }

    return false;
}


// if (!isCookie()) {
//     redirect(PAGES['cookie']);
// }