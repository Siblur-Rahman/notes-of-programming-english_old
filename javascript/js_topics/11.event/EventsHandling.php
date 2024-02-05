<h3 class="itc">Many ways to handle Event</h3>
   <h2 class="itc">Example-1</h2>
   <pre class="code_p">
   &lt;button onclick="document.getElementById('demo').innerHTML=Date()"&gt;The time is?&lt;/button&gt;
   </pre>
   <h2 class="itc">Example-2</h2>
   <pre class="code_p">
   var btn = document.getElementById("btn");
   btn.onclick = function(){
      alert('Welcome')
   }
   </pre>
   <h2 class="itc">Example-3</h2>
   <pre class="code_p">
   var btn = document.getElementById("btn");
   btn.onclick = bgColor;
   function bgColor(){
      document.body.style.backgroundColor = 'red'
   }
   </pre>
   <h2 class="itc">Example-4</h2>
   <pre class="code_p">
   var btn = document.getElementById("btn");
   btn.addEventListener('click', bgColor);
   function bgColor(){
      document.body.style.backgroundColor = 'yellow'
   }
   </pre>
   <h2 class="itc">Example-5</h2>
   <pre class="code_p">
   var btn = document.getElementById("btn");
   btn.addEventListener('click', function(){
      document.body.style.backgroundColor = 'black'
   });
   </pre>
   <h2 class="itc">Example-6</h2>
   <pre class="code_p">
   document.getElementById("btn").addEventListener('click', function(){
      document.body.style.backgroundColor = 'black'
   });
   </pre>
   <button class="btn_block" class="btn_block"><a href="../js_topics_video/019_8.php" target="_blank">Watch Video</a></button>