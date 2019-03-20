<?php

$email = "";

if($_POST)
{
    $errors = array();

    if(empty($_POST['firstName']))
    {
        $errors['firstName1'] = 'First name is required.';
    }

    if(empty($_POST['lastName']))
    {
        $errors['lastName1'] = 'Last name is required.';
    }

    if(empty ($_POST['email']))
    {
        $errors['email1'] = 'Email is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }

    if(empty($_POST['phone']))
    {
        $errors['phone1'] = 'Phone number is required.';
    }

    if(empty($_POST['message']))
    {
        $errors['message1'] = 'Message is required';
    }

    if (count($errors) == 0) {
        header("Location: success.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>My test page</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="firstName">Prénom :</label>
            <input type="text" id="firstName" name="firsName" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" required>
            <p><?php if(isset($errors['firstName1'])) echo $errors['firstName1']; ?></p>
        </div>
        <div>
            <label for="lastName">Nom :</label>
            <input type="text" id="lastName" name="lastName" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" required>
            <p><?php if(isset($errors['lastName1'])) echo $errors['lastName1']; ?></p>
        </div>
        <div>
            <label for="email">Courriel :</label>
            <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" required>
            <p><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p>
            <p><?php if(isset($errors['emailErr'])) echo $errors['emailErr']; ?></p>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="phone" maxlength="10" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>" required>
            <p><?php if(isset($errors['phone1'])) echo $errors['phone1']; ?></p>
        </div>
        <div>
            <div>
                <select>
                    <option> --Séléctionner un sujet--</option>
                    <option value="sujet1">Sujet 1</option>
                    <option value="sujet2">Sujet 2</option>
                    <option value="sujet3">Sujet 3</option>
                </select>
            </div>
            <label for="message">Message :</label>
            <textarea  id="message" name="message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>" required></textarea>
            <p><?php if(isset($errors['message1'])) echo $errors['message1']; ?></p>
        </div>
        <div  class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>