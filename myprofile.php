<!DOCTYPE html>
<html> <head><link rel="stylesheet" type="text/css" href="comment.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <style>
body {
			    font-family: arial;
			}
			button {
			    padding:10px;
			    background-color:#6a67ce;
			    color: #FFFFFF;
			    border: 0px;
			    cursor:pointer;
			    border-radius: 5px;
			}
			#output {
			    background-color:#F9F9F9;
			    padding:10px;
			    width: 100%;
			    margin-top:20px;
			    line-height:30px;
			}
			.hide {
			    display:none;
			}
			.show {
			    
			}
.custom-scrollbar-js,
    .custom-scrollbar-css {
      height: 200px;
    }
    
    
    /* Custom Scrollbar using CSS */
    .custom-scrollbar-css {
      overflow-y: scroll;
    }
    
    /* scrollbar width */
    .custom-scrollbar-css::-webkit-scrollbar {
      width: 5px;
    }
    
    /* scrollbar track */
    .custom-scrollbar-css::-webkit-scrollbar-track {
      background: #eee;
    }
    
    /* scrollbar handle */
    .custom-scrollbar-css::-webkit-scrollbar-thumb {
      border-radius: 1rem;
      background-color: #00d2ff;
      background-image: linear-gradient(to top, #00d2ff 0%, #3a7bd5 100%);
    }
    
    
    body {
      min-height: 100vh;
      background-color: #00d2ff;
      background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5 100%);
    }
    .img{
      float:left;
    position:absolute; top: 100px; left: 0px; }
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style></head>
    <body>
    <nav class="navbar navbar-expand-xl bg-light navbar-blue fixed-top">  
      <ul class="navbar-nav">
        <li class="nav-item">
          <li class="col-sm-2">
          <a class="nav-link" href="homepage1.html">HOME</a>
        </li></li>
        <li class="nav-item">
          <li class="col-sm-2">
          <a class="nav-link" href="aboutus.html">ABOUT US</a>
        </li></li>
        <li class="nav-item">
          <li class="col-sm-3">
          <a class="nav-link" href="products.html">ARGICULTURE-MACHINERY</a>
        </li></li>
        <li class="nav-item">
          <li class="col-sm-2">
          <a class="nav-link" href="insurence.html">INSURENCES</a>
        </li></li>
        <li class="nav-item">
          <li class="col-sm-2">
          <a class="nav-link" href="myprofile.php">MY PROFILE</a>
        </li></li>
        <li class="nav-item">
          <li class="col-sm-3">
          <a class="nav-link" href="myproducts.html">CROPS-PRODUCED</a>
        </li></li>
        <li class="nav-item">
            <li class="col-sm-2">
            <a class="nav-link" href="homepage.html">LOGOUT</a>
          </li></li>
        </ul>
  </nav><br><br><br>
      <div class="container-fluid">
        <h2><center>MY PROFILE</center><div class="img">
        <img src="person.png" width="150px" height="200px">
        </div> <br><br><br><br><br><br> <?php if(isset($_POST['email'])){$aadhar = $_POST['email'];
      echo $aadhar;}else {echo 'FARMER';}?></h2></div>
       <center><h1>DISCUSSION FORUM</h1></center>
        <div class="container">
        <div class="card mb-4">
          
                    <div class="card-body p-5">
                      <h4 class="mb-4"> Real Agriculture</h4>
                      <div class="custom-scrollbar-css p-2">
                        <p class="font-italic"> Real Agriculture is focused on the issues that are impacting
                           agriculture. Our site is focused on getting you the opinions on the issues so that you
                            not only get the news but the insight into what the news means to your business.
                             Whether you are a farmer, employed in industry, or government we have content that 
                             is applicable to you and your business. Real Agriculture is focused on the issues that are impacting
                           agriculture. Our site is focused on getting you the opinions on the issues so that you
                            not only get the news but the insight into what the news means to your business.
                             Whether you are a farmer, employed in industry, or government we have content that 
                             is applicable to you and your business. Real Agriculture is focused on the issues that are impacting
                           agriculture. Our site is focused on getting you the opinions on the issues so that you
                            not only get the news but the insight into what the news means to your business.
                             Whether you are a farmer, employed in industry, or government we have content that 
                             is applicable to you and your business. </div>
                            <button id="myBtn">Comment</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div class="container-sm">
  <form action="myprofile.php" method="post">
    <div class="row">
      <div class="col-sm-0">
        <label for="subject"><b><h1>COMMENT</h1></b></label>
      </div>
      <div class="col-sm-12">
        <textarea id="subject" name="subject" placeholder="Your Comment..." style="height:200px "></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
    
  </form>
