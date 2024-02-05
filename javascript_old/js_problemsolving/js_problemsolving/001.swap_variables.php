<style>
   .active_1{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_problem_solving_header.php'?>
<!-- Start Main Content -->

   <h3 class="center">15-2 Swap variable, swap without temp, destructing <span>With Jhankar Mahbub</a></span></h3>
<button id="accordion 1">Swap variable with temp</button>
   <div class="panel 1">
   <pre class="">
   var a = 5;
    var b = 7;

    console.log("Before swap: a =", a, ",", "b =", b)

    temp = a;

    a = b;

    b = temp;
    console.log("After swap: a =", a, ",", "b =", b)
   </pre>
</div><!-- End panel 1 -->
      
   <button id="accordion 2">swap without temp</button>
   <div class="panel 2">
    <pre>
    var a = 5;
    var b = 7;

    console.log("Before swap: a =", a, ",", "b =", b)

    b = a + b;

    a = b - a;
    b = b - a;
    console.log("After swap: a =", a, ",", "b =", b)
    </pre>
</div><!-- End panel 2 -->

<button id="accordion 3">Destructing</button>
   <div class="panel 3">
   <pre>
   var a = 5;
    var b = 7;

    console.log("Before swap: a =", a, ",", "b =", b);

    [a, b] = [b, a];
    console.log("After swap: a =", a, ",", "b =", b)

   </pre>

</div><!-- End panel 3 -->

<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
