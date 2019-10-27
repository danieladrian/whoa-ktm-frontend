						<!-- title -->
						<div class="title">Experience</div>
<!-- content -->
						<div class="row">

							<!-- experience -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-briefcase"></i></div>
									<div class="name">Work Experience</div>
								</div>
								<div class="resume-items">
                                    <?php
                                        $i=0;
                                        foreach($works as $data){
                                            if($i==0){
                                                echo "<div class=\"resume-item border-line-h active\">";
                                            }else{
                                                echo "<div class=\"resume-item border-line-h\">";
                                            }
                                            
                                            echo "<div class=\"date\">";
                                            
                                            if($data['start']==null){
                                                if($data['end']==null){
                                                    echo "-";
                                                }else{
                                                    echo Date("Y",strtotime($data['end']));
                                                }
                                            }else{
                                                if($data['end']==null){
                                                    echo Date("Y",strtotime($data['start']))." - Present";
                                                }else{
                                                    echo Date("Y",strtotime($data['start']))." -".Date("Y",strtotime($data['end']));
                                                }
                                            }
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[do]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p><p>
                                                    $data[video]
                                                </p>";
                                            $i++;
                                            echo "</div>";   
                                        }
                                    
                                        foreach($internship as $data){
                                            echo "<div class=\"resume-item border-line-h\">";
                                            
                                            echo "<div class=\"date\">";
                                            
                                            if($data['start']==null){
                                                if($data['end']==null){
                                                    echo "-";
                                                }else{
                                                    echo Date("Y",strtotime($data['end']));
                                                }
                                            }else{
                                                if($data['end']==null){
                                                    echo Date("Y",strtotime($data['start']))." - Present";
                                                }else{
                                                    echo Date("Y",strtotime($data['start']))." -".Date("Y",strtotime($data['end']));
                                                }
                                            }
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[do]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p><p>
                                                    $data[video]
                                                </p>";
                                            $i++;
                                            echo "</div>";   
                                        }
                                    ?>
								</div>
							</div>

							<!-- education -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-university"></i></div>
									<div class="name">Education</div>
								</div>
								<div class="resume-items">
                                    
                                    <?php
                                        foreach($formal_education as $data){
                                            echo "<div class=\"resume-item border-line-h\">";
                                            echo "<div class=\"date\">";
                                            
                                            if($data['start']==null){
                                                if($data['end']==null){
                                                    echo "-";
                                                }else{
                                                    echo Date("Y",strtotime($data['end']));
                                                }
                                            }else{
                                                if($data['end']==null){
                                                    echo Date("Y",strtotime($data['end']))." - Present";
                                                }else{
                                                    echo Date("Y",strtotime($data['start']))." -".Date("Y",strtotime($data['end']));
                                                }
                                            }
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[name]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p>";
                                            $i++;
                                            echo "</div>";   
                                        }
                                    
                                    foreach($informal_education as $data){
                                            echo "<div class=\"resume-item border-line-h\">";
                                            echo "<div class=\"date\">";
                                            
                                            if($data['start']==null){
                                                if($data['end']==null){
                                                    echo "-";
                                                }else{
                                                    echo Date("Y",strtotime($data['end']));
                                                }
                                            }else{
                                                if($data['end']==null){
                                                    echo Date("Y",strtotime($data['end']))." - Present";
                                                }else{
                                                    echo Date("Y",strtotime($data['start']))." -".Date("Y",strtotime($data['end']));
                                                }
                                            }
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[name]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p>";
                                            $i++;
                                            echo "</div>";   
                                        }
                                    ?>
                                    
								</div>
							</div>
                            
                            <!-- organization -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-ionic"></i></div>
									<div class="name">Organizations</div>
								</div>
								<div class="resume-items">
                                    <?php

                                        foreach($organization as $data){
                                            echo "<div class=\"resume-item border-line-h\">";
                                            
                                            echo "<div class=\"date\">";
                                            
                                            if($data['start']==null){
                                                if($data['end']==null){
                                                    echo "-";
                                                }else{
                                                    echo Date("Y",strtotime($data['end']));
                                                }
                                            }else{
                                                if($data['end']==null){
                                                    echo Date("Y",strtotime($data['start']))." - Present";
                                                }else{
                                                    echo Date("Y",strtotime($data['start']))." -".Date("Y",strtotime($data['end']));
                                                }
                                            }
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[do]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p><p>
                                                    $data[video]
                                                </p>";
                                            echo "</div>";   
                                        }
                                    
                                    ?>
								</div>
							</div>
                            
                            <!-- volunteer -->
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-android-hand"></i></div>
									<div class="name">Volunteer</div>
								</div>
								<div class="resume-items">
                                    <?php
                                        foreach($volunteer as $data){
                                            echo "<div class=\"resume-item border-line-h\">";
                                            
                                            echo "<div class=\"date\">";
                                            
                                            if($data['start']==null){
                                                if($data['end']==null){
                                                    echo "-";
                                                }else{
                                                    echo Date("Y",strtotime($data['end']));
                                                }
                                            }else{
                                                if($data['end']==null){
                                                    echo Date("Y",strtotime($data['start']))." - Present";
                                                }else{
                                                    echo Date("Y",strtotime($data['start']))." -".Date("Y",strtotime($data['end']));
                                                }
                                            }
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[do]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p>
                                                <p>
                                                    $data[video]
                                                </p>";
                                            echo "</div>";   
                                        }
                                    
                                    ?>
								</div>
							</div>
                            

							<div class="clear"></div>
						</div>