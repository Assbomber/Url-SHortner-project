<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>
<style>
@media only screen and (max-width : 768px) {



.input3{


width: 80%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 10px 10px 10px;
box-sizing: border-box;

}
.input4{


width: 80%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 50px 50px 10px;
box-sizing: border-box;
background-color: blue;

}

}

@media only screen and (min-width : 768px) {



.input3{


width: 20%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 10px 10px 10px;
box-sizing: border-box;

}
.input4{


width: 5%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 10px 50px 50px 10px;
box-sizing: border-box;
background-color: blue;

}


}
.abc{
    text-align: center;
}

</style>
</head>
<body class="abc">

    <?php 
        $inputUrl=$_POST["url"];
        $directory=$_POST["subdirectory"];
        $filename=$directory.".php";
        
        function FileWriter($name,$inputurl){
                 $myfile=fopen($name,"w");
                 $txt="<html>
                 <head><meta http-equiv = \"refresh\" content = \"2; url =".$inputurl."\"/>
                <style>
                body{ background-image: url(\"logo.gif\");}</style>
                </head>
                <body><h1>".""."</h1>
                
                <?php
                
                 require \"../auth.php\";
                
                "."$"."sql =  \"select hits from sitedata where shorturl=\\\"".$name."\\\"\";".
              "$"."result=\"\";
	          if ("."$"."result=mysqli_query("."$"."database, "."$"."sql)) {
		            echo \"hits updated\";
		          "."$"."row=mysqli_fetch_row("."$"."result);
		       echo "."$"."row[0]+1;
		       "."$"."result="."$"."row[0]+1;
	          }
	        else{
		         echo \"hits not updated\";
	          }
	          "."$"."sql2 =  \"UPDATE sitedata set hits=\".$"."result.\" where shorturl="."\\\"".$name."\\\"\";
	           mysqli_query("."$"."database, "."$"."sql2);
            ?>

                </body>
                </html>";
                 fwrite($myfile,$txt);
                 fclose($myfile);
                 
                 require '../auth.php';
                 $date= date("Y-m-d");
                 
                 $sql = "INSERT INTO sitedata (longurl,shorturl,hits,DATED)
	             VALUES ('$inputurl','$name','0','$date')";
	             if (mysqli_query($database, $sql)) {
		         echo "New record created successfully !";
                }
                else{
                    echo "Not able to insert record";
                }
        }

        if (file_exists($filename)) { 
                 echo "<br>Status: <h3 style=\"color:red;\">Sorry that subdomain is already in use.</h3><br>
                 <h3 style=\"color:green;\">But don't worry, we created a new one for you!</h3><br> "; 
                 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                 $randomString = ''; 

                 for ($i = 0; $i < 6; $i++) { 
                        $index = rand(0, strlen($characters) - 1); 
                        $randomString .= $characters[$index];  } 
                  $filenamerand=$randomString.".php";
                  FileWriter($filenamerand,$inputUrl);
                  echo $filenamerand;
        } 
        else { FileWriter($filename,$inputUrl);
        echo "<br>Status: <h2 style=\"color:green;\"> Success!</h2><br>";
        echo $filename ;} 
        

?>
<div>
<p>Copy To clipboard<p>
<input type="text" class="input3" value=https://etechknow.net/<?php

    echo $filename ;  
    
?> id="myInput">
        
        <!-- The button used to copy the text -->
        <button class="input4" onclick="myFunction()"><i class="fa fa-copy"></i></button>
</div>

</body>
</html>
