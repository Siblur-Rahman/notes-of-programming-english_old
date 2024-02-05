<style>
   .json_active_parse{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_json_header.php'?>
<!-- Start Main Content -->000.introduction

   <h2 class="center">JSON.parse()<span><a href="https://www.w3schools.com/js/js_json_parse.asp" target="_blank"> Details</a></span></h2>
   <div class="mark">
   A common use of JSON is to exchange data to/from a web server. <br>

   When receiving data from a web server, the data is always a string. <br>

   Parse the data with JSON.parse(), and the data becomes a JavaScript object.
   </div>
   <h2>Creating an Object from a JSON String</h2>
   <div class="output">
   <h4>Output</h4>
      <p id="demo"></p>
   </div>
   <div class="code_p">
      const txt = '{"name":"John", "age":30, "city":"New York"}' <br>
      const obj = JSON.parse(txt); <br>
      document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
   </div>
   <script>
   const txt = '{"name":"John", "age":30, "city":"New York"}'
   const obj = JSON.parse(txt);
   document.getElementById("demo").innerHTML = obj.name + ", " + obj.age;
   </script>
   <button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
<button class="btn_block"><a href="" target="_blank">Watch Video <span class="itc">25_4 4:10</span></a></button>
</div><!-- End code_b -->
<!-- 
<button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
<button class="btn_block"><a href="" target="_blank">Watch Video</a></button>
</div> -->
<!-- End code_b -->

<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
