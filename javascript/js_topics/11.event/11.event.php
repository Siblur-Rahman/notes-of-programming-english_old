<style>
   .active_{
      <?php include'../../../active_1.php'?>
   }
   .fixed a{
      color: red;
      position: absolute;
      bottom: 50px !important;
      left: 50px !important;
   }
   </style>
   <!-- topics header -->
<?php include'../js_topics_header.php'?>
<!-- Start Main Content -->
<h2 class="center">JS Events<span><a href="" target="_blank"> Details</a></span></h2>
<button id="" class="btn_block myToggleB">Basic Discussion</button>
<div class=""><!--Start Basic Viv-->
   <h2 class="center"> JavaScript Events</h2>
   <h5>
      HTML events are "things" that happen to HTML elements. <br>

      When JavaScript is used in HTML pages, JavaScript can "react" on these events.
   </h5>

   <h3>HTML Events</h3>
   <h3>
      An HTML event can be something the browser does, or something a user does.
   </h3>

   <h5 class="mark">Here are some examples of HTML events:</h5>
   <h5>
      An HTML web page has finished loading <br>
      An HTML input field was changed <br>
      An HTML button was clicked <br>
      Often, when events happen, you may want to do something. <br>

      JavaScript lets you execute code when events are detected. <br>

      HTML allows event handler attributes, with JavaScript code, to be added to HTML elements.
   </h5>
   <h3 class="mark">With single quotes or With double quotes:</h3>
   <h3>Syntax</h3>
   <pre class="code_p">
   &lt;element event='some JavaScript'&gt;
   or
   &lt;element event="some JavaScript"&gt;

   </pre>
   <h3>Example</h3>
   <h5 class="mark">
   &lt;button onclick="document.getElementById('demo').innerHTML=Date()"&gt;The time is?&lt;/button&gt;
   <br>
   &lt;p id="demo"&gt;&lt;/p&gt;
   </h5>
</div><!-- End Basic Code -->
<button id="" class="btn_block myToggleB">HTML Events List</button>
<div class="">
   <?php include'./HTMLEventsList.php'?>
</div><!-- End   -->

<button id="" class="btn_block myToggleB">Events Handling</button>
   <div class="">
      <?php include'./EventsHandling.php'?>
   </div><!-- End -->
<button id="" class="btn_block myToggleB">Events Handling</button>
   <div class="">
      <?php include'./EventsHandling.php'?>
   </div><!-- End -->

<button id="" class="btn_block myToggleB">Event Properties</button>
   <div class="">
      <?php include'./EventProperties.php'?>
   </div><!-- End Event Properties-->


   <button id="" class="btn_block myToggleB">Event delegate and purpose of Event bubble</button>
   <div class="">
   
      <!-- <?php include'./bubble.php'?> -->
   </div><!-- End -->


<button class="btn_block"><a href="../js_topics_video/019_12.php" target="_blank" class="btn_block myToggleB">19-12 Fnction Event, Event bubble module summary</a></button>
<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
