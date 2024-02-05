<style>
   .active_{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->
<h3 class="center">4.2 Find max string Element of an Array</h3>
<pre>
let arr = ["mintu", "kabir", "abra", "shah"]

let maxValue = arr[0];
// let maxValueLenght = maxValue.length;

for(let i = 0; i < arr.length; i++){

    let value = arr[i];
    // let valueLenght = value.length;

    // if(valueLenght > maxValueLenght){
    if(value.length > maxValue.length){
        maxValue = value;
    }
}
console.log(maxValue);
</pre>
</div><!-- End code_b -->

<!-- End Main Content -->
<!-- footer -->
<?php include('../../../common_footer.php') ?>
