<div class="title">Seminar</div>
                        
                        <!-- content -->
						<div class="row">
                            <!-- Seminar -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-ios-person"></i></div>
									<div class="name">Speaker</div>
								</div>
								<div class="resume-items">
                                    <?php

                                        foreach($speaker_seminar as $data){
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
                                                <div class=\"name\">$data[name]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p>";
                                            echo "</div>";   
                                        }
                                    
                                    ?>
								</div>
							</div>
                            
                            <!-- Seminar -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-ios-people"></i></div>
									<div class="name">Participant</div>
								</div>
								<div class="resume-items">
                                    <?php

                                        foreach($participant_seminar as $data){
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
                                                <div class=\"name\">$data[name]</div>
                                                <div class=\"company\">$data[place]</div>
                                                <p>
                                                    $data[detail]
                                                </p>";
                                            echo "</div>";   
                                        }
                                    
                                    ?>
								</div>
							</div>
                        </div>