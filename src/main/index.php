<?php
// Read the package.json file
$packageJson = json_decode(file_get_contents('package.json'), true);

// Access specific values
$appName = $packageJson['name'];
$appVersion = $packageJson['version'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/project.css">
    <script src="main.js"></script>
    <title>MPhone</title>
</head>
<body >
    <div class="nav">
        <div class="navBar">
            <div class="logo"> <img src="doo1.png" style="width: 80px; height: 30px;" alt=""> </div>
        <div class="navLink">
            <a href="">Home</a>
            <a href="">About us</a>
            <a href="">Phones</a>
            <a href="">Products</a>
            <a href="">Blog</a>
        </div>
        </div>
    </div>
    <div class="cus1">

        <div class="img">
            <img src="hugo-agut-tugal-6cdIdu8KkLg-unsplash.jpg" alt="">
            <div style="width: 100%; height:500px; background-color: #283891;"></div>
           
        </div>
        <div class="content">
            <h1>HAVE IT ALL</h1>
            <h2>Powerfull, compact, versatile</h2>
            <h3>lorem isem opem repoermo rejf morkf krf eeirjf jrf eruoiejrf eiejr fjer ferirj friojf eiroj f</h3>
            <button class="butthome">By now</button>

            <div class="imgser">

            <div class="dakhL">
                <img src="hugo-agut-tugal-6cdIdu8KkLg-unsplash.jpg"  alt="">
                <div class="jujo"></div>
                <div class="dudo">
                    <h1>HAVE IT ALL</h1>
                    <h2>Powerfull, compact, versatile</h2>
                    <a href="">By now </a>
                </div>
               

            </div>
            <div class="dakhL">
                <img src="hugo-agut-tugal-6cdIdu8KkLg-unsplash.jpg"  alt="">
                <div class="jujo"></div>
                <div class="dudo">
                    <h1>HAVE IT ALL</h1>
                    <h2>Powerfull, compact, versatile</h2>
                    <a href="">By now </a>
                </div>
               

            </div>
            <div class="dakhL">
                <img src="hugo-agut-tugal-6cdIdu8KkLg-unsplash.jpg"  alt="">
                <div class="jujo"></div>
                <div class="dudo">
                    <h1>HAVE IT ALL</h1>
                    <h2>Powerfull, compact, versatile</h2>
                    <a href="">By now </a>
                </div>
               

            </div>
          
            </div>
            <div class="flash">
                <div class="hamra">-30%</div>
                <h1>Flash sale of the day</h1>
                <h3>lorem ispom dom pom rom</h3>

                <div class="timer">
                    <h2>Will end in :</h2>
                    <div class="wa9t">
                        <div class="sa3a">
                            23 Hours
                        </div>
                        <div class="sa3a">
                            59 Minutes
                        </div>
                        <div class="sa3a">
                            30 Seconds
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="phonesflash">
                <div class="phon">
                    <img src="pngwing.com (75).png" alt="">
                    <h2>Iphone 14</h2>
                    <h2 class="price">512$</h2>
                </div>
                <div class="phon">
                    <img src="pngwing.com (76).png" alt="">
                    <h2>Air pods 3</h2>
                    <h2 class="price">512$</h2>
                </div>
                <div class="phon">
                    <img src="Galaxy-S23-Ultra.png" alt="">
                    <h2>Galaxy S23 Ultra</h2>
                    <h2 class="price">512$</h2>
                </div>
                <div class="phon">
                    <img src="pngwing.com (75).png" alt="">
                    <h2>Iphone 14</h2>
                    <h2 class="price">512$</h2>
                </div>
               
                <div class="phon">
                    <img src="pngwing.com (75).png" alt="">
                    <h2>Iphone 14</h2>
                    <h2 class="price">512$</h2>
                </div>
                
            </div>
        </div>
        
        <div class="op"></div>
    </div>
    <script>

const { app, BrowserWindow } = require('electron');

let mainWindow;

function createWindow() {
  mainWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      nodeIntegration: true,
    },
  });

  mainWindow.loadFile('path/to/your/index.html');

  mainWindow.on('closed', function () {
    mainWindow = null;
  });
}

app.whenReady().then(createWindow);

app.on('window-all-closed', function () {
  if (process.platform !== 'darwin') app.quit();
});

app.on('activate', function () {
  if (mainWindow === null) createWindow();
});
    </script>
</body>
</html>