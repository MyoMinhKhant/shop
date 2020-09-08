<?php
include('dbconnect.php');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>
	<!-- add member form -->
	<div class="container-fluid" id="Add-Form">
		<div class="col-md-8 offset-md-2">
			<h2 class="text-muted text-center my-3"> Adding New Member</h2>

			<div class="mt-5">
				<form
				action="create.php" method="post" enctype="multipart/form-data" 
				>
				<div class="form-group row">
					<div class="col-sm-3">Profile</div>
					<div class="col-sm-9">
						<div class="form-group">
							<input type="file"
							name="photo"
							class="form-control-file" id="profile">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">Logo</div>
					<div class="col-sm-9">
						<div class="form-group">
							<input type="file"
							name="logo"
							class="form-control-file" id="profile">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" name="name" class="form-control" id="name">
					</div>
				</div>
				<div class="form-group row">
					<label for="dob" class="col-sm-3 col-form-label">Birthday</label>
					<div class="col-sm-9">
						<input type="date" name="birthday" class="form-control" id="dob">
					</div>
				</div>
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-3 pt-0">Gender</legend>
						<div class="col-sm-9">
							<div class="form-check">
								<input name="gender" class="form-check-input" type="radio"  id="male" value="male" checked>
								<label class="form-check-label" for="male">
									Male
								</label>
							</div>
							<div class="form-check">
								<input name="gender" class="form-check-input" type="radio"  id="female" value="female">
								<label class="form-check-label" for="female">
									Female
								</label>
							</div>

						</div>
					</div>
				</fieldset>


				<div class="form-group row">
					<div class="col-sm-3">Favorite Language</div>
					<div class="col-sm-9">



						<select name="language" class="form-control"  id="languages">
							<?php
							$query="SELECT * FROM languages";
							$stmt=$conn->prepare($query);
							$stmt->execute();

							$languages=$stmt->fetchALL(PDO::FETCH_ASSOC);
							?>



							<?php foreach($languages as $language) : ?>


								<option value="<?php echo $language['id'] ?>">
									<?php echo $language['name'] ?>
							
								</option> 


							<?php endforeach; ?>


						</select>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-sm-3">Classes</div>
					<div class="col-sm-9">		    	


						<select name="class" class="form-control"  id="">

							<option value="1">
								Class A
							</option>

						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10 col-md-12">
						<button type="submit" class=" text-center form-control btn btn-primary">Add Now</button>
					</div>
				</div>




			</form>
		</div>
	</div>
</div>


<!-- member list table -->
<div class="container my-4">
	<h2 class="text-center">Member List</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">photo</th>
				<th scope="col">logo</th>
				<th scope="col">Name</th>
				<th scope="col">Birthday</th>
				<th scope="col">Gender</th>
				<th scope="col">Language</th>
				<th scope="col">Class</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query="SELECT member.*,languages.name as language_name from member INNER JOIN languages ON member.language_id=languages.id ";
			$stmt=$conn->prepare($query);
			$stmt->execute();
			$members=$stmt->fetchALL(PDO::FETCH_ASSOC);
			// var_dump($member); /*select all data*//* BY ARRAY*/

			?>
			<?php
			$i=1;
			?>
			<?php foreach($members as $member):?>
				<tr>
	
			<td><?=$i++?></td>
				<td><img src="<?=$member['photo']?>" width="50" height="50"></td>
				<td><img src="<?=$member['logo']?>" width="50" height="50"></td>
				<td><?=$member['member_name']?></td>
				<td><?=$member['birthday']?></td>
				<td><?=$member['gender']?></td>
				<td><?=$member['language_name']?></td>
				<td><?=$member['class_id']?></td>
				<td><a href="edit.php?id=<?=$member['id']?>"class="btn btn-danger">Edit</a><a href="delete.php?id=<?=$member['id']?>" class="btn btn-warning">Delete</a></td>
			</tr>
			<?php endforeach?>

		</tbody>
	</table>
</div>





<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
</script>
</body>
</html>