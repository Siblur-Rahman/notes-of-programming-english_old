<style>
   .active_13{
      <?php include'../../../active_1.php'?>
   }
   </style>
   <!-- topics header -->
<?php include'../js_topics_header.php'?>
<!-- Start Main Content -->

   <h2 class="center">JavaScript Template Literals<span><a href="https://www.w3schools.com/js/js_string_templates.asp" target="_blank"> Details</a></span></h2>
   <pre class="code_p">
   Synonyms:

Template Literals
Template Strings
String Templates
Back-Tics Syntax
   </pre>
<h2>Back-Tics Syntax</h2>
<p>Template Literals use back-ticks (``) rather than the quotes ("") to define a string:</p>
<p class="code_p">let text = `Hello World!`;</p>
<h2>Use of Back-Tics Syntax</h2>
<p>With template literals, you can use both single and double quotes inside a string:</p>
<p class="code_p">let text = `He's often called "Johnny"`;</p>
<p>Template literals allows multiline strings:</p>
<pre class="code_p">
let text =
`The quick
brown fox
jumps over
the lazy dog`;
</pre>
<p class="mark">There are more uses</p> 
<!-- <p class="code_p"></p>
<p class="code_p"></p> -->
<h2>Example</h2>
 <pre class="code_p">
 const firstName = "Siblur";
const lastName = "Rahman";
const fullName = `${firstName} ${lastName} is ${25+15} years old.
He is a Web developer`;

console.log(fullName)

Output:
Siblur Rahman is 40 years old;
he is a Web developer
 </pre>
   

<!-- End Main Content -->
<!-- footer -->
<?php include('../../js_common_footer.php') ?>
