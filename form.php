<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sendmail.php" method="post">
    <label for="to">To:</label>
    <input type="email" name="to" id="to">

    <label for="from">From:</label>
    <input type="email" name="from" id="from">

    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject">

    <label for="message">Message:</label>
    <textarea name="message" id="message"></textarea>

    <input type="submit" value="Send">
</form>

</body>
</html>