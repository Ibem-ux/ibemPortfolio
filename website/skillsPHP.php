<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ibemCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/ibemFavicon.png">
    <title>PHP</title>
    <style>
        .htmlHomeIMG{
            margin-left:5%;
            background-repeat: no-repeat;
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'components/profPopUp.php'; ?>
        <a href="mainPage.php" class="logo">Ibem</a>
        <nav>
            <a href="mainPage.php">Home</a>
            <a href="skillsPage.php" class="active">Skills</a>
            <a href="projectPage.php">Project</a>
            <a href="aboutmePage.php">About Me</a>
        </nav>
    </header>
    <section class="htmlHome">
        <div class="htmlHomeIMG">
            <img src="../images/phpLogo.png">
        </div>
        <div class="htmlHomeTEXT">
            <h1>What is <span>PHP</span>?</h1><br><br>
            <h3>PHP (<span>Hypertext Preprocessor</span>) is a server-side scripting language used to create dynamic and interactive websites. It works on the web server — processing data, connecting to databases, and generating HTML before sending it to the browser.</h3>
        </div>
    </section>
</body>
</html>