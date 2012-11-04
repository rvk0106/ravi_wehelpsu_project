<?php	
	/*
	//include("../class/dbConnection");
	//include("../class/admin");
	
	//declaring variables
	$name;
	$aid;
	$gender;
	$loginid;
	$details;
	$password;
	
	if($_REQUEST["aid"])
	{
		$aid = $_REQUEST["aid"]
	}


	//Creating 'dbConnection' Object
	$dbObject = new dbConnection();
	$con = $dbObject->getConnection();
	
	if($con)
	{
		//echo "mysql Connection Successful<br/>";
		$dbResult = $dbObject->selectDatabase();
		
		if($dbResult)
		{
			//echo "Database Selected";
			$adminObject = new admin();
			$adminResult = $adminObject->getAdminDetails($aid,$con);
			
			while($row = mysql_fetch_array($adminResult))
			{
				$name = $row["name"];
				$gender = $row["gender"];
				$loginid = $row["loginid"];
				$password = $row["password"];
			}
			
			
		}
		else
		{
			echo mysql_error()."<br/>".mysql_errno();
		}
	}
	else
	{
		echo mysql_error()."<br/>".mysql_errno();
	}

	*/
?>

<div id="divValues">
	Name:<?php echo $name="a"; ?>
	Gender:<?php echo $gender="b"; ?>
	Loginid:<?php echo $loginid="c"; ?>
	Password : <?php $password="d"; ?> 
</div>
