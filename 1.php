<html>
	<head>
		<script type = "text/javascript">
			function  loadValues(aid)
			{
				var xmlHttp;
				var aid;

				aid=document.getElementById("selCategory").value;
				if(windows.XMLHttpRequest)
				{
					xmlHttp = new XMLHttpRequest();
				}
				else
				{
					xmlHttp = new ActiveXObject("Microsoft,XMLHTTP");
				}
				
				xmlHttp.onreadystatechange = function()
				{
					if((xmlHttp.readystate == 4)(xmlHttp.status == 200))
					{
						document.getElementById("divValues").innerHTML = xmlHttp.responseText;
						//document.getElementById("divValues").innerHTML = "working";
					}
				}
				
				xmlHttp.open("GET","2.php?aid="+aid);
				xmlHttp.send();
				
			}
		</script>
	</head>
	<body>
		<form>
			<select id="selCategory" name="selCategory1" onchange="return loadValues(this.value);">
				<option value = "">SELECT USER</option>
				<option value="1">1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
			<div id="divValues">
				user info will be listed here...	
			</div>
		</form>
	</body>
</html>
