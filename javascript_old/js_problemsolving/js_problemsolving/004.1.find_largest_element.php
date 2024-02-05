<style>
   .active_4{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->
<h3 class="center">15-5 Find the largest element of an array <span class="itc">With Jhankar Mahbub</span></h3>
<button id="toggle_b1">Find Max Valule statically</button>
<div class="code_b1">
   <h3><span id="demo"></span></h3>
   <!-- Code Button -->
<button class="block_button" id="toggle_1">Show/Hide Code</button>
   <pre class="code_1">
      let marks = [90,45, 33, 32, 40, 60, 80];
      let maxValue = marks[0]

      for(let i = 0; i < marks.length; i++){
         let value = marks[i];
         if(value > maxValue){
            maxValue = value
         }
      }
      document.getElementById("demo").innerHTML = (maxValue)
   </pre>
   <script> 
   let marks = [90,45, 33, 32, 40, 60, 80];
   let maxValue = marks[0]

   for(let i = 0; i < marks.length; i++){
      let value = marks[i];
      if(value > maxValue){
         maxValue = value
      }
   }
   document.getElementById("demo").innerHTML = (maxValue)
   </script>
</div><!-- End code_b1 -->
      
<button id="toggle_b2">Find Max Valule dynamically</button>
<div class="code_b2">
   <input type="number" id="number" placeholder="Enter Number"/>
   <button id="btn">Click to Check the Number</button>
   <h3><span id="demo2"></span></h3>
   <script>
      let btn = document.getElementById("btn");
      let num = document.getElementById("number");
      let marks2 = [90,45, 33, 32, 40, 60, 80];
      let maxValue2 = marks2[0];
      function findMaxElement(n){
         marks.push(n);
      for(let i = 0; i < marks.length; i++){
         let value = marks[i];
         if(value > maxValue){
            maxValue2 = value;
         }
         document.getElementById("demo2").innerHTML = maxValue2;
      }
      }
 
      btn.addEventListener('click', function(){
         let addElement = num.value;
         
         // document.getElementById("demo").innerHTML = (maxValue)
         return findMaxElement(addElement)
      })
   </script>
</div><!-- End code_b2 -->
<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
