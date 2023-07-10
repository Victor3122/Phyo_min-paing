<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Head content -->
</head>
<body>
    <div class="container">
        <!-- HTML markup for generate password form -->
        <form action="index.php?action=generate" method="post">
            <!-- Form inputs -->
        </form>
        <div class="result">
            Generated Password: <?= $generatedPassword ?>
        </div>
        <!-- HTML markup for save password form -->
        <form action="index.php?action=save" method="post">
            <!-- Form inputs -->
        </form>
    </div>
</body>
</html>
