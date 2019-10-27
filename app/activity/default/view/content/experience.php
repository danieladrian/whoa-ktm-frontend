
<div class="header experience w3-card-4 w3-animate-opacity">
  <center>
  <div class="profile">
  <img src="asset/images/profile.jpg" class="circle z-depth-2" style="border:3px solid white;"><br>
  </div>

<span class="w3-xlarge w3-padding w3-text-white" style="text-shadow:0px 0px 4px black;"><b>Daniel Adrian</b></span>
</center>
</div>

<div class="content w3-container z-depth-4 w3-round-large">

<center>

  <div class="quote w3-text-black">
    <div class="w3-panel">
<span style="font-size:80px;line-height:0em;opacity:1;">&#10004;</span>
      <p class="w3-large" >
      <i>"Experience is the key of opportunity!"</i></p>
      <p>- Daniel Adrian -</p>
    </div>
  </div>
</center>
<div class="w3-container">
<h4>Work</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($works as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-blue w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[do]</b> ( ";
        echo $data['start']==null?Date("Y",strtotime($data['end'])):Date("Y",strtotime($data['start']))." - ".Date("Y",strtotime($data['end']));
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
                <p>
              $data[video]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->
    
<h4>Organization</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($organization as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-green w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[do]</b> ( ";
        echo $data['start']==null?Date("Y",strtotime($data['end'])):Date("Y",strtotime($data['start']))." - ".Date("Y",strtotime($data['end']));
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
               <p>
              $data[video]
              </p>  
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->

<h4>Internship</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($internship as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-purple w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[do]</b> ( ";
        echo $data['start']==null?Date("Y",strtotime($data['end'])):Date("Y",strtotime($data['start']))." - ".Date("Y",strtotime($data['end']));
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
              <p>
              $data[video]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>    
    </section> <!-- cd-timeline -->
 
<h4>Volunteer</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($volunteer as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-red w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[do]</b> ( ";
        echo $data['start']==null?Date("Y",strtotime($data['end'])):Date("Y",strtotime($data['start']))." - ".Date("Y",strtotime($data['end']));
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
              <p>
              $data[video]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->
    
<h4>Self Project</h4>
<hr>
  <section id="timeline" >
    <div class="line w3-round-large"></div>
        <?php
    foreach($selfproject as $data){
        echo "
          <div class=\"timeline-block\">
            <div class=\"buble w3-orange w3-circle\"></div> <!-- cd-timeline-img -->
        
            <div class=\"timeline-content w3-padding w3-light-grey\">
              <p><b class=\"w3-large\">$data[do]</b> ( ";
        echo $data['start']==null?Date("Y",strtotime($data['end'])):Date("Y",strtotime($data['start']))." - ".Date("Y",strtotime($data['end']));
        echo " )<br>$data[place]</p>
              <p>
                $data[detail]
              </p>
              <p>
              $data[video]
              </p>
            </div> <!-- cd-timeline-content -->
          </div> <!-- cd-timeline-block -->
        ";
    }

    ?>
    </section> <!-- cd-timeline -->
</div>
<div class="w3-container">

<footer class="w3-padding"><hr>
&copy; Copyright Daniel Adrian.
</footer>
<br>
</div>
</div>

<a href="home" class="floatbtn"><img src="asset/images/home.png" width="33px"></a>
<script>
$(document).ready(function () {
      window.scrollTo(0,0);
  });

</script>
