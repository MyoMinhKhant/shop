 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<script type="text/javascript" src="jquery.min.js"></script>
 	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<div class="row">

 			  <!--  Add -->
 			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 				<div id="add_member">
 					<h1 class="text-center">Adding Item</h1>
 				<!-- 	<?php $_PHP_SELF ?> -->
 					<form action="additem.php" method="post" enctype="multipart/form-data">
 						<div class="">
					<label for="name">Profile:</label><br>
					<input type="file" class="form-control-file" id="profile" name="photo"> 
				</div>
			

				<div class="form-group">
					<label for="logo">Logo</label><br>
					<input type="file" class="form-control-file" id="logo" name="logo"> 
				</div>

				<div class="form-group">
					<label for="Name">Name</label><br>
						<input type="text" class="form-control" id="name" name="name">
				</div>

				<div class="form-group">
					<label for="birthday">Birthday</label><br>
					<input type="date" class="form-control" id="birthday" placeholder="mm/dd/yy" name="birthday"> 
				</div>

				<div class="form-group">
					<label for="gender">Gender:</label><br>
					<input type="radio" class="" id="male" value="male" checked="" name="gender">Male
					<input type="radio" class="" id="female" value="female" name="gender">Female 
				</div>

				<div class="form-group">
					<label for="fl">Favourite language</label>
					<select class="form-control" id="language" name="language">
						<option value="html">html</option>
						<option value="css">css</option>
						<option value="js">js</option>
						<option value="vue">vue</option>
						<option value="jquery">jquery</option>
						<option value="larvel">larvel</option>
					</select>
				</div>

                 <div class="form-group bg-dark">
		<button type="submit" class="form-control bg-primary text-white">Add Now</button>
			</div>
 						
 					</form>
 					
 				</div>

 		</div>
 		<!-- Edit -->

 			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 				<div id="edit_member">
 					<h1 class="text-center">Editing Item</h1>
 					<form action="update.php" method="post" enctype="multipart/form-data">
	 					<nav>
	  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old profile</a>
	    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
	   
	  </div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
	  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><img src="" id="oldphoto" width="100px" height="100px"></div>
	  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">  <div class="">
					<label for="name">Profile:</label><br>
					<input type="file" class="form-control-file" id="profile" name="photo"> 
				</div></div>
	</div>

			
				
	 					<nav>
	  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-oldlogo" role="tab" aria-controls="nav-home" aria-selected="true">Old logo</a>
	    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-logo" role="tab" aria-controls="nav-profile" aria-selected="false">logo</a>
	   
	  </div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
	  <div class="tab-pane fade show active" id="nav-oldlogo" role="tabpanel" aria-labelledby="nav-home-tab"><img src="" id="oldlogo" width="100px" height="100px"></div>
	  <div class="tab-pane fade" id="nav-logo" role="tabpanel" aria-labelledby="nav-profile-tab">
	   	<div class="form-group">
					<label for="logo">Logo</label><br>
					<input type="file" class="form-control-file" id="logo" name="logo"> 
				</div>
			</div>
	</div>

		   


				<div class="form-group">
					<label for="Name">Name</label><br>
						<input type="text" class="form-control" id="editname" name="name">
				</div>

                <div>
				<input type="hidden" name="oldid" class="form-control" id="myoldid">
			</div>

			<div class="form-group">
				<input type="hidden" name="oldprofile" class="form-control" id="myoldphoto">
			</div>
			<div class="form-group">
				<input type="hidden" name="oldlogo" class="form-control" id="myoldlogo">
			</div>
				<div class="form-group">
					<label for="editbirthday">Birthday</label><br>
					<input type="date" class="form-control" id="editbirthday" placeholder="mm/dd/yy" name="birthday"> 
				</div>

				<div class="form-group">
					<label for="editgender">Gender:</label><br>
					<input type="radio" class="" id="editmale" value="male" name="gender">Male
					<input type="radio" class="" id="editfemale" value="female" name="gender">Female 
				</div>

				<div class="form-group">
					<label for="fl">Favourite language</label>
					<select class="form-control" id="editlanguage" name="language">
						<option value="html">html</option>
						<option value="css">css</option>
						<option value="js">js</option>
						<option value="vue">vue</option>
						<option value="jquery">jquery</option>
						<option value="larvel">larvel</option>
					</select>
				</div>

                 <div class="form-group bg-dark">
		<button type="submit" class="form-control bg-primary text-white">Add Now</button>
			</div>
 						
 			
 					</form>
 					
 					
 				</div>
 				
 		</div>
 	</div>
 	<table width="100%" class="table table-striped table-dark">
 		<tr>
 			<th>no</th>
 			<th>profile</th>
 			<th>logo</th>
 			<th>name</th>
 			<th>birthday</th>
 			<th>gender</th>
 			<th>language</th>
 				<th>Action</th>
 			
 		</tr>
<tbody id="tbody"></tbody>
 	</table>
 	<div>
 		
 	</div>
 	<div>
 		
 	</div>
 	

 	<script type="text/javascript">
 		$(document).ready(function(){
 			$("#edit_member").hide();
 			getData()

 			function getData(){
 				$.get('list.json',function(res){
 					/*console.log(typeof(res));*/
 					var datatype=typeof(res);
 					var data;
 					if(datatype=='object'){
 						data=res;
 					}else{
 						data=JSON.parse(res);
 					}
 					console.log(data);
 					var html="";
 					var j=1;
 					$.each(data,function(i,v){
 						html+=`<tr>
 						<td>${j++}</td>
 						<td><img src="${v.profile}" width="100px" height="100px"></td>
 						<td><img src="${v.logo}" width="100px" height="100px"></td>
 						<td>${v.name}</td>
 						<td>${v.birthday}</td>
 						<td>${v.gender}</td>
 						<td>${v.language}</td>
 						<td><button class="btn btn-warning btn_edit" data-id="${i}">edit</button>
 						<button class="btn btn-danger btn_delete" data-id="${i}">delete</button></td>
 						</tr>`;
 					})
 					$("#tbody").html(html);
 				})
 			}

 					$("#tbody").on('click','.btn_delete',function(){
 						/*alert("ok");*/
 						var id=$(this).data('id');
 						console.log(id);
 						$.get('delete.php',{id:id},function(res){
 							console.log(res);
 							if(res){
 								getData();
 							}

 						})
 					})	
 					$("#tbody").on('click','.btn_edit',function(){
 						/*alert("ok");*/
 						$("#edit_member").show();
 						$("#add_member").hide();
 						var id=$(this).data('id');
 						$.get('list.json',function(res){
 							var datatype=typeof(res);
 							var data;
 							if(datatype='object'){
 								data=res;
 							}else{
 								data=JSON.parse(res);
 							}
 							var array=data[id];
 							var name=array['name'];
 							var birthday=array['birthday'];
 							var profile=array['profile'];
 							var logo=array['logo'];
 							var gender=array['gender'];
 							var photo=array['profile'];
 							var myphoto=array['logo'];
 							console.log(gender);
 							var language=array['language'];
 							$("#editname").val(name);
 							$("#editbirthday").val(birthday);
 							if(gender=="female")
 							{
 								$("#editmale").prop('checked','checked');
 							}else{
 								$("#editfemale").prop('checked','checked');
 							}
 							$("#editlanguage").val(language);
 							$("#oldphoto").attr('src',photo);
 							$("#oldlogo").attr('src',myphoto);
 							$("#myoldid").val(id);
 							$("#myoldphoto").val(photo);
 							$("myoldlogo").val(logo);
 						/*	console.log(name);*/

 						})
 					})	
 		})
 	</script>
 
 </body>
 </html>