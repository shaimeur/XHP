<?php

    function majorer ($number)
    {
        if ($number < 0) {
            echo round($number,4);
        }
        else {
            echo round($number,2);
        }
        return 0;
    }
majorer(-13,74567890);
?>