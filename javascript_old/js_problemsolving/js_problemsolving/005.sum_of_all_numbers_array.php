<style>
   .active_5{
      <?php include'../../../active_1.php'?>
   }
   #demo2{
      font-size: 30px;
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->

<h3 class="center">15-6 Sum of all numbers in an array <span class="itc">With Jhankar Mahbub</span></h3>
<button class="code">sum of all numbers in an Array statically</button>
<div class="code_p">
  <pre>
   let marks = [60, 70, 46, 90];
   let sum = 0;
   for(let i = 0; i < marks.length; i++){
      let mark = marks[i];
      sum += mark;
   }
   console.log(sum)
  </pre>
</div>

<button class="accordion">sum of all numbers in an Array Dynamically</button>
<div class="panel">
<input type="number" class="num1" placeholder="Enter Number">
<input type="number" class="num2" placeholder="Enter Number">
<input type="number" class="num3" placeholder="Enter Number">
<input type="number" class="num4" placeholder="Enter Number">
<input type="number" class="num5" placeholder="Enter Number">
<button class="btn">Click to Sum all Number</button>
<h3>Result: <span class="demo2" class="itc"></span></h3>
<script>
   function myArray(marks){
    let maxValue = marks[0]
    for(let i = 0; i < marks.length; i++){
        let value = marks[i];
        if(value > maxValue){
           maxValue = value
        }
     }
     document.getElementByClass("demo2").innerHTML = (maxValue)
   }
   btn.addEventListener('click', function(){
      var a = document.getElementByClass("num1").value;
      var b = document.getElementByClass("num2").value;
      var c = document.getElementByClass("num3").value;
      var d = document.getElementByClass("num4").value;
      var e = document.getElementByClass("num5").value;
      var marks = [a, b, c, d, e];
      return myArray(marks)
   })
</script>
</div>

<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
