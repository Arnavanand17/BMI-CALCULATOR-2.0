<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>The BMI Calculator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="chat_bot_c.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />


  <script src="chat_bot_j.js" defer></script>
  <script src="newscript.js" defer></script>
  <script src="translator.js"></script>

  <script>
    function loadGoogleTranslate() {
      new google.translate.TranslateElement("myid")
    }
//
    function calculateBMI() {
      var height = parseFloat(document.getElementById("height").value);
      var weight = parseFloat(document.getElementById("weight").value);

      if (isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
        alert("Please enter valid height and weight values.");
        return;
      }

      var bmi = weight / (height * height);

      document.getElementById("result").innerHTML = "Your BMI is: " + bmi.toFixed(2);
    }
  </script>
</head>


<div id="preloader"></div>



<body>
  <script>

    function loadGoogleTranslate() {

      new google.translate.TranslateElement("myid")

    }

  </script>



  <div id="myid">Choose Language</div>

  <script>
    function calculateBMI() {
      var height = parseFloat(document.getElementById("height").value);
      var weight = parseFloat(document.getElementById("weight").value);

      if (isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
        alert("Please enter valid height and weight values.");
        return;
      }

      var bmi = weight / (height * height);

      document.getElementById("result").innerHTML = "Your BMI is: " + bmi.toFixed(2);

      function loadGoogleTranslate() {

        new google.translate.TranslateElement("myid")

      }
    }
  </script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The BMI Calculator</title>
  <link rel="stylesheet" href="style.css">

  <header> 

        <div class="logo"> 
        </div>
          
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="bmi.html">Info</a></li>
        
        <li><a href="https://bmidoctors.com/">Consult Doctor</a></li>
        <li><a href="https://unibmi.my.canva.site/chitkara">About Us</a></li>
        <li><a href="loginnew2.php">Sign in </a></li>
      </ul>
    </nav>
    
  </header>





<!-- <header>    
   <div class="logo" >  
     <nav>
     <ul>
       <li><a href="#">Home</a></li>
       <li><a href="bmi.html">Info</a></li>

       <li><a href="https://bmidoctors.com/">Consult Doctor</a></li>
       <li><a href="https://unibmi.my.canva.site/chitkara">About Us</a></li>
       <li><a href="loginnew2.php">Sign in </a></li>
      </ul>
     </nav> 
   </div> 
</header>   -->

      

  <div class="bg">
    <br><br>


    <div class="content"> BMI Calculator </div><br><br>
    <div class="masala"> Body mass index (BMI) is a measure of your weight
      relative to your height <br> and functions as a rough estimate of body fat.
      When you enter your height<br> To calculate your BMI formula is :weight (kg) / height (m)². </div>

  </div>
  <br><br><br><br><br>


  <section id="servicesx">
    <div class="services1">
      <h4 style="font: size 16px; text-align:center">SERVICES</h4>
    </div>
    <br><br><br>
    <div class="services2">
      <h3 style="font:size 36px;  text-align: center;">Body Mass Index Categories</h3>
    </div><br><br><br><br><br>

    <div class="photos"></div>

    <br></br><br></br>
    <br></br>

    <div class="BMI">
        <h3><u> BMI Calculator</u></h3>
    <div class="cal">
    <div class="BMI">
        <h3><u> BMI Calculator</u></h3>

  <form id="bmiForm">
    <br><label for="Name">Name:</label>
    <input type="text" id="Name" placeholder="Enter Name"><br>
    <label for="Age">Age:</label>
    <input type="number" id="Age" placeholder="Enter Age"><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male"> &nbsp Male
    <input type="radio" id="female" name="gender" value="female"> &nbsp  Female<br><br>



    <!-- <fieldset id="heightFields">  -->
    <!-- <label for="gender">Height:</label> -->
      <!-- <legend>Height:</legend> -->
      <!-- <label for="heightFeet">Feet:</label> -->
      <hr><div id="heightFeetInches"><br>
      <label for="heightCm">Height :</label>
        
        <input type="number" id="heightFeet" placeholder="Feet">
        <!-- <label for="heightInches">Inches:</label> -->
        <input type="number" id="heightInches" placeholder="Inches">
        <select id="heightUnit" onchange="toggleHeightInputs()">
      <option value="feetInches">Feet & Inches</option>
      <option value="cm">Centimeters</option>
    </select>
      </div>
      <div id="heightCm" style="display: none;">
        
        <input type="number" id="heightCmValue" placeholder="Enter Height (cm)">
      </div>
    </fieldset>
    <br><br>

    

    <fieldset id="weightFields"><br>
      <!-- <legend>Weight:</legend> -->
      <div id="weightKgPounds">
        <label for="weight">Weight:</label>
        <input type="number" id="weight" placeholder="Enter Weight">
        <select id="weightUnit" onchange="toggleWeightInputs()">
      <option value="kg">Kilograms</option>
      <option value="pounds">Pounds</option>
    </select>
      </div>
      <div id="weightPounds" style="display: none;">
        <label for="weightPounds">Weight (pounds):</label>
        <input type="number" id="weightPoundsValue" placeholder="Enter Weight (pounds)">
      </div><br>
    </fieldset>

   
    <!-- <select id="weightUnit" onchange="toggleWeightInputs()">
      <option value="kg">Kilograms</option>
      <option value="pounds">Pounds</option>
    </select><br><br> -->

    <button type="button" onclick="calculateBMI()">Calculate BMI</button>
  </form>
  <br>
  <div id="result"></div>
      <!-- <div class="BMI">
        <h3><u> BMI Calculator</u></h3>
        <br><label for="Name">Name:</label>
    <input type="text" id="Name" placeholder="Enter Name"><br><br>
    &nbsp;&nbsp;<label for="Name">Age:</label>
    <input type="text" id="Age" placeholder="Enter Age"><br><br>
    <input type="radio" name="r1">Male
    <input type="radio" name="r1">Female<br><br>

    <label for="height">Height (meters):</label>
    <input type="text" id="height" placeholder="(in m)"><br><br>
    <label for="weight">Weight (kilograms):</label>
    <input type="text" id="weight" placeholder="(in kg)"><br><br>
    <button onclick="calculateBMI()">Calculate BMI</button>
    <br>
     
    <p id="result"></p> -->
    <button type="button">SAVE</button>     <button type="button">PROGRESS</button> 
      </div>
      </div>
