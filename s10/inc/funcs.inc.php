<?php
function secureText($value)
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
