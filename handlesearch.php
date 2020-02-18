<?php
    
    $a=$_POST;
    $b=array();
    
    foreach($a as $i=>$j)
    {
        $b[]=strtolower("'$i'").": new RegExp('$j*')";
    }
    
    $c=implode(", ", $b);
    
    $d="{"."$c"."}";
    
    $e="db.insignia.find($d);";
    
    file_put_contents ( "searchtempfile" , "$e" );
    
    echo file_get_contents("searchtempfile");
    
    echo ("mongo < searchtempfile");
    
?>