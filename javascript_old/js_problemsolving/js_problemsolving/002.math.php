<style>
   .active_2{
      <?php include'../../../active_1.php'?>
   }
   span{
      font-size: 30px;
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->

   <h3 class="center"> 15-3 Random number, random number between 1 to 6<span class="itc">With Jhankar Mahbub</a></span></h3>
      <input type="number" id="number" placeholder="Enter Number">
      <button id="btn">Click to Conver the Number</button>
      <h3 id="floor"></h3>
      <h3 id="ceil"></h3>
      <h3 id="round"></h3>
      <h3 id="random"></h3>
      <h3 id="round_random"></h3>
      <span class="itc"></span>
   <!-- Code Button -->
   <button class="block_button" id="toggle_1">Math</button>
   <pre class="code_1">
   function changen(n){
    var result1 = Math.floor(n);
    var result2 = Math.ceil(n);
    var result3 = Math.round(n);
    var random = Math.random() *10;
    var result4 = Math.round(random);
    document.getElementById("floor").innerHTML = result1 + "<span class="itc"> is floor of </span>" + n;
    document.getElementById("ceil").innerHTML = result2  + " is ceil of " + n;;
    document.getElementById("round").innerHTML = result3  + " is round of " + n;
    document.getElementById("random").innerHTML = random  + " is random";
    document.getElementById("round_random").innerHTML = result4  + " is round of " + random;
}

var btn = document.getElementById("btn");
btn.addEventListener('click', function(){
    var number = document.getElementById("number").value;
    return changen(number);
})
   </pre>
   <script> 
function changen(n){
    var result1 = Math.floor(n);
    var result2 = Math.ceil(n);
    var result3 = Math.round(n);
    var random = Math.random() *10;
    var result4 = Math.round(random);
   //  document.getElementById("floor").innerHTML = result1 + ` is floor of ` + n;
   document.getElementById("floor").innerHTML = result1 + `<span class="itc"> is floor of </span>` + n;
    document.getElementById("ceil").innerHTML = result2  + `<span class="itc"> is Ceil of </span>` + n;
    document.getElementById("round").innerHTML = result3  + `<span class="itc"> is round of </span>` + n;
    document.getElementById("random").innerHTML = random  + `<span class="itc"> is Random </span>`;
    document.getElementById("round_random").innerHTML = result4  + `<span class="itc"> is round of </span>` + random;
}

var btn = document.getElementById("btn");
btn.addEventListener('click', function(){
    var number = document.getElementById("number").value;
    return changen(number);
})
   </script>
</div><!-- End code_b1 -->
      
<button id="toggle_b2"></button>
   <div class="code_b2">
    
   
   <!-- Code Button -->
   <button class="block_button" id="toggle_"></button>
   <pre class="code_2">

   </pre>
</div><!-- End code_b2 -->

<button id="toggle_b3"></button>
   <div class="code_b3">


   <button class="block_button" id="toggle_3"></button>
   <pre class="code_3">

   </pre>
</div><!-- End code_b3 -->

<button id="toggle_b4"></button>
   <div class="code_b4">


   <button class="block_button" id="toggle_4"></button>
   <pre class="code_4">

   </pre>
</div><!-- End code_b -->

<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
