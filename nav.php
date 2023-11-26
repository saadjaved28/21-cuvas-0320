<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Site</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <h3><a><i class="fa-solid fa-c fa-bounce" style="color: greenyellow;"></i></a>ricket Club</h3>
            </div>
            <div class="option">
            
                <a href="player.php">Player</a>
                <a href="team.php">Team</a>
                <a href="score.php">Score</a>
                <a href="match.php">Match</a>
                <a href="stadium.php">Stadium</a>
                <a href="about.php">about</a>
                <a href="logout.php">Logout</a>
            </div>
          
        </div>
        <main>
            <div class="main">
                <div class="content">
                    <div class="h2">ICC</div>
                    <div class="p">World Cup Men's Star <br>(2023)</div>
                </div>

            </div>
        </main>
        <footer>
            <div class="footer">
                <!-- <div class="footer-option"> -->
               
               
               
        </footer>

    </header>
</body>

</html>
<style>
    body {
    background-color: black;
    color: greenyellow;
    font-family: 'Varela Round', sans-serif;
    ;
}

/* nav-bar */

.nav {
    background-color: #182121;
    height: 20vh;
    display: flex;
    align-items: center;
    width: 98vw;
    border-radius: 19px;
    
}

.logo {
    height: 11vh;
    width: 49vh;
    border: 1.3vh double greenyellow;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 5vh;
    position: relative;
    left: 0px;
    border-radius: 7.5vh;

}

.logo::after {
    content: "Management of Pakistan";
    font-size: 1.4vh;
    display: block;
    position: absolute;
    bottom: 1vh;
    right: 5vh;
    letter-spacing: 0.8vh;
    color: white;
}

.option {
    /* margin-left: 20px; */

}

.option a {
    margin-left: 14vh;
    text-decoration: none;
    font-size: 4vh;
    color: black;
    background-color: yellowgreen;
    border-radius: 9px;
}

/* main */
.main {
    height: 130vh;
    width: 100%;
    background-image: url("v.jpeg");
    background-size: cover;
    position: relative;

}

.content {
    position: absolute;
    height: 40vh;
    width: 50vw;
    display: flex;
    align-items: center;
    flex-direction: column;
    right: 0px;
    top: 3vh;
    font-weight: 800;
    text-shadow:0.5vh 0 0.33vh white;
}
.h2{
    font-size: 15vh;
    color: #0f1111;
}
.p{
    font-size: 6vh;
    color: #0f1111;
}
</style>