</div>
  </div> </div>
        </div>   <?php
                          if(isset($_POST['subject'])){
                            $comment = $_POST['subject'];
                            echo $comment;}
                            else{
                              echo "comment ^_^";
                            }?>
                            
                           <br> <?php echo  "that was a very good post!!" ?>
                           <br><?php echo "amazing post!!";
                          ?> 
                  </div>
                 
                
                      <div class="card mb-4">
                        <div class="card-body p-5">
                          <h4 class="mb-4">Farmers</h4>
                          <div class="custom-scrollbar-css p-2">
                            <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, soluta, cupiditate. Ad ab, delectus impedit similique voluptate fuga nemo iure, nobis dolorem dolor, quia voluptas aperiam doloremque commodi id? In? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                 reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                                 , sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                 . Dolores, soluta, cupiditate. Ad ab, delectus impedit similique voluptate fuga nemo iure, nobis dolorem dolor, quia 
                                 voluptas aperiam doloremque commodi id? In? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                  ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, soluta, cupiditate. Ad ab, delectus impedit similique voluptate fuga nemo iure, nobis dolorem dolor, quia voluptas aperiam doloremque commodi id? In? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div><button id="myBtn">Comment</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div class="container">
  <form action="myprofile.php" method="post">
    
     
    <div class="row">
      <div class="col-15">
        <label for="subject"><b>COMMENT</b></label>
      </div>
      <div class="col-85">
        <textarea id="subject" name="subject" placeholder="Your Comment..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
    
  </form>
</div>
  </div> </div>
        

</div>

                      </div>
                      <div class="card mb-4">
                        <div class="card-body p-5">
                          <h4 class="mb-4">Jai Jawan Jai kisan</h4>
                          <div class="custom-scrollbar-css p-2">
                            <p>Each day, our website, Farms.com, welcomes up to 
                              25,000 farmers and agri-business professionals helping them to find
                               the latest agriculture information, farming news, commentaries, weather,
                                auctions, markets, & new products information.</p>
                          </div><button id="myBtn">Comment</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div class="container">
  <form action="myprofile.php" method="post">
    
     
    <div class="row">
      <div class="col-15">
        <label for="subject"><b>COMMENT</b></label>
      </div>
      <div class="col-85">
        <textarea id="subject" name="subject" placeholder="Your Comment..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
    
  </form>
</div>
  </div> </div></div></div>
                      
                      
                      <div class="card mb-4">
                        <div class="card-body p-5">
                        
                          <?php
                          if(isset($_POST['msg'])){
                            $post = $_POST['msg'];
                            echo $post;}
                            else{
                              echo 'we farmers need your support :)';
                            }
                          ?><br>
                        <button id="myBtn">Comment</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<div class="container">
  <form action="myprofile.php" method="post">
    
     
    <div class="row">
      <div class="col-15">
        <label for="subject"><b>COMMENT</b></label>
      </div>
      <div class="col-85">
        <textarea id="subject" name="subject" placeholder="Your Comment..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
    
  </form>
</div>
  </div> </div>
                      

</div>


        </div>
        <button class="open-button" onclick="openForm()">POST</button>

<div class="chat-popup" id="myForm">
  <form  method="post" class="form-container">
    <h3>POST</h3>
    
    <label for="msg"><b>Message</b></label>
    
      <textarea placeholder="Type message.." name="msg" id="output" required>
      </textarea>
    <button type="button" onclick="runSpeechRecognition()">Speech to Text</button> &nbsp; <span id="action"></span></p>
    <button type="submit" class="btn">Post</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

			/* JS comes here */
		    function runSpeechRecognition() {
		        // get output div reference
		        var output = document.getElementById("output");
		        // get action element reference
		        var action = document.getElementById("action");
                // new speech recognition object
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    action.innerHTML = "<small>listening, please speak...</small>";
                };
                
                recognition.onspeechend = function() {
                    action.innerHTML = "<small>stopped listening, hope you are done...</small>";
                    recognition.stop();
                }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                          output.innerHTML =  transcript;
                    output.classList.remove("form-container textarea");
                };
              
                 // start recognition
                 recognition.start();
	        }

          // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
		
</script>  
    </body>
</html>