<div class= "Quote">
<p style="text-align:center;font-size:30px;margin-top:150px;">Take care of your body. It's the only place you have to live."<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- Jim Rohn  
</div>
    
  </section>





  <div id="box">
    

    <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Chatbot</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>
  </div>

  <br><br><br><br><br>


  <!--<div class="imgslider" style="margin: 0; padding: 0; box-sizing: border-box;">
              </div> 
              <div class="slider-frame">
                <div class="slide-images">
                  <div class="img-container">
                    <img src="pics/fruits.webp">
                      </div>

                      <div class="img-container">
                        <img src="pics/get fit today black.webp">
                      </div>

                      <div class="img-container">

                        <img src="pics/get fit today.webp">
                      </div>

                </div>
              </div>

            </body>

             -->

















  <br><br><br><br><br><br><br><br>
  <footer>
    <div class="contact-info">
      <h3>Contact Information</h3>
      <p style="text-align:left"> Email: arnav0198.be23@chitkara.edu.in ; <br><br>anmol0200.be23@chitkara.edu.in ;<br><br>
        preet0199.be23@chitkara.edu.in
        </li>
      </p>
      <p style="text-align:left">Phone: +91 8699120248</p>
      <p style="text-align:right">Address: Chitkara University , Rajpura, India</p>
    </div>
    <div class="footer-links">
      <ul>
        <li style="text-align:right"><a href="#">Privacy Policy</a></li>
        <li style="text-align:right"><a href="#">Terms of Service</a></li>
        <li style="text-align:right"><a href="#">FAQ</a></li>
        <li style="text-align:right"> <a href="#">Sitemap</a></li>
      </ul>
    </div>
    <div class="social-media">
      <h3>Follow Us</h3>
      <ul>
        <li><a href="#" class="fab fa-facebook"></a></li>
        <li><a href="#" class="fab fa-twitter"></a></li>
        <li><a href="#" class="fab fa-linkedin"></a></li>
      </ul>
    </div>
    <p>&copy; 2023 BMI CALCULATOR</p>
  </footer>

  <br><br>
  <!-- <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.175135209826!2d76.65720287582354!3d30.516086474689597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fc32344a6e2d7%3A0x81b346dee91799ca!2sChitkara%20University!5e0!3m2!1sen!2sin!4v1701543956092!5m2!1sen!2sin"
    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe> -->
</body>

</html>
