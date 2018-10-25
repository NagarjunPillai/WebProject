<?php
require "dbconnect.php";
if(isset($_GET['name']))
				{
					$delquer="DELETE FROM staffdetails WHERE NAME ='".$_GET['name']."';";
					mysqli_query($scon,$delquer);
					header("location: display.php");
				}
if(isset($_GET['img']))
				{
					unlink($_GET['img']);
					//array_map('unlink', glob("'.$_GET['img'].'")); 
				}
				?>