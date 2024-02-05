<style>
   .active_{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->
<h3 class="all-center100">15-7 Remove duplicate item from an array <span class="itc">With Jhankar Mahbub</span></h3>
<pre>
let myArray = [2, 4, 5, 8, 4, 8, 2, 3];
   
   let unique = [];
   for(let  i = 0; i < myArray.length; i++){
      let element = myArray[i];

   let index = unique.indexOf(element);
   if(index == -1){
      unique.push(element)
   }
}
console.log(unique)
</pre>
   

<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
