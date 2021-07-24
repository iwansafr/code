<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CODE ESOFTGREAT | Free JS Coding Editor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="" method="post">
				<h1 class="text-center">CODE</h1>
				<div class="col-12">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="index-tab" data-bs-toggle="tab" data-bs-target="#index" type="button" role="tab" aria-controls="index" aria-selected="true">index.html</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="style-tab" data-bs-toggle="tab" data-bs-target="#style" type="button" role="tab" aria-controls="style" aria-selected="false">style.css</button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="script-tab" data-bs-toggle="tab" data-bs-target="#script" type="button" role="tab" aria-controls="script" aria-selected="false">script.js</button>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="index" role="tabpanel" aria-labelledby="index-tab">
							<div class="form-floating">
								<textarea name="html" class="form-control" id="" cols="30" rows="10" style="height: 150px;"><?php echo @$_POST['html'];?></textarea>
								<label for="">index.html</label>
							</div>
					  </div>
					  <div class="tab-pane fade" id="style" role="tabpanel" aria-labelledby="style-tab">
					  	<div class="form-floating">
								<textarea name="style" class="form-control" id="" cols="30" rows="10" style="height: 150px;"><?php echo @$_POST['style'];?></textarea>
								<label for="">style.css</label>
							</div>
					  </div>
					  <div class="tab-pane fade" id="script" role="tabpanel" aria-labelledby="script-tab">
					  	<div class="form-floating">
								<textarea name="script" class="form-control" id="" cols="30" rows="10" style="height: 150px;"><?php echo @$_POST['script'];?></textarea>
								<label for="">script.js</label>
							</div>
					  </div>
					</div>
				</div>
				<div class="col-12 mt-3">
					<button class="btn btn-sm btn-primary"><i class="bi bi-play"></i> Run</button>
				</div>
			</form>
			<div class="col-12">
				<div class="form-floating">
					<iframe src="http://localhost/pd/output.php?html=<?php echo urlencode(@$_POST['html']);?>&style=<?php echo urlencode(@$_POST['style']);?>&script=<?php echo urlencode(@$_POST['script']);?>" frameborder="1" style="width: 100%;"></iframe>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>