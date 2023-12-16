<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="card.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="main.js"></script>
    <title>Syphax hotel management</title>
</head>
<body style="background-image:  url('DESKTOP.jpg')" >
<div class="sidenav">
  <img class="imagelogo" src="logoo.png" alt="">
  <div id="stati"><a class="menuside"  href="douma.php">Statistics</a></div>
  <div id="stuff"><a class="menuside"  href="staffs.php">Staffs</a></div>
  <div id="reserva"><a class="menuside"  href="eventsplan.php">Events plans</a></div>
  <div id="reserva"><a class="menuside"  href="card.php">Rooms</a></div>
  <div id="reserva"><a class="menuside"  href="restauration.php">Restauration</a></div>
  
</div>

<!-- Page content -->
<div class="main">
    <div class="navbar">
        <h2>Hello Mr.Deriche ,</h2>
        <div style=" display: flex; align-items: center; margin-right: 70px;"><a class="addstaff" href="addstaff.html"><i class="fa-solid fa-plus"></i> Add staff</a>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
       
        
    </div>
<div class="container">

    <div class="content">

        <div class="stat">
            <h3><i style="margin: 0px 5px;" class="fa-solid fa-people-group"></i> Visits</h3>
            <h1>200</h1>
        </div>

        <div   class="stat">
            <h3><i style="margin: 0px 7px;" class="fa-solid fa-money-check-dollar"></i>Revenues</h3>
            <h1>+218344.00 DA</h1>
        </div>

        <div class="stat">
            <h3  > <i style="margin: 0px 5px;" class="fa-solid fa-check-to-slot"></i>Room Booked</h3>
            <h1>200</h1>
        </div>
    </div>

    <div class="flowchart">

        

        <div style="display: flex; align-items: center;" class="circle">
         <img src="Chart.png" alt="">
          <div class="wilayas" style="display: flex; flex-direction: column; margin-left: 30px;">
            <div style="display: flex; align-items: center; margin-left: 20px;">    <div style="width: 10px; margin: 0px 10px; height: 10px; background-color: #A1E3CB; border-radius: 70px;"></div><h3>Bejaia</h3> </div>
            <div style="display: flex; align-items: center; margin-left: 20px;">    <div style="width: 10px; margin: 0px 10px; height: 10px; background-color: #B1E3FF; border-radius: 70px;"></div><h3>Jijel</h3> </div>
            <div style="display: flex; align-items: center; margin-left: 20px;">    <div style="width: 10px; margin: 0px 10px; height: 10px; background-color: #A8C5DA; border-radius: 70px;"></div><h3>Algiers</h3> </div>
            <div style="display: flex; align-items: center; margin-left: 20px;">    <div style="width: 10px; margin: 0px 10px; height: 10px; background-color: #1C1C1C; border-radius: 70px;"></div><h3>Others</h3>
        
        
        
        </div>
          
    
     </div>
      </div>

        <div class="stics">
            <h3>Total staffs in the hotel</h3>
            <h3>20</h3>
            <br>
            <h3>Customers average rating
                </h3>
                <h3>3.5 / 5</h3>
                <br>
                <H3>Total waste out
                   </H3>
                   <h3> 1205 kg</h3>
        </div>
    </div>

</div>
  
   
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