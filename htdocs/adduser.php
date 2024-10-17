<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Dodaj użytkownika</title>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <form action="index.php" method="post">
    <input type="hidden" name="method" value="addUser">
    <input type="hidden" name="user_id" value="<?php echo($user['id']); ?>">
    <div class="form-group">
        <label for="firstname">Imię:</label>
        <input type="text" class="form-control" id="firstname" placeholder="Wprowadź imie" name="firstname" required>
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko:</label>
        <input type="text" class="form-control" id="last" placeholder="Wprowadź nazwisko" name="surname" required>
    </div>
    <div class="form-group">
        <label for="pesel">Pesel:</label>
        <input type="text" class="form-control" id="pesel" placeholder="Wprowadź nr. PESEL" name="pesel" required>
    </div>
    <button type="submit" class="btn btn-primary">Dodaj</button>
</div> 
</form>
</body>
</html>
