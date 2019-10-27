<!-- title -->
						<div class="title">My Skills</div>

						<!-- content -->
						<div class="row">
                            <?php
                                
                                foreach($skill as $data){
                                    echo "<div class=\"col col-d-6 col-t-6 col-m-12 border-line-v\">
								<div class=\"skills-list\">";
                                    echo "<div class=\"skill-title border-line-h\">
										<div class=\"icon\"><i class=\"ion $data[icon]\"></i></div>
										<div class=\"name\">$data[skill_category]</div>
									</div><ul>";
                                    
                                    foreach($data['item'] as $item){
                                        echo "<li class=\"border-line-h\"> 
											<div class=\"name\">$item[name]</div>
											<div class=\"progress\">
												<div class=\"percentage\" style=\"width:$item[value]%;\"></div>
											</div>
										</li>";
                                    }
                                    
                                    echo "</ul></div></div>";
                                }
                                
                            ?>
							

							<div class="clear"></div>
						</div>