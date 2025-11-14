<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ibemCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/ibemFavicon.png">
    <title>Skills</title>
    <style>
        .banner{
            width: 100%;
            height: 100vh;
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        .banner .slider{
            position: absolute;
            margin-top:5%;
            width: 200px;
            height: 250px;
            top: 10%;
            left: calc(50% - 100px);
            transform-style: preserve-3d;
            transform: perspective(1000px);
            animation: autoRun 20s linear infinite;
            z-index: 2;
            background:transparent;
        }
        @keyframes autoRun{
            from{
                transform: perspective(1000px) rotateX(-16deg) rotateY(0deg);
            }to{
                transform: perspective(1000px) rotateX(-16deg) rotateY(360deg);
            }
        }

        .banner .slider .item{
            position: absolute;
            inset: 0 0 0 0;
            transform: 
            rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
            translateZ(500px);
        }
        .banner .slider .item img{
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: transparent;
        }
        .banner .model{
            background-image:url(../images/myLogo_blackBG.png);
            width: 100%;
            height: 75vh;
            position: absolute;
            bottom: 0;
            left: 0;
            background-size: auto 130%;
            background-repeat: no-repeat;
            background-position: top center;
            z-index: 1;
            margin-bottom:5%;
            padding-bottom:5%;
        }
        .logo-center {
            display: flex;
            justify-content: center; 
            align-items: center;   
            height: 100vh;        
        }

        .logo-center img {
            width: 300px;   
            height: auto;   
        }
        .banner .item{
            background: transparent; 
            width: 75%;
            height: 75%;
            margin: 5%;
            padding: 5%;
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
    <div class="banner">
        <div class="slider" style="--quantity: 6">
            <div class="item" style="--position: 1"><a target="_blank" href="skillsHTML.php"><img src="../images/NEWhtmlLogo.png" alt="HTML Logo"></a></div>
            <div class="item" style="--position: 2"><a target="_blank" href="skillsCSS.php"><img src="../images/NEWcssLogo.png" alt="CSS Logo"></a></div>
            <div class="item" style="--position: 3"><a target="_blank" href="skillsJS.php"><img src="../images/NEWjavascriptLogo.png" alt="JS Logo"></a></div>
            <div class="item" style="--position: 4"><a target="_blank" href="skillsPHP.php"><img src="../images/NEWphpLogo.png" alt="PHP Logo"></a></div>
            <div class="item" style="--position: 5"><a target="_blank" href="skillsC.php"><img src="../images/NEWclogo.png" alt="C logo"></a></div>
            <div class="item" style="--position: 6"><a target="_blank" href="skillsJAVA.php"><img src="../images/NEWjavaLogo.png" alt="JAVA Logo"></a></div>
        </div>
        <div class="model"></div>
        </div>
    </div>
</body>
</html>
