<?php

session_start();

?>

<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="../index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Events</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="../adminNew/createEvents.php">Create</a></li>
											<li id="menu-academico-avaliacoes" ><a href="updateEvents.php">Update</a></li>
											<li id="menu-academico-avaliacoes" ><a href="deleteEvents.php">Delete</a></li>
										  </ul>
									 </li>

										<?php
										$db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

										$query = 'SELECT * FROM alumni.requests' ;

										$res = $db->query($query) or die("Can't Connect to Query...");

										$row_cnt = $res->num_rows;
										?>

										<li><a href="manageUser.php"><i class="fa fa-user" aria-hidden="true"></i>
												<span>Manage User <span class="badge badge-light"> <?php echo $row_cnt; ?> </span></span><div class="clearfix"></div>
											</a>
										</li>


										<?php
										$db = new mysqli('localhost', 'root', '', 'alumni') or die("Can't Connect to database");

										$query = 'SELECT * FROM alumni.validate_ticket' ;

										$res = $db->query($query) or die("Can't Connect to Query...");

										$row_cnt = $res->num_rows;
										?>

										<li><a href="manageTicket.php"><i class="fa fa-ticket" aria-hidden="true"></i>
												<span>Manage Ticket Request <span class="badge badge-light"> <?php echo $row_cnt; ?> </span></span><div class="clearfix"></div>
											</a>
										</li>




										<li id="menu-academico" ><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Department-wise Alumni</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="../adminNew/createEvents.php">Add</a></li>
												<li id="menu-academico-avaliacoes" ><a href="updateEvents.php">Update</a></li>
												<li id="menu-academico-avaliacoes" ><a href="deleteEvents.php">Delete</a></li>
											</ul>
										</li>

										<li id="menu-academico" ><a href="#"><i class="fa fa-deaf" aria-hidden="true"></i><span> Expired Alumni</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="../adminNew/createEvents.php">Create</a></li>
												<li id="menu-academico-avaliacoes" ><a href="updateEvents.php">Update</a></li>
												<li id="menu-academico-avaliacoes" ><a href="deleteEvents.php">Delete</a></li>
											</ul>
										</li>

										<li><a href="manageCommittee.php"><i class="fa fa-automobile" aria-hidden="true"></i>
												<span>Manage Committee</span><div class="clearfix"></div>
											</a>
										</li>

										<?php
										if (!isset($_SESSION['status']))
										{
											echo ' <li><a href="login.php">Login</a></li>';
										}
										else
										{
											if (isset($_SESSION['access_token']))
											{
												echo '<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" 
													role="button" aria-haspopup="true" aria-expanded="false">'
													.$_SESSION['givenName'] . ' '.$_SESSION['familyName'].'<span class="caret"></span></a>
												
													<ul class="dropdown-menu">
													  
														<li><a href="../logout.php">Logout</a></li>
													  
													</ul>
												</li>';
											}
											else{
												echo '<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" 
													role="button" aria-haspopup="true" aria-expanded="false">'
													. $_SESSION['unm'] . '<span class="caret"></span></a>
												
													<ul class="dropdown-menu">
													
														<li><a href="../../logout.php">Logout</a></li>
													  
													</ul>
												</li>';
											}

										}
										?>
								  </ul>
								</div>
							  </div>