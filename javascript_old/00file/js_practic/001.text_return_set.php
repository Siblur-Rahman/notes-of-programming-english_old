<style>
   .active_1{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_practice_header.php'?>
<!-- Start Main Content -->

<button class="btn_block accordion itc" id="">Text return & set from/to Element</button>
<div class="panel">
   <h2 class="center">By <span>innerText<a href="https://www.w3schools.com/jsref/prop_node_innertext.asp" target="_blank"> Details</a></span></h2> 
   <div class="code_p">
      let text = document.getElementById("id").innerText; <br>
      document.getElementById("id").innerText = text;
   <script>
   
   </script>
   </div>
   <h2 class="center">BY <span>innerHTML<a href="https://www.w3schools.com/jsref/prop_html_innerhtml.asp" target="_blank"> Details</a></span></h2>  
   <div class="code_p">
   let html = document.getElementById("id").innerHTML;
   document.getElementById("id").innerHTML = html;
   </div>
   
   <h2 class="center">By <span>textContent<a href="https://www.w3schools.com/jsref/prop_node_textcontent.asp" target="_blank"> Details</a></span></h2> 
   <div class="code_p">

   </div>
   <!-- <h2 class="center"><span><a href="" target="_blank"> Details</a></span></h2> -->
</div><!-- End panel-->
 
<button class="btn_block accordion itc" id="">Text return & set from/to Text field</button>
<div class="panel">
   <h2 class="center">By <span>value<a href="https://www.w3schools.com/jsref/prop_text_value.asp" target="_blank"> Details</a></span></h2>
      <div class="code_p">
      let text = document.getElementById("id").value; <br>
      document.getElementById("id").value = text;
      </div>
   
</div><!-- End panel-->
<button class="btn_block accordion itc" id=""> </button>
<div class="panel">
   
   <button class="btn_block"><a href="" target="_blank">Watch video</a></button>
   </div>


<button class="btn_block accordion itc" id=""> </button>
<div class="panel">
   <h2 class="center"><span><a href="" target="_blank"> Details</a></span></h2>
   <button class="btn_block"><a href="" target="_blank">Watch video</a></button>
</div><!-- End panel-->

<!-- End Main acontent -->

<!--js_common footer -->
<?php include('../../js_common_footer.php') ?>
