<?php
function valid_email($email){
    $result  =trim($email);
    if (filter_var ($result, FILTER_VALIDATE_email))
    {
        return "true";
    }else
    {
        return "false";
    }
}
echo valid_email("abc@example.com") ."\n";
echo valid_email("abc#example.com") ."\n";