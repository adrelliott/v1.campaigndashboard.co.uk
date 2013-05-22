<?php 
    if (isset($notifications))
    {
        foreach($notifications as $vehicle)
        {
            foreach ($vehicle as $n => $html)
            {
                echo $html;
            }
        }
    } 
?>