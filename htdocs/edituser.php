<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Edytuj</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'dbrepository.php'; ?>
<?php 
    $user = getUser($_GET['user_id']);
?>
<div class="container">
    <form action="index.php" method="post">
    <input type="hidden" name="method" value="editUser">
    <input type="hidden" name="user_id" value="<?php echo($user['id']); ?>">
    <div class="form-group">
        <label for="firstname">Imię:</label>
        <input type="text" class="form-control" id="firstname" placeholder="Wprowadź imie" name="firstname" required value="<?php echo($user['firstname']); ?>">
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko:</label>
        <input type="text" class="form-control" id="last" placeholder="Wprowadź nazwisko" name="surname" required value="<?php echo($user['surname']); ?>">
    </div>
    <div class="form-group">
        <label for="pesel">Pesel:</label>
        <input type="text" class="form-control" id="pesel" placeholder="Wprowadź nr. PESEL" name="pesel" required value="<?php echo($user['pesel']); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Zapisz</button>
</div> 
</body>
</html>