<style>
   .active_3{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->

<h5 class="center">15-4 find max value<span class="itc"> With Jhankar Mahbub</span></h5>
   <input type="number" id="jhantu" placeholder="Jhantu">
   <input type="number" id="poltu" placeholder="Poltu">
   <input type="number" id="mintu" placeholder="Mintu">
   <button id="btn">Click to Check the Number</button>
   <h3><span id="demo"></span></h3>
   <script>

   function bigger(){
      let jhantu = document.getElementById("jhantu").value;
      let poltu = document.getElementById("poltu").value;
      let mintu = document.getElementById("mintu").value;
      if(jhantu > poltu){
         if(jhantu > mintu){
            document.getElementById("demo").innerHTML = ("Jhantu is Bigger");
         }else{
            document.getElementById("demo").innerHTML = ("Mintu is Bigger")
         }
      }else{
         if(poltu > mintu){
            document.getElementById("demo").innerHTML = ("Poltu is Bigger")
         }else{
            document.getElementById("demo").innerHTML = ("Mintu is Bigger")
         }
      }
   }
   document.getElementById("btn").addEventListener('click', function(){
      return bigger()
   })
   </script>


<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
