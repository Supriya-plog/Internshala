<?php include('header.php');
session_start();
?>
	<div class="container-fluid">
		<div class="container d-flex align-items-center">
			<div class="row w-100 d-flex justify-content-center">
				<div class="col-md-4 text-center">
				
					<form id="login" method="post" action="login.php">
						<h2 class="text-white">Secret diary</h2>
						<br>
						<p class="text-white">Store your thoughts permanently and securely</p>
						<?php
                            if (isset($_SESSION["perr"])) {
                                $error = $_SESSION["perr"];
                                echo "<span class='px-1' id='span'>$error</span>";
								unset($_SESSION["perr"]);
                            }
							elseif(isset($_SESSION["error"])){
								$error = $_SESSION["error"];
								echo "<span class='px-5' id='span'>$error</span>";
								unset($_SESSION["error"]);
							}
						
						?>  
						<p class="text-white mt-3">Interested? Sign up now</p>
						<input type="text" name="email" placeholder="Your Email" class="form-control">
						<br>
						<input id="password" type="password" name="password" placeholder="Password" class="form-control">
						<br>
						<div class=" group-input">
							<input type="checkbox" name=""><small class=" text-white mx-3">Stay logged in</small>
						</div>
						<br>
						<button class="btn btn-success" type="submit">Log in</button><br><br>
					</form><!-- login form end-->

					

					<form id="signup" method="post" action="index_insert.php">
						<h2 class="text-white">Secret diary</h2><br>

						<p class="text-white">Store your thoughts permanently and securely</p>
						<p class="text-white">Login using your username and password</p>
						<input type="text" name="email" placeholder="Your Email" class="form-control">
						<br>
						<input type="password" name="password" placeholder="Password" class="form-control">
						<br>
						<div class=" group-input">
							<input type="checkbox" name=""><small class=" text-white mx-3">Stay logged in</small>
						</div>
						<br>
						<button class="btn btn-success" type="submit">Sign Up!</button><br><br>
					</form><!-- signup form end-->

					<div class="d-flex justify-content-center">
						<!-- <button id="sin" onclick="signup()" class="text-primary" style="background-color: transparent;">Signup</button> -->
						<button id="log" onclick="login()" class="text-primary"
							style="background-color: transparent;">signup</button>
					</div>
					<!----d-flex justify-content-center end----->


				</div>
				<!-----col-md-4 text-center---->
			</div>
			<!------row w-100 d-flex justify-content-center------->

		</div>
		<!------container d-flex align-items-center end --------->
	</div>

<?php include('footer.php');?>
	