<style>
   .active_{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'../js_window_object_header.php'?>
<!-- Start Main Content -->
<h2 class="center">Window setTimeout()<span><a href="https://www.w3schools.com/jsref/met_win_settimeout.asp" target="_blank"> Details</a></span></h2>
<div class="mark">
The <span class="itc">setTimeout()</span> method calls a function after a number of milliseconds.   <br>
   <br>
1 second = 1000 milliseconds.
</div>

<h2>Syntax</h2>
<div class="code_p">
   <span class="itc">setTimeout</span>(function, milliseconds, param1, param2, ...)
</div>

<button class="btn_block accordion itc" >Example-1 </button>
<div class="panel">
<p>Click the button. Wait 3 seconds for alert "Hello".</p>

<button onclick="myFunction()">Try it</button>

<script>
   let timeout;

   function myFunction() {
   timeout = setTimeout(alertFunc, 3000);
   }

   function alertFunc() {
   alert("Hello!");
   }
</script> 
</div><!-- End panel-->

<button class="btn_block accordion itc" >Code of Example -1 </button>
<div class="panel">
   <h2>html Code</h2>
   <div class="code_p">
      &lt;button onclick="myFunction()"&gt;Try it&lt;/button&gt;
   </div>  
   <h2>JS code</h2>
   <pre class="code_p">
      let timeout;

      function myFunction() {
      timeout = setTimeout(alertFunc, 3000);
      }

      function alertFunc() {
      alert("Hello!");
      }
   </pre>
</div><!-- End panel-->

<button class="btn_block accordion itc" >Example-2 </button>
<div class="panel">
   <p>Click the button to open a new window and close the window after three seconds (3000 milliseconds)</p>

   <button onclick="openWin()">Open "myWindow"</button>

   <script>
   function openWin() {
   const myWindow = window.open("", "", "width=200, height=100");
   setTimeout(function() {myWindow.close()}, 3000);
   }

   </script>
</div><!-- End panel-->

<!-- Code of Example -2 -->
<button class="btn_block accordion itc" >Code of Example -2 </button>
<div class="panel">
   <h2>html Code</h2>
   <div class="code_p">
      &lt;button onclick="openWin()"&gt;Open "myWindow"&lt;/button&gt;
   </div>  
   <h2>JS code</h2>
   <pre class="code_p">
   function openWin() {
  const myWindow = window.open("", "", "width=200, height=100");
  setTimeout(function() {myWindow.close()}, 3000);
   }

   </pre>
</div><!-- End panel-->
<button class="btn_block accordion itc" > </button>
<div class="panel">
   
</div><!-- End panel-->
<!-- <button class="btn_block accordion itc" > </button>
<div class="panel">
   <button class="btn_block"><a href="" target="_blank">Watch video</a></button>
</div> -->
<!-- End panel-->

<!-- End Main Content -->
<!--js_common footer -->
<?php include('../../js_common_footer.php') ?>
