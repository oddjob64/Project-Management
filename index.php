<!DOCTYPE html>
<html>
<head>
	<title>Project Management | phpGrid</title>
</head>
<body>

<style>
.centered {
    margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align:center;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
</style>

<div class="centered">
<h1>Project Management</h1>

<a href="manager/clients.php" target="_new">Login as manager</a> | <a href="employee/tasks.php" target="_new">Login as employee</a>
</div>

<div class="footer"><strong>Project Management</strong> | by Tyler Billings &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>
