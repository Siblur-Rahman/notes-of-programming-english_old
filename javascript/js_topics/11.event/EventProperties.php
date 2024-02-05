<h2 class="">Event Properties<span><a href="https://www.w3schools.com/jsref/dom_obj_event_prop.asp" target="_blank"> Details</a></span></h2>
   <button class="myToggleB btn_block">Event bubble</button>
   <div class="">
      <h2 class="center">Event bubble<span><a href="https://www.w3schools.com/jsref/event_bubbles.asp" target="_blank"> Details</a></span></h2>
         <h3>Example-1</h3>
         <h3>HTML Code</h3>
         <div class="mark">
         &lt;div id="myContainer"&gt; <br>
         &lt;ul id="myList"&gt; <br>
               &lt;h2&gt;My List&lt;/h2&gt; <br>
               &lt;li id="first" class="item"&gt;Lorem, ipsum dolor.&lt;/li&gt; <br>
               &lt;li class="item"&gt;Dignissimos, porro distinctio.&lt;/li&gt; <br>
               &lt;li class="item"&gt;Facere, obcaecati iure?&lt;/li&gt; <br>
               &lt;li class="item"&gt;Quis, dolores eaque.&lt;/li&gt; <br>
               &lt;li class="item"&gt;Aspernatur, temporibus magnam?&lt;/li&gt; <br>
            &lt;/ul&gt; <br>
            &lt;/div&gt;
         </div>
         <h3>JS Code</h3>
         <div class="mark">
         document.getElementById("first").addEventListener("click", function(event){ <br>
         console.log("First item clicked") <br>
         }) <br>
            document.getElementById("myList").addEventListener("click", function(event){ <br>
            console.log("Ul clicked") <br>
         }) <br>
            document.getElementById("myContainer").addEventListener("click", function(event){ <br>
            console.log("Container clicked"); <br>
            })
         </div>
      <button class="btn_block"><a href="../js_topics_video/019_9.php" target="_blank" class="btn_block">Watch Video of Event bubble</a></button>
    </div>
   <button id="" class="btn_block myToggleB">stop prooagating Event bubble</button>
   <div class="">

      <button class="btn_block"><a href="../js_topics_video/019_10.php" target="_blank">Watch Video</a></button>
   </div>