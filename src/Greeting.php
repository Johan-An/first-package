<?php

namespace Johanan\FirstPackage;

class Greeting {

    /**
     * greeting
     */
    function say()
    {
        $hour = date('H');
        if ($hour < 12) {
            return "Good morning";
        }

   	    return "Good afternoon";
    }
}
