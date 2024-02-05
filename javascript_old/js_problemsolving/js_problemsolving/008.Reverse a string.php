<style>
   .active_{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->

   <h3 class="center"> 15-9 Reverse a string<span class="itc">With Jhankar Mahbub</span></h3>
   <input type="text" id="string" placeholder="Enter Your Text">
<button id="btn">Click to Reverse a String</button>
<h3><span id="demo"></span></h3>
<script>
   var btn = document.getElementById("btn");
var demo = document.getElementById("demo");
function reverseString(str){
   var reverse = "";
   for(var i =0; i < str.length; i++){
      var char = str[i];

      reverse = str[i] + reverse;
   }
   return reverse;
}

btn.addEventListener('click', function(){
   var statement = "";
   statement = document.getElementById("string").value;

var forAlien = reverseString(statement);

demo.innerHTML = forAlien;
})
</script>

<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
