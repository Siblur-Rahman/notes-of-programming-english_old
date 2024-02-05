<style>
   .active_17{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_topics_header.php'?>
<!-- Start Main Content -->

   <h2 class="center">JavaScript Closures<span><a href="https://www.w3schools.com/js/js_function_closures.asp" target="_blank"> Details</a></span></h2>
   <button id="toggle_b" class="btn_block"></button>
   <h4>
   A closure is a feature of JavaScript that allows inner functions to access the outer scope of a function.
   </h4>
   <div class="mark">
   JavaScript variables can belong to the local or global scope.  <br>
   <br>
   Global variables can be made local (private) with closures.
   </div>
   <h2>Example</h2>
   <p class="code_p">
   function add(){ <br>
    let count = 0; <br>
    return function(){ <br>
        count++; <br>
        return count; <br>
    } <br>
   } <br>
   const result1 = add(); <br>
   console.log(result1()); <br>
   console.log(result1()); <br>
   console.log(result1()); <br>
   console.log(result1()); <br>
   console.log(result1()); <br>
   console.log(result1()); <br>
   <br>
   const result2 = add(); <br>
   console.log(result2()); <br>
   console.log(result2()); <br>
   console.log(result2()); <br>
   console.log(result2()); <br>
   console.log(result2()); <br>
   console.log(result2()); <br>
   </p>
   <pre class="output">
   1
   2
   3
   4
   5
   6
   1
   2
   3
   4
   5
   6
   </pre>
   <button class="btn_block"><a href="../js_topics_video/024_8.php" target="_blank">Watch Video <span class="itc">24_8</span></a></button>
<div class="code_b">
   <h2></h2>
</div><!-- End code_b -->

<button id="toggle_b" class="btn_block"></button>
<div class="code_b">
   <h2></h2>
<button class="btn_block"><a href="" target="_blank">Watch Video</a></button>
</div><!-- End code_b -->

<!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
