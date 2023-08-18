<?php
include("developers.php");
?>
<html>
    
        <link rel="icon" href="logo.png">
        <title>
            Aquaria
        </title>
        <style>    
            * {    
              box-sizing: border-box;    
            }    
                
            input[type=text], select, textarea {    
              width: 100%;    
              padding: 12px;    
              border: 1px solid rgb(70, 68, 68);    
              border-radius: 4px;    
              resize: vertical;    
            }    
            input[type=email], select, textarea {    
              width: 100%;    
              padding: 12px;    
              border: 1px solid rgb(70, 68, 68);    
              border-radius: 4px;    
              resize: vertical;    
            }    
                
            label {    
              padding: 12px 12px 12px 0;    
              display: inline-block;    
            }    
                
            input[type=submit] {    
              background-color: rgb(23, 170, 131);    
              color: white;    
              padding: 12px 20px;    
              border: none;    
              border-radius: 4px;    
              cursor: pointer;    
              float: right;
              position: absolute;
              top: 500x;    
              left: 1270px;
            }    
                
            input[type=submit]:hover {    
              background-color: #457da0;    
            }    
                
            .container {    
              border-radius: 15px;    
              background-color: #ebf8f5;    
              padding: 20px; 
              position: absolute;
              left: 80px; 
              width: 1370px;
              top: 200px;
              height: 760px;
              box-shadow: 2px 2px 2px  2px black;
            } 
            .container1 {    
              border-radius: 15px;    
              background-color: #ebf8f5;    
              padding: 20px; 
              position: absolute;
              left: 80px; 
              width: 1370px;
              top: 150px;
              height: 150px;
              box-shadow: 2px 2px 2px  2px black;
            }     
                
            .col-25 {    
              float: left;    
              width: 25%;    
              margin-top: 6px;    
            }    
                
            .col-75 {    
              float: left;    
              width: 75%;    
              margin-top: 6px;    
            }    
                   
            .row:after {    
              content: "";    
              display: table;    
              clear: both;    
            }
            td,th,table{
              
              border: solid 1px black;
              border-collapse: collapse;
              border-spacing: 45px;
              padding: 10px;
              padding-left: 60px;
              padding-right: 60px;
              

            }    
            .p2:hover{
        transform: scale(1.2);
        text-decoration: underline;
        transition: 0.5s;

    }
    table{
      border-radius: 10px;
      border: 2px solid grey;
    }
    body {
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
                
               
            </style> 
    
        
    
    <body style="background-color: whitesmoke">
      <div>
        <header style="height: 80px;position: absolute;left: 80px">
          <div style="border-left: 1px solid;border-left-color:black;height: 100;border-bottom: 1px solid black;width: 1370px;border-right: 1px solid black;border-radius: 5px;box-shadow: 1px 1px 5px black" >
              <a href="hp.html" style="text-decoration: none">
                  <img src="logo.png"  alt="logo" height="100" width="100" style="opacity:0.2;">
                  <p style="position:relative;left: 45px;bottom: 110px;color: green;font-family: cursive;font-size: 25px">Aquaria</p>
              </a>
              <a href="" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:450px;font-size: 20px;bottom: -20px" class="p2">Services</p>
              </a>
              <a href="hp.html" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:550px;font-size: 20px;bottom: -20px"class="p2">Home</p>
              </a>
              <a href="Properties.html" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:630px;font-size: 20px;bottom: -20px"class="p2">Properties</p>
              </a>
              <a href="" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:750px;font-size: 20px;bottom: -20px"class="p2">Payment</p>
              </a>
             
              <a href="feedback.html" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:850px;font-size: 20px;bottom: -20px"class="p2">Feedback</p>
              </a>
              <a href="profile.html" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:960px;font-size: 20px;bottom: -20px"class="p2">My Profile</p>
              </a>
              <a href="help.html" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:1080px;font-size: 20px;bottom: -20px"class="p2">Contact</p>
              </a>
              <a href="help.html" style="text-decoration: none">
                  <p style="color: green;position:absolute;left:1180px;font-size: 20px;bottom: -20px"class="p2">Help</p>
              </a>
              
                 <a href="hpin.html">
                  <p style="color: green;position:absolute;left:1250px;font-size: 20px;bottom: -20px" class="p2">Logout</p>
              
                 </a> 
          </div>

      </header>
    </div>

        <div class="container">    
          <form>  
            <h2 style="color:rgb(11, 77, 114)">My Properties:</h2>
            <table style="position: relative;left: 70px;">
              <thead><tr>
                <th>S.No</th>
                <th>Registration No</th>
                <th>Address</th>
                <th>Type</th>
                <th>Size</th>
              </thead>
              <tbody>
                <?php
                    if(is_array($fetchData)){      
                    $sn=1;
                    foreach($fetchData as $data){
                  ?>
                    <tr>
                    <td><?php echo $data['s.no']??''; ?></td>
                    <td><?php echo $data['registrationno']??''; ?></td>
                    <td><?php echo $data['address']??''; ?></td>
                    <td><?php echo $data['type']??''; ?></td>
                    <td><?php echo $data['size']??''; ?></td>  
                   </tr>
                   <?php
                    $sn++;}}else{ ?>
                    <tr>
                      <td colspan="5">
                  <?php echo $fetchData; ?>
                </td>
                  <tr>
                  <?php
                  }?>
                  </tbody>

              
              
            </table>  

            <br>
            <footer style="background-color: black;position: relative;top: 650px;width: 1350px;">
              <br>
              <br>
              <div class="row 1" style="position: relative;right:80px">
                  <a href="https://www.facebook.com/Cristiano" target="_blank"><img src="fb.png" style="position: relative;;left: 600px" height="25" width="25"></a>
                  <a href="https://www.instagram.com/jeffbezos/?hl=en" target="_blank"><img src="insta.png" style="position: relative;;left: 650px" height="25" width="25"></a>
                  <a href="" target="_blank"><img src="twitch.png" style="position: relative;left:700px" height="25" width="25"></a>
                  <a href="https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="twitter.png" style="position: relative;;left: 750px" height="25" width="25"></a>
                  <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank"><img src="youtube.png" style="position: relative;;left: 800px;bottom: 2px"></a>
          
              </div>
              <br>
              <br>
              <div class="row 2" style="position: relative;right:60px">
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 350px;text-decoration:none;">Get the Aquaria app
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 370px;text-decoration:none;">Help
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 390px;text-decoration:none;">Site Index
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 410px;text-decoration:none;">AquariaPro
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 430px;text-decoration:none;">About us
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 450px;text-decoration:none;">Aquaria Developers
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
          
              </div>
              <br>
              <div class="row 3" style="position: relative;right:60px">
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 350px;text-decoration:none;">Press Room
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 370px;text-decoration:none;">Advertising
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 390px;text-decoration:none;">Jobs
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 410px;text-decoration:none;">Condtions of Use
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 430px;text-decoration:none;">Privacy Policy
                          <img src="arrow.png" height="20" width="20" style="position: relative;top:5px;right: 5px">
                      </a>
                  <a href="" target="_blank" style="color: white;font-weight: bold;position: relative;left: 450px;text-decoration:none;">Internet-Based Ads
                          <img src="arrow.png" height="20" width="20" style="position:relative;top:5px;right: 5px">
                      </a>
              </div>
              <br>
          
              <center>
                  <div class="row 4">
                      <p style="color: white;font-weight: bold">an&nbsp;<img src="amrita.png" width="70" height="30" style="position: relative;top:13px">&nbsp;Company</p>
                  </div>
              </center>
              <br>
              <center>
                  <p style="color: grey;font-size:small">© 2021-2022 by Aquaria.com, Inc.</p>
              </center>
              <br>
          
          </footer>
          
      </body>
      
  </html>

            
        

        
    </body>
    
</html>