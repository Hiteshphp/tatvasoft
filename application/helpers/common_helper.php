<?php
    
if(!function_exists('pr'))
{
    function pr($data, $bypass = false)
    {
        echo'<pre>';
        print_r($data);
        echo'</pre>';
        if(!$bypass)
        {
            exit;
        }
        
    }    
}

