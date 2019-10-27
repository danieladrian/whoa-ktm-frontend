<div class="header skill w3-card-4 w3-animate-opacity">
  <center>
  <div class="profile">
  <img src="asset/images/profile.jpg" class="circle z-depth-2" style="border:3px solid white;"><br>
  </div>

<span class="w3-xlarge w3-padding w3-text-white" style="text-shadow:0px 0px 4px black;"><b>Daniel Adrian</b></span>
</center>
</div>


<div class="content w3-container z-depth-4 w3-round-large">



  <div class="quote w3-text-black">
    <div class="w3-panel">
<span style="font-size:80px;line-height:0em;opacity:1;">&#10004;</span>
      <p class="w3-large" >
      <i>"There is nothing wrong with you. You just found new way to do it!"</i></p>
      <p>- Daniel Adrian -</p>
    </div>
  </div>

<h4>Skill</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($skill as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-blue w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[name]</b>
              <p>
                $data[detail]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->

<h4>Language</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($language as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-orange w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[lang]</b> ( $data[status] )</p>
              <p>
                $data[detail]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->
    
<h4>Interest</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($interest as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-red w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[name]</b></p>
              <p>
                $data[detail]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->
<div class="w3-container">

<footer class="w3-padding"><hr>
&copy; Copyright Daniel Adrian.
</footer>
<br>
</div>
</div>

<a href="home" class="floatbtn"><span><img src="asset/images/home.png" width="33px"></span></a>
<script>
  $(document).ready(function () {
        window.scrollTo(0,0);
    });

</script>
