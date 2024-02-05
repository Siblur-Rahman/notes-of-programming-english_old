<style>
   .active_20{
      <?php include'../../../active_1.php'?>
   }
   .btn_block accordion{
    display: block;
    width: 100%;
}
   </style>
   <!-- topics header -->
<?php include'../js_topics_header.php'?>
<!-- Start Main Content -->

   <h2 class="center">JavaScript this keyword<span><a href="https://youtu.be/iMbMR86liyE?si=i1artdc0pGWD6GPE" target="_blank"> Details</a></span></h2>
   <button id="" class="btn_block accordion">Summary</button>
   <div class="panel">
   <h2>What is this?</h2>
   <div class="itc">
   In JavaScript, the this keyword refers to an object.  <br>
   <br>
   Which object depends on how this is being invoked (used or called).  <br>
   <br>
   The this keyword refers to different objects depending on how it is used:  <br>
     <div class="code_p">
     In an object method, this refers to the object. <br>
   Alone, this refers to the global object.  <br>
   In a function, this refers to the global object.   <br>
   In a function, in strict mode, this is undefined.  <br>
   In an event, this refers to the element that received the event.  <br>
   Methods like call(), apply(), and bind() can refer this to any object.  <br>
   Note  <br>
   this is not a variable. It is a keyword. You cannot change the value of this.
     </div>
   </div>
</div>
<!-- end summary panel  -->
<button id="toggle_b1" class="btn_block">Examples</button>
<div class="code_b">
<button id="" class="btn_block accordion">Example-1 <span class="itc">In an object method, this refers to the object.</span></button>
<div class="panel">
   <h2>output: <span class="itc" id="demo20_1"></span></h2>
   <pre class="code_p">
   <h2>code</h2>
   const person = {
    firstName : "Siblur",
    lastName  : "Rahman",
    id        : 691048,
    fullName  : function(){
        return this.firstName + " " + this.lastName;
    }
   }
   document.getElementById("demo20_1").innerText = person.fullName();
   </pre>
   
   <script>
      const person = {
    firstName : "Siblur",
    lastName  : "Rahman",
    id        : 691048,
    fullName  : function(){
        return this.firstName + " " + this.lastName;
    }
   }
   document.getElementById("demo20_1").innerText = person.fullName();
   </script>
</div><!-- End panel --> 
<button id="" class="btn_block accordion">Example-2: <span class="itc">Alone, this refers to the global object.</span></button>
<div class="panel">
      <h2>output: <span class="itc" id="demo20_2"></span></h2>
      <div class="code_p">
         <h2>code</h2>
         const a = this; <br>
         document.getElementById("demo20_2").innerHTML = a;
      </div>
   <script>
      const a = this;
      document.getElementById("demo20_2").innerHTML = a;
   </script>
</div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-3: <span class="itc"> In strict mode, when used alone, this also refers to the global object:</span></button>
   <div class="panel">
      <h2>output: <span class="itc" id="demo20_3"></span></h2>
      <div class="code_p">
         <h2>code</h2>
         "use strict"; <br>
         let b = this; <br>
         document.getElementById("demo20_3").innerHTML = b;
      </div>
   <script>
      "use strict";
      let b = this;
      document.getElementById("demo20_3").innerHTML = b;
   </script>
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-4: <span class="itc">In a function, in strict mode, this is undefined.</span></button>
   <div class="panel">
      <h2>output: <span class="itc" id="demo20_4"></span></h2>
      <div class="code_p">
         <h2>code</h2>
         "use strict";  <br>
         document.getElementById("demo20_4").innerHTML = myFunction();  <br>
   <br>
         function myFunction() { <br>
         return this;   <br>
         }
      </div>
   <script>
      "use strict";
         document.getElementById("demo20_4").innerHTML = myFunction();

         function myFunction() {
         return this;
         }
   </script>
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
   
   <button id="" class="btn_block accordion">Example-: <span class="itc"></span></button>
   <div class="panel">
   <h2>output: <span class="itc" id="demo20_"></span></h2>
   
   </div><!-- End panel -->
</div> <!--End code_b1  Example Div-->

<button id="toggle_b1" class="btn_block"></button>
<div class="code_b1">
   <button id="" class="btn_block accordion"></button>
   <div class="panel">
      
   
   </div><!-- End panel -->
   
</div> <!--End code_b1  Example Div-->
<button id="" class="btn_block accordion"></button>
<div class="panel">
   <h3>Syntax</h3>
   <pre class="code_p">
     
   </pre>
   <h4></h4>
   <pre class="code_p">
   
   </pre>

   <pre class="code_p">
  
   </div>
<!-- End  panel 1-->


<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
