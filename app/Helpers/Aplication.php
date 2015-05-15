<?php

function encriptar_contra($contra = null)
{
    if ($contra == null) 
    {
        $contra = str_random(10);
    }
    return \Hash::make($contra);
}


?>