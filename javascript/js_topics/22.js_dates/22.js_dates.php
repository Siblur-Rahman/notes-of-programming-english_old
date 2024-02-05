<style>
   .active_22{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'../js_topics_header.php'?>
<!-- Start Main Content -->
   <h2>JavaScript Date Reference<span><a href="https://www.w3schools.com/jsref/jsref_obj_date.asp" target="_blank"> Details</a></span></h2>
<button id="" class="accordion">JavaScript Date</button>
<div class="panel">
   <h2>JavaScript Date Objects<span><a href="https://www.w3schools.com/js/js_dates.asp" target="_blank"> Details</a></span></h2>
   <h2>Creating Date Objects</h2>
Date objects are created with the new Date() constructor. <br>

There are 9 ways to create a new date object:
   <div class="mark">
   new Date()
new Date(date string)   <br>
   <br>
new Date(year,month) <br>
new Date(year,month,day)   <br>
new Date(year,month,day,hours)   <br>
new Date(year,month,day,hours,minutes) <br>
new Date(year,month,day,hours,minutes,seconds)  <br>
new Date(year,month,day,hours,minutes,seconds,ms)  <br>
   <br>
new Date(milliseconds)
   </div>
   <h2>new Date() creates a date object with the current date and time:</h2>
   <div class="code_p">
      const date1 = new Date() <br>
      document.getElementById("ddemo1").innerHTML = date1;

      <h4>Output : <span id="ddemo1" class="itc"></span> </h4>
   </div>
   <script>
      const date1 = new Date()
      document.getElementById("ddemo1").innerHTML = date1;
   </script>
   <h2>new Date(date string) creates a date object from a date string:</h2>
   <div class="code_p">
      const date2 = new Date("October 13, 2023 11:13:00")
      document.getElementById("ddemo2").innerHTML = date2;

      <h4>Output : <span id="ddemo2" class="itc"></span> </h4>
   </div>
   <script>
      const date2 = new Date("October 13, 2023 11:13:00")
      document.getElementById("ddemo2").innerHTML = date2;
   </script>
   <div class="code_p">
      const date3 = new Date("October 13, 2023 11:13:00")
      document.getElementById("ddemo2").innerHTML = date3;

   <h4>Output : <span id="ddemo3" class="itc"></span> </h4>
   </div>
   <script>
      const date3 = new Date("2023-03-25")
      document.getElementById("ddemo3").innerHTML = date3;
   </script>
   <h2>7 numbers specify year, month, day, hour, minute, second, and millisecond (in that order):</h2>
   <div class="code_p">
      const date4 = new Date(2018, 11, 24, 10, 33, 30, 0); <br>
      document.getElementById("ddemo4").innerHTML =date4; <br>
      <h4>Output : <span id="ddemo4" class="itc"></span> </h4>
   </div>
   <script>
      const date4 = new Date(2018, 11, 24, 10, 33, 30, 0);
      document.getElementById("ddemo4").innerHTML =date4;
   </script>
   <!-- <h2></h2>
   <div class="code_p">
   
      <h4>Output : <span id="ddemo" class="itc"></span> </h4>
   </div>
   <script>
      const date = new Date();
      document.getElementById("ddemo").innerHTML =date;
   </script> -->
   <div class="mark">
      <h2>Note</h2>
      JavaScript counts months from 0 to 11: <br>
      January = 0. <br>
      December = 11. <br>
      Specifying a month higher than 11, will not result in an error but add the overflow to the next year: <br>
      Specifying a day higher than max, will not result in an error but add the overflow to the next month: <br>
      You cannot omit month. If you supply only one parameter it will be treated as milliseconds.
   </div>
   <h2>Previous Century</h2>
      <h2>One and two digit years will be interpreted as 19xx:</h2>
   <div class="code_p">
   
      <h4>Output : <span id="pddemo1" class="itc"></span> </h4>
   </div>
   <script>
      const pdate1 = new Date(99, 11, 24);
      document.getElementById("pddemo1").innerHTML =pdate1;
   </script>
       <h2></h2>
   <div class="code_p">
   
      <h4>Output : <span id="pddemo2" class="itc"></span> </h4>
   </div>
   <script>
      const pdate2 = new Date(9, 11, 24);
      // const pdate2 = new Date(9, 11, 24);
      document.getElementById("pddemo2").innerHTML =pdate2;
   </script>
   <div class="mark">
      <h2>Note</h2>
      
      <h3>JavaScript Stores Dates as Milliseconds</h3>

      JavaScript stores dates as number of milliseconds since January 01, 1970.

      Zero time is January 01, 1970 00:00:00 UTC. <br>

      One day (24 hours) is 86 400 000 milliseconds. <br>

      Now the time is: 1700063820330 milliseconds past January 01, 1970

   </div>
       <h2>01 January 1970 plus 0 milliseconds is:</h2>
   <div class="code_p">
   
      <h4>Output : <span id="pddemo3" class="itc"></span> </h4>
   </div>
   <script>
      const pdate3 = new Date(0);
      document.getElementById("pddemo3").innerHTML =pdate3;
   </script>
       <h2>01 January 1970 plus 100 000 000 000 milliseconds is:</h2>
   <div class="code_p">
      const pdate4 = new Date(100000000000);
      document.getElementById("pddemo4").innerHTML =pdate4;
      <h4>Output : <span id="pddemo4" class="itc"></span> </h4>
   </div>
   <script>
      const pdate4 = new Date(100000000000);
      document.getElementById("pddemo4").innerHTML =pdate4;
   </script>
      <!--  <h2></h2>
   <div class="code_p">
   
      <h4>Output : <span id="pddemo" class="itc"></span> </h4>
   </div>
   <script>
      const pdate = new Date();
      document.getElementById("pddemo").innerHTML =pdate;
   </script> -->

</div><!-- End panel-->
<?php include'./22.js_date_formats.php'?>
<?php include'./22.js_date_get_methods.php'?>
<?php include'./22.js_date_set_methods.php'?>


<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
