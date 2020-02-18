<?php
    $a=$_GET;
    if(isset($a['rep']))
    {
        $id=strtolower("'id': '$r'");
        $id="{"."$id"."}";
        $e="db.insignia.find($d);";
        file_put_contents ( "tempfile" , "$e" );
        echo file_get_contents("tempfile");
        echo ("mongo < tempfile");
    }
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Search Page</title>
<style>

/*body font specified*/
body {font-family: "Lato", sans-serif;}

#bgColor {
height : 700px;
background : #33FF33;
background : linear-gradient(#ff8000, #ffffff, #008000);}

 	.main{
                width: 960px;
                height: auto;
                //background-color: aliceblue;
            }
            #sub{
                
                width: 600px;
                height: auto;
            }



</style>
</head>

<body id='bgColor'>
<table id='main' border="1"> <!--Table with 4 rows and 4 columns-->
<tbody><tr class="main">
                    <td>
                      Day of Event
                    </td>
                    <td>
                        <input type="text" name="C0" placeholder="Day of Event">
                    </td>    
                    </tr> 
                
                      <tr class="main">
                    <td>
                      Date of Event
                    </td>
                    <td>
                        <input type="text" name="C1" placeholder="Date of Event">
                    </td>    
                    </tr> 
                
                    <tr class="main">
                    <td>
                      Time of Event
                    </td>
                    <td>
                        <input type="text" name="C2" placeholder="Time of Event">
                    </td>    
                    </tr> 
                
                  <tr class="main">
                    <td>
                      Date of Information at Thana
                    </td>
                    <td>
                        <input type="text" name="C3" placeholder="Date of Information at Thana">
                    </td>    
                    </tr> 
                
                 <tr class="main">
                    <td>
                      Time of Information at Thana
                    </td>
                    <td>
                        <input type="text" name="C4" placeholder="Time of Information at Thana">
                    </td>    
                    </tr> 
					</tbody>
					

</table>
</body>
</html>
