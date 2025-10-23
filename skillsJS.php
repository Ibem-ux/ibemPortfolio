<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ibemCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/ibemFavicon.png">
    <title>JAVASCRIPT</title>
    <style>
        .htmlHomeIMG{
            margin-top:-3%;
            margin-left:5%;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'profPopUp.php'; ?>
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
            <img src="images/javascriptLogo.png">
        </div>
        <div class="htmlHomeTEXT">
            <h1>What is <span>JAVASCRIPT</span>?</h1><br><br>
            <h3>JavaScript (<span>JS</span>) is the programming language that makes web pages interactive. It allows you to add dynamic features — like animations, form validation, image sliders, and interactive buttons. Together with HTML and CSS, JavaScript brings websites to life.</h3>
    </section>
</body>
</html>