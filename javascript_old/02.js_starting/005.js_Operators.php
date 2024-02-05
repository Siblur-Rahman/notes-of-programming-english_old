<!-- common_header -->

<?php include('../../common_header.php') ?>
<!-- style -->
<style>
.basic_active{
    background: #786363;
    line-height: 30px;
    color: white !important;
}
   .operator_active{
    background: #BB2966;
    line-height: 30px;
    color: white !important;
}
.second_navbar a {
    display: inline-block;
    margin-left: 10px;
}
.second_navbar a:first-child {
    color: #e8da0e;
}
.to_jump{
   padding-top: 110px;
}
.basic_dropdown{
   display: block !important;
}
</style>

<!-- left-bar -->

   <?php include('../left_bar.php') ?>

<!-- right-bar -->

   <?php include('../right_bar.php') ?>

   <!-- Second Navbar -->
   <div class="second_navbar">
      <a href="#return">Return to header</a>
      <a href="#Assignment">Assignment</a>
      <a href="#Arithmetic">Arithmetic</a>
      <a href="#Comparison">Comparison</a>
      <a href="#String">String</a>
      <a href="#Logical">Logical</a>
      <a href="#Bitwise">Bitwise</a>
      <a href="#Ternary">Ternary</a>
      <a href="#Type">Type</a>
   </div>


   <div id="main_content">
         <a class="to_jump" name="return"></a>
         

        

<!--End main class on footer -->
<!-- footer -->
<?php include('../../footer.php') ?>