<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<?php include 'dbrepository.php'; ?>
<div>
    <a href="adduser.php">Dodaj użytkownika</a><br>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group" placeholder="Wprowadź tekst">
                <label for="filteredat">Filtr: </label>
                <input type="text" id="filteredat" name="filteredat" class="form-control">
            </div>
            <input type="submit" value="Szukaj" class="btn btn-primary">
        </form>
    </div>
    <table class="table table-striped table-bordered">
    <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>PESEL</th>
        <th>Operacje</th>
    </tr>
    <?php foreach (getUserList() as $osoba): ?>
        <tr>
            <td><?php echo ($osoba['firstname']); ?></td>
            <td><?php echo ($osoba['surname']); ?></td>
            <td><?php echo ($osoba['pesel']); ?></td>
            <td><?php echo ("<a href=\"edituser.php?user_id=".$osoba['id']."\">Edytuj</a>") ?> | <?php echo ("<a href=\"index.php?deleteUser=".$osoba['id']."\">Usuń</a>") ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
</body>
</html>