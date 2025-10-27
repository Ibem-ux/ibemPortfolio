<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ibemCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/ibemFavicon.png">
    <title>CSS</title>
    <style>
        .htmlHomeIMG{
            margin-top:-8%;
            margin-left:8%;
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
            <img src="../images/cssLogo.png">
        </div>
        <div class="htmlHomeTEXT">
            <h1>What is <span>CSS</span>?</h1><br><br>
            <h3>CSS (<span>Cascading Style Sheets</span>) is the language used to style and design web pages. It controls how HTML elements look — including their colors, fonts, layouts, and spacing. CSS helps make websites visually appealing, consistent, and responsive across different devices.</h3>
        </div>
    </section>
</body>
</html>