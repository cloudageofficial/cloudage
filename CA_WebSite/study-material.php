  <?php
  include('header.php');
  ?>

<div class="container-fluid">
  <!-- 1st row -->
  <div class="row">
    <!-- Question section -->
    <div class="col-md-6">
          Question section
    </div>
    <!-- Question section end-->

    <!-- Editor section -->
    <div class="col-md-6">
          <h3>Try This</h3> 
          <form> 
          <textarea id="yourcode" name="yourcode" cols="40" rows="10">import turtle

          t = turtle.Turtle()
          t.forward(100)

          print "Hello World" 
          </textarea><br /> 
          <button type="button" onclick="runit()">Run</button> 
          </form> 
          

    </div>
    <!-- Editor section end -->
  </div>
  <!-- 1st row End-->

  <!-- 2st row -->
  <div class="row">
    <!-- Hint section -->
    <div class="col-md-6">
          Hint section
    </div>
    <!-- hint section end-->

    <!-- output section -->
    <div class="col-md-6">
        <pre id="output" ></pre> 
          <!-- If you want turtle graphics include a canvas -->
          <div id="mycanvas"></div> 
    </div>
    <!-- output section end-->
  </div>
  <!-- 2st row end-->
</div>
       
   <div class="container-fluid">
  <!-- 1st row -->
  <div class="row">
  
  </div>
  </div>    
  <?php
  include('footer.php');
  ?>