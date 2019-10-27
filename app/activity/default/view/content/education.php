
<div class="header education w3-card-4 w3-animate-opacity">
  <center>
  <div class="profile">
  <img src="asset/images/profile.jpg" class="circle z-depth-2" style="border:3px solid white;"><br>
  </div>
<br>
<span class="w3-xlarge w3-padding w3-text-black"><b>Daniel Adrian</b></span>
</center>
</div>


<div class="content w3-container z-depth-4 w3-round-large">


  <div class="quote w3-text-black">
    <div class="w3-panel">
<span style="font-size:80px;line-height:0em;opacity:1;">&#10004;</span>
      <p class="w3-large" >
      <i>"Learning is my life. I cannot live without it!"</i></p>
      <p>- Daniel Adrian -</p>
    </div>
  </div>

<div class="w3-container">
<h4>Formal Education</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
    <?php
    foreach($formal as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-blue w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[name]</b> ( ";
        echo $data['start']==null?Date("Y",strtotime($data['end'])):Date("Y",strtotime($data['start']))." - ".Date("Y",strtotime($data['end']));
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
            </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-content -->";
	}
	?>
	
</section> <!-- cd-timeline -->

<h4>Informal Education / Course</h4>
<hr>

<section id="timeline" >
  <div class="line w3-round-large"></div>
    <?php
    foreach($informal as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-orange w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[name]</b> ( ";
        echo $data['start']==null?$data['end']:$data['start']." - ".$data['end'];
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }
    ?>
  

</section> <!-- cd-timeline -->

<footer class="w3-padding"><hr>
&copy; Copyright Daniel Adrian.
</footer>
<br>
</div>

</div>
</div>

<a href="home" class="floatbtn"><img src="asset/images/home.png" width="33px"></a>