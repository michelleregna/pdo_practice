
<?php 

$dsn = 'mysql:host=sql1.njit.edu;dbname=mcr35';
$username = 'mcr35';
$pw = 'diehard53';

try {
	$db =new PDO($dsn, $username, $pw);
	echo 'Connected Successfully';
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage() . '</br>';

}

// Get all accounts where id < 6

$query = 'SELECT * FROM accounts WHERE id < 6';
$statement = $db->prepare($query);
$statement->execute();
$accounts = $statement->fetchAll();
$statement->closeCursor();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accounts</title>
</head>
<body>
<main>
	<h1>Accounts</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone</th>
			<th>Birthday</th>
			<th>Gender</th>
			<th>Password</th>
		</tr>

		<?php foreach ($accounts as $account) :?> 
			<tr>
				<td><?php echo $account['id']; ?></td>
				<td><?php echo $account['email']; ?></td>
				<td><?php echo $account['fname']; ?></td>
				<td><?php echo $account['lname']; ?></td>
				<td><?php echo $account['phone']; ?></td>
				<td><?php echo $account['birthday']; ?></td>
				<td><?php echo $account['gender']; ?></td>
				<td><?php echo $account['password']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</main>
</body>
</html>