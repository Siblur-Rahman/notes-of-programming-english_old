<style>
   .intro_active{
      <?php include'../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'../web_api_header.php'?>
<!-- Start Main Content -->

   <h2 class="center">Web APIs - Introduction<span><a href="https://www.w3schools.com/js/js_api_intro.asp" target="_blank"> Details</a></span></h2>
   <div class="mark">
      A Web API is a developer's dream. <br>
      <br>
      It can extend the functionality of the browser <br>
      It can greatly simplify complex functions <br>
      It can provide easy syntax to complex code
   </div>
   <div class="bg_gray">
      <h3>What is Web API?</h3>
      API stands for Application Programming Interface. <br>

      A Web API is an application programming interface for the Web. <br>

      A Browser API can extend the functionality of a web browser. <br>

      A Server API can extend the functionality of a web server.
      <hr>
      <h3>Browser APIs</h3>
      All browsers have a set of built-in Web APIs to support complex operations, and to help accessing data. <br>

      For example, the Geolocation API can return the coordinates of where the browser is located.
   </div>
   <h2>Example</h2>
   Get the latitude and longitude of the user's position:
   <div class="code_p">
      <h2>JavaScript Geolocation</h2>

      <p>Click the button to get your coordinates.</p>

      <button onclick="getLocation()">Try It</button>

      <p id="demo"></p>

      <script>
      const x = document.getElementById("demo");

      function getLocation() {
      try {
         navigator.geolocation.getCurrentPosition(showPosition);
      } catch {
         x.innerHTML = err;
      }
      }

      function showPosition(position) {
      x.innerHTML = "Latitude: " + position.coords.latitude + 
      "<br>Longitude: " + position.coords.longitude;
      }
      </script>
   </div>
   <div class="bg_gray">
      <h2>Third Party APIs</h2>
      Third party APIs are not built into your browser. <br>
          <br>
      To use these APIs, you will have to download the code from the Web. <br>
      <h2>Examples</h2>
      YouTube API - Allows you to display videos on a web site. <br>
      Twitter API - Allows you to display Tweets on a web site. <br>
      Facebook API - Allows you to display Facebook info on a web site.
   </div>
<button class="btn_block"><a href="../js_topics_video/025_4.php" target="_blank">Watch the video<span class="itc"> 25_4</span></a></button>
   <button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
   <button class="btn_block"><a href="../js_topics_video" target="_blank">Watch the video<span class="itc"> </span></a></button>
</div><!-- End code_b -->

<button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
<button class="btn_block"><a href="../js_topics_video" target="_blank">Watch the video<span class="itc"> </span></a></button>
</div><!-- End code_b -->

<button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
<button class="btn_block"><a href="../js_topics_video" target="_blank">Watch the video<span class="itc"> </span></a></button>
</div><!-- End code_b -->

<button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
<button class="btn_block"><a href="../js_topics_video" target="_blank">Watch the video<span class="itc"> </span></a></button>
</div><!-- End code_b -->

<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
