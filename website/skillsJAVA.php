<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ibemCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/ibemFavicon.png">
    <title>JAVA</title>
     <style>
        .htmlHomeIMG{
            margin-bottom:7%;
            margin-left:2%;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'components/profPopUp.php'; ?>
        <a href="mainPage.php" class="logo">Ibem</a>
        <nav>
            <a href="mainPage.php">Home</a>
            <a href="skillsPage.php"  class="active">Skills</a>
            <a href="projectPage.php">Project</a>
            <a href="aboutmePage.php">About Me</a>
        </nav>
    </header>
    <section class="htmlHome">
        <div class="htmlHomeIMG">
            <img src="../images/javaLogo.png">
        </div>
        <div class="htmlHomeTEXT">
            <h1>What is <span>JAVA</span>?</h1><br><br>
            <h3><span>Java</span> is a high-level, object-oriented programming language used to create applications for computers, mobile devices, and the web. It is platform-independent, meaning programs written in Java can run on any system that has a Java Virtual Machine (JVM). Java is known for its reliability, security, and portability.</h3>
        </div>
    </section>
</body>
</html>