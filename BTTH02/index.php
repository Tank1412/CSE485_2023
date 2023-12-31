<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">		
	<h2>Example: Comment System with Ajax, PHP & MySQL</h2>		
	<form method="POST" id="commentForm">
		<div class="form-group">
			<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
		</div>
		<div class="form-group">
			<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
		</div>
		<span id="message"></span>
		<div class="form-group">
			<input type="hidden" name="commentId" id="commentId" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
		</div>
	</form>		
	<div id="showComments"></div>
</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="BTTH02/comments.js"></script>
</body>
</html>
