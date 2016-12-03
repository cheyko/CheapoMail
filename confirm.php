<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WELCOME PAGE</title>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen"-->
		<link rel="stylesheet" type="text/css" href="styles/confirm.css"> 
	</head>
	<body>
	<div class="container">
      <div id = "header">
        <h1>WELCOME !!!!!!!!!!</h1>
        <p>New User</p>
      </div>
		<hr>
			<h3> between my two horizontal rules lies the table with the required results </h3>
			<h3> Horizontal rules were used to show distinction between what was required and my added feature </h3>
			<table class ="table1" > 
	
			<tr class = "header-row" >
			<th class = "man"> ID </th> <th class = "man"> First Name </th>  <th class = "man"> Last Name </th>  <th class = "man"> User Name </th> 
			<th> Last Login </th>  <th> Digest </th>  <th> Salt </th> 
			</tr>
	
			<tr class = "item-row">
			<th class = "man"> php variable for id missing </th> <td> <?= $fname; ?> </td> <td> <?= $lname; ?> </td>  <td> <?= $uname; ?> </td>  
			<td class = "quan"> <?= $track; ?> </td>  <td class = "quan"> <?= $digest; ?></td>  <td class = "quan"> <?= $thesalt; ?> </td>
			</tr>
			
			<!-- write php code to recieve all datafrom form database and print them in order -->
			<tr class = "item-row1">
			<th class = "man"> - </th><td>   -   </td>  <td>     -    </td>  <td>      -      </td>  
		    <td class = "quan"> - - </td><td class = "quan">    -    </td><td class = "quan"> - </td>
			</tr>
			
			</table>
	
		<hr>

      <div id = "footer">
        <p class="text-muted"> CHEYKO-DON WEB DEVELOPMENTS COMP2190 Copyright &copy; 2017 .</p>
      </div>
    </div>
	</body>
</html>