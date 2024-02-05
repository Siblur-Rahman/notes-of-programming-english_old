
<?php include'../js_html_dom_header.php'?>

<!-- Document Method List -->
<button class="accordion">Document Method List</button>
<div class="panel">
   <?php include'./dom_method_list.php'?>
</div>
<!-- Start Main Content -->
<h2>getElementId <span class="itc"><a href="https://www.w3schools.com/jsref/met_document_getelementbyid.asp" target="_blank">Details</a></span></h2>
   <p>getElementId is a method to access any element virtually. It accesses the first element with the specified ID.</p>
   <h3>Syntax</h3>
   <pre class="code_p">
      var myVariable = document.getElementById(“my_squad”);
   </pre>
   <h4 id="test">It can also be used dynamically as follows:</h4>
   <pre class="code_p">
   var myVariable = document.getElementById(“my_squad”);
   myVariable.style.display = “block”;
   myVariable.style.backgroundColor = “#f00”;
   myVariable.style.border = “solid 1 px #00f”;
   </pre>
   <div class="mark">
   <h2>Note</h2>
    Any id should be unique, but: <br>
    If two or more elements with the same id exist, getElementById() returns the first.
   </div>
<!-- End Main Content -->
<!-- footer -->
<?php include('../js_html_dom_footer.php') ?>

<button id="1" class="btn_block accordion">1) getElementId</button>
<div class="panel 1">

</div><!-- End panel  -->