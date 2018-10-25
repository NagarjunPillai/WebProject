<?php
require "dbconnect.php";
$query="SELECT * from `staffdetails`;";
$res = mysqli_query($scon,$query);
if(mysqli_num_rows($res)==0)  
        {
            echo "NIL";
        }
        else
        {	
           	$html ="<h1><center>Staff Details</center></h1>";
            $html.="<table border='1' class='table table-bordered table-active'>";
            $html.="<tr>"
                . "<th>Name</th>"
                . "<th>Quals</th>"
				. "<th>design</th>"
				. "<th>image</th>"
                . "</tr>";
          /* For Loop for all entries */
            while($row = mysqli_fetch_assoc($res))
            {
              $html.="<tr>";
              $html.="<td>".$row["NAME"]."</td>";
				$html.="<td>".$row["QUALIFICATION"]."</td>";
				$html.="<td>".$row["DESIGNATION"]."</td>";
				$html.="<td><img src='".$row['IMAGE']."'style='width:128px;height:128px'></td>";
				$html.="<td><button><a href='delete.php?name=".$row['NAME']."&img=".$row['IMAGE']."'>Delete</button></a></td>";
				/*if(($_POST('delete')))
				{
					$delquer="DELETE FROM `staffdetails` WHERE `NAME`=".$row["NAME"].";";
					mysqli_query($scon,$delquer);
				}*/
				/*if(isset($_POST['Submit']))
				{	 //echo $_POST['Submit'];
					switch($_POST['Submit']){
					case 'Delete':
				{
					$delquer="DELETE FROM `staffdetails` WHERE `NAME`=$name;";
					mysqli_query($scon,$delquer);
					header("Refresh: 5; url=display.php");
				}
					}
				}*/
              $html.="</tr>";
				
            }
			

   
         $html.="</table>";
         echo $html;
		}
         
?>