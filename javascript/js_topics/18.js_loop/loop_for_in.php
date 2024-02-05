
<button class="accordion">For in</button>
<div class="panel">
  <h2 class="center">JavaScript For in Loop<span><a href="https://www.w3schools.com/js/js_loop_forin.asp" target="_blank"> Details</a></span></h2>
  <h2>For In over Array</h2>
  <h3>Syntax</h3>
  <pre class="code_p">
  for (variable in array) {
    // code block to be executed
  }
  </pre>
  <pre>
      const numbers = [45, 4, 9, 16, 25];

  for (let x in numbers) {

    console.log(numbers[x])
  }
   </pre>
  <h2>For in over Object</h2>
  <h3>Syntax</h3>
  <pre class="code_p">
  for (key in object) {
    // code block to be executed
  }
  </pre>

  <h2>For In over Object</h2>
      <pre>
      var parson = {
      fName: "Siblur",
      lName: "Rahman",
      age: 41,
      fullName: function(){
         return this.fName+" "+this.lName
      }
   }


   for(const index in parson){
      console.log(index + ": " + parson[index])
   }
   </pre>
</div>