<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="card.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body style="background-image:  url('DESKTOP.jpg')" >
    <div class="sidenav">
        <img class="imagelogo" src="logoo.png" alt="">
        <div id="stati"><a class="menuside"  href="booking.php">Reservation</a></div>
        <div id="reserva"><a class="menuside"  href="eventsplann.php">Events plans</a></div>
        <div id="reserva"><a class="menuside"  href="room.php">Rooms</a></div>
        <div id="reserva"><a class="menuside"  href="restaurationn.php">Restauration</a></div>
        
      </div>
      
    
      <div class="main">
          <div class="navbar">
              <h2>Hello Mr.Deriche ,</h2>
              <div style=" display: flex; align-items: center; margin-right: 70px;">
                  <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
              </div>
             
              
          </div>
      <div class="containerbooking" style="text-align: center; width: 100%; margin-top: 80px;">
        <h2>Syphax Booking</h2>


        <form action="">

            <div class="inpu">
                <h4 >Name</h4>
                <div class="inppp" >
                    <input type="text" placeholder="first name">
                    
                </div>
                <div class="inppp" >
                    <input type="text" placeholder="last name">
                    
                </div>
            </div>

            <div class="inpu">
                <h4 >Phone</h4>
                <div class="inppp" >
                    <input type="text" placeholder="Phone">
                    
                </div>
                
            </div>

            <div class="inpu">
                <h4 >Id number</h4>
                <div class="inppp" >
                    <input type="text" placeholder="Id number">
                    
                </div>
                
            </div>

            <div class="inpu">
                <h4 >Room type</h4>
                <div class="inppp" >
                  
                        <select class="dropdwn" style="color: black;" name="roomtype" id="">
                            <option  value="Single">Single</option>
                            <option value="Double">Double</option>
                        </select>
                    
                </div>
                
            </div>

            <div class="inpu">
                <h4 >Arrival date</h4>
                <div class="inppp" style=" width:100%;display: flex; flex-direction: row;" >
                  
                        <select  class="dropdwn" style="color: black;    width: 50%;margin-right: 10px;" name="day" id="">
                            <option  value="Single">Day</option>
                            <option value="Double">1</option>
                        </select>
                        <select  class="dropdwn" style="color: black; margin-left: 10px;    width: 50%;" name="Month" id="">
                            <option  value="Single">Month</option>
                            <option value="Double">1</option>
                        </select>
                    
                </div>
                
            </div>
            <div class="inpu">
                <h4 >Departure date</h4>
                <div class="inppp" style=" width:100%;display: flex; flex-direction: row;" >
                  
                        <select  class="dropdwn" style="color: black;    width: 50%;margin-right: 10px;" name="day" id="">
                            <option  value="Single">Day</option>
                            <option value="Double">1</option>
                        </select>
                        <select  class="dropdwn" style="color: black; margin-left: 10px;    width: 50%;" name="Month" id="">
                            <option  value="Single">Month</option>
                            <option value="Double">1</option>
                        </select>
                    
                </div>
                
            </div>
<div style="text-align: center; display: flex; justify-content: center; ">
    <div class="subm" style="background-color: #26C87A; width: 100px; margin: 10px; padding: 7px 10px; border-radius: 10px;">
        <a href="">Submit</a>
    </div>
</div>
           
        </form>
      </div>
         
      </div>
</body>
</html>