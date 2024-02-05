<style>
   .active_19{
      <?php include'../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_topics_header.php'?>
<!-- Start Main Content -->

<h2 class="center">JavaScript Break & Continue<span><a href="https://www.w3schools.com/js/js_break.asp" target="_blank"> Details</a></span></h2>
<button id="toggle_b1" class="btn_block">JS Break</button>
   <div class="code_b1"><!-- Start Basic div -->
      <h4>The break statement "jumps out" of a loop.</h4>
      <p>A loop with a <b>break</b> statement.</p>
      <pre class="code_p">
      const numbers =[1, 2, 3, 4, 5, 6, 7, 8, 9];
      for(let i = 0; i < numbers.length; i++){
         let value = numbers[i];
         if(numbers[i] > 3){
            break;
         }
         console.log(value)
      }
   </pre>
    <div class="output">
      <h2>Output</h2>
      1 <br>
      2 <br>
      3
    </div>
    
   </div><!-- End code_b1 -->
   <button id="toggle_b2" class="btn_block">JS Continue</button>
   <div class="code_b2">
   <h4>
   The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
   </h4>
   <p>A loop with a <b>continue</b> statement.</p>
      <h2>Example</h2>
   <p>A loop which will skip the step where i < 0.</p>
      <pre class="code_p">
      const numbers =[1, -2, 3, 4, -5, 6, 7, 8, 9];
      for(let i = 0; i < numbers.length; i++){
         let value = numbers[i];
         if(numbers[i] < 0){
            continue;
         }
         console.log(value)
      }
   </pre>
    <pre class="output">
      <h2>Output</h2>
      1
      3
      4
      6
      7
      8
      9
    </pre>
    
   </div><!-- End code_b2 -->
<button class="btn_block"><a href="../js_topics_video/024_10.php" target="_blank">Watch the video <span class="itc">24_10</span> </a></button>
<!-- End Main Content -->
<!-- footer -->
<?php include('../../common_footer.php') ?>
