<!DOCTYPE html>
<html lang="en">
<head>
  <title>View MLA Constituency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.uppercase { text-transform:uppercase; }
.mtop15p { margin-top:15px; }
</style>
</head>
<body>

<div id="div_tbl_minlocation" class="container-fluid">
  <div class="row mtop15p">
    <div align="center" class="col-md-12 col-sm-12 col-xs-12"><h5 class="uppercase"><b>View MLA Constituency List</b></h5></div>
  </div>
  <div class="row mtop15p">
	  <div id="minlocationDataSize" class="col-md-6 col-sm-6 col-xs-12">
	    You have registered <b>1000</b> MLA Constituency
	  </div>
	  <div align="right" class="col-md-6 col-sm-6 col-xs-12">
	     <div class="input-group">
			<input id="minlocationSearch" type="text" class="form-control" placeholder="Search MLA Constituency">
			<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i>&nbsp;<b>Search</b></span>
		 </div>
	  </div>
  </div>
  <div class="row mtop15p">
	  <div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="table-responsive">          
		  <table class="table" style="border:1px solid #ccc;">
			<thead>
			  <tr style="background-color:#efefef;">
			    <th>MLA Constituency Id</th>
				<th>MLA Constituency Name</th>
				<th>MP Constituency</th>
				<th>State</th>
				<th>Country</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Anna</td>
				<td>Pitt</td>
				<td>Anna</td>
				<td>Pitt</td>
			  </tr>
			</tbody>
		  </table>
	 </div>
	</div>
  </div>
</div>


</body>
</html>