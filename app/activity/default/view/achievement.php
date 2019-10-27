<div class="row">
                            <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-trophy"></i></div>
									<div class="name">Achievement</div>
								</div>
								<div class="resume-items">
                                    <?php
                                        foreach($achievement as $data){
                                            echo "<div class=\"resume-item border-line-h\">";
                                            
                                            echo "<div class=\"date\">";
                                            
                                            echo date("Y",strtotime($data['date']));
                                            
                                            echo "</div>
                                                <div class=\"name\">$data[provider]</div>
                                                <div class=\"company\">$data[name]</div>
                                                <p>
                                                    $data[detail]
                                                </p>
                                                <p>
                                                    <b>Scope</b> : $data[scope]
                                                </p>
                                                ";
                                            echo "</div>";   
                                        }
                                    
                                    ?>
								</div>
							</div>

							<div class="clear"></div>
                        </div>