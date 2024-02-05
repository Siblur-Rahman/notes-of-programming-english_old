<style>
   .active_6{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'../js_topics_header.php'?>
<!-- Start Main Content -->

   <h2 class="center">JavaScript Conditions<span><a href="" target="_blank"> Details</a></span></h2>
<h4>The switch statement is used to perform different actions based on different conditions.</h4>
<pre>
The JavaScript Switch Statement
Use the switch statement to select one of many code blocks to be executed.

Syntax
switch(expression) {
  case x:
    // code block
    break;
  case y:
    // code block
    break;
  default:
    // code block
}
</pre>
<button class="accordion">Example-1</button>
<div class="panel">
  <input type="number" id="ex1Input"><button id="ex1_btn_1">Check Even & Odd Number</button>
  <h2>result : <span id="ex1_output" class="itc"></span></h2>
  <script>
   
   let ex1_output= document.getElementById("ex1_output");
   let ex1_btn_1 = document.getElementById("ex1_btn_1");

   ex1_output.style.fontSize ="30px";
   

  //  Enen & Odd number Checker Function
   function checkEvenOddNumber(number){
    // if(number==""){
    //   return "You didn't input a Number"
    // }else if(number % 2 ===0){
    //   return "Input number is a Enen Number"
    // }else if(number%2!==0){
    //   return "Input number is a Odd Number"
    // }
    switch(true){
      case (number==""):
        return "You didn't input a Number";
        break;
        case (number % 2 ===0):
          return "Input number is a Even Number";
        break;
      case (number%2!==0):
        return "Input number is a Odd Number";
        break;
       default:
        return "The checker is not workng"    
    }
    
   }

   ex1_btn_1.addEventListener("click", function(){
    let inputData = document.getElementById("ex1Input").value;
    ex1_output.innerText=checkEvenOddNumber(inputData);
   })
  </script>
</div>
<button class="accordion">Example-</button>
<div class="panel">
  <input type="number"><button id="ex_btn_">Check Odd & Event Number</button>
</div>
<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
