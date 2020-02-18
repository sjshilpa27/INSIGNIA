<?php
    
    if(isset($_POST['r']))
    {
        $r=$_POST['r'];
    
        unset($_POST['r']);
    }
    else
    {
        ;
    }
    $a=$_POST;
    $b=array();
    
    $id=strtolower("'id': '$r'");
    $id="{"."$id"."}";
    
    foreach($a as $i=>$j)
    {
        $b[]=strtolower("'$i': '$j'");
    }
    
    $c=implode(", ", $b);
    
    $d="{"."$c"."}";
    
    $e="db.insignia.update($id, $d, upsert:true);";
    
    file_put_contents ( "instempfile" , "$e" );
    
    echo file_get_contents("instempfile");
    
    echo ("mongo < instempfile");
    
?>