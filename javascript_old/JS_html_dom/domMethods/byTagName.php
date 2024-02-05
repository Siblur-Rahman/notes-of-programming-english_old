
<?php include'../js_html_dom_header.php'?>

<!-- Document Method List -->
<button class="accordion">Document Method List</button>
<div class="panel">
   <?php include'./dom_method_list.php'?>
</div>
<!-- Start Main Content -->
<h2>getElementsByTagName:</h2>
   <p>getElementByTagName allows you to search all the elements with a specified tag name on your page. </p>
   <pre class="code_p">
   var myLinkcollection = document.getElementsByTagName(“abc”);
   </pre>
   <p>Here myVariable is substituted by “myLinkCollection”. myLinkCollection holds all the elements on the page. Pictorially it is like an array holding elements. Here also you can add few additional features. Following is an example:</p>
      
   <pre class="code_p">
   let h2= document.getElementsByTagName('h2');
   for(let i = 0; i < h2.length; i++){
      if(i ==0){
         h2[i].style.color = 'red';
      }else if(i==1){
         h2[i].style.color = 'yellow';
      }else{
         h2[i].style.color = 'blue';
      }
   }
   </pre>
<!-- End Main Content -->
<!-- footer -->
<?php include('../js_html_dom_footer.php') ?>