<?php //session_start();
if(isset($_SESSION['name'])){?>

<li class="nav-item d-none d-sm-inline-block">
	<a href="submission_status_user.php" class="nav-link">Submission</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
	<a href="blog.php" class="nav-link">Blog</a>
</li>
<?php if($_SESSION['user_type'] == "problem_setter"){?>
	<li class="nav-item d-none d-sm-inline-block">
	<a href="add_problem.php" class="nav-link">Add Problems</a>
</li>

<?php }}?>