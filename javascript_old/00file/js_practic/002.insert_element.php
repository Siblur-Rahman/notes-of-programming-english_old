<style>
   .active_2{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'./js_practice_header.php'?>
<!-- Start Main Content -->



<button class="btn_block accordion itc" id="">Insert </button>
<div class="panel">
   <h2 class="center">By <span>insertAdjacentElement()<a href="https://www.w3schools.com/jsref/met_node_insertadjacentelement.asp" target="_blank"> Details</a></span></h2>
   <div class="code_p">
      <spa id="insert"></spa>
   <script>
      var insert =`<button onclick="myFunction()">Move</button>
   <p>Click "Move" to insert the red span after the header.</p>

   <span id="mySpan" style="color:red">My span</span>
   <h2 id="myH2">My Header</h2>

   const span = document.getElementById("mySpan");
   const h2 = document.getElementById("myH2");
   h2.insertAdjacentElement("afterend", span);`
   document.getElementById("insert").innerText = insert;
   </script>
   </div>
<button class="btn_block"><a href="" target="_blank">Watch video</a></button>
</div><!-- End panel-->


<button class="btn_block accordion itc" id=""> </button>
<div class="panel">
<h2 class="center"><span><a href="" target="_blank"> Details</a></span></h2>
<button class="btn_block"><a href="" target="_blank">Watch video</a></button>
</div><!-- End panel-->

<!-- End Main Content -->
<!--js_common footer -->
<?php include('../../js_common_footer.php') ?>
