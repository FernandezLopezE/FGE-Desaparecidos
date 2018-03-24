<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- bootstrap -->
		{!! Html::style('assets-master/dist/css/bootstrap.css') !!}
		<!-- icons-fontawesome -->
		{!! Html::style('assets-master/icons/font-awesome/css/font-awesome.min.css') !!}
		<!-- custom style -->
		{!! Html::style('assets-master/style.css') !!}
		<!-- tipografía oficial -->
		{!! Html::style('assets-master/css/font-neosans.css') !!}
		<title>Document</title>
</head>
<body>
		<nav class="bg-dark">
			<div class="container">
				<ul class="nav justify-content-end navbar-dark">
					<li class="nav-item">
						<a class="nav-link active social-icon" href="mailto:contacto@fiscaliaveracruz.gob.mx"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link social-icon" href="facebook.com/fgeveracruz/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link social-icon" href="youtube.com/channel/UC464yhyQ9Zc6FYkPyN69cgA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item social-icon">
						<a class="nav-link disabled" href="twitter.com/FGE_Veracruz"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</nav>    <!-- social menu -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top nav-sh">
			<div class="container">
				<a class="navbar-brand" href="index.html">
						<img src="img/logo-fge-svg.svg" alt="fiscaliaveracruz.gob.mx" style="height: 80px">
				</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="nosidebar.html">No Sidebar</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="pageblank.html">Page Blank</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="404.html">404</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.html">logout</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Dropdown link
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
					</div>
			</div>       
		</nav> <!-- menú -->
				
		<div class="bg-300">
			<nav aria-label="breadcrumb" class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Inicio</li>
					</ol>
			</nav>
		</div>           
		<!-- breadcrumb -->    

		<section class="container my-4 wrapper">
						<button type="button" class="btn btn-primary">Primary</button>
						<button type="button" class="btn btn-secondary">Secondary</button>
						<button type="button" class="btn btn-success">Success</button>
						<button type="button" class="btn btn-danger">Danger</button>
						<button type="button" class="btn btn-warning">Warning</button>
						<button type="button" class="btn btn-info">Info</button>
						<button type="button" class="btn btn-light">Light</button>
						<button type="button" class="btn btn-dark">Dark</button>
						
						<button type="button" class="btn btn-link">Link</button>

						<button type="button" class="btn btn-primary btn-lg">Large button</button>
						<button type="button" class="btn btn-secondary btn-lg">Large button</button>
						
						<hr>

								<button type="button" class="btn btn-outline-primary">Primary</button>
								<button type="button" class="btn btn-outline-secondary">Secondary</button>
								<button type="button" class="btn btn-outline-success">Success</button>
								<button type="button" class="btn btn-outline-danger">Danger</button>
								<button type="button" class="btn btn-outline-warning">Warning</button>
								<button type="button" class="btn btn-outline-info">Info</button>
								<button type="button" class="btn btn-outline-light">Light</button>
								<button type="button" class="btn btn-outline-dark">Dark</button> 

								<button type="button" class="btn btn-primary btn-sm">Small button</button>
								<button type="button" class="btn btn-secondary btn-sm">Small button</button>

								<!-- end-btns -->
								
								<div class="row">
												<div class="col-12 col-md-8 mt-3">
														<div class="card">
																<nav class="card-header">
																		<div class="nav nav-tabs" id="nav-tab" role="tablist">
																				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-form" role="tab" aria-controls="nav-home" aria-selected="true">Form</a>
																				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-lorem" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
																				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
																		</div>
																</nav>  <!-- tap-menu -->
																<div class="tab-content card-body" id="nav-tabContent">
																		<div class="tab-pane fade show active" id="nav-form" role="tabpanel" aria-labelledby="nav-home-tab">
																						<form>
																										<div class="form-group">
																											<label for="exampleFormControlInput1">Email address</label>
																											<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
																										</div>
																										<div class="form-group">
																											<label for="exampleFormControlSelect1">Example select</label>
																											<select class="form-control" id="exampleFormControlSelect1">
																												<option>1</option>
																												<option>2</option>
																												<option>3</option>
																												<option>4</option>
																												<option>5</option>
																											</select>
																										</div>
																										<div class="form-group">
																												<div class="form-row">
																														<div class="form-group col-md-6">
																															<label for="inputCity">City</label>
																															<input type="text" class="form-control" id="inputCity">
																														</div>
																														<div class="form-group col-md-4">
																															<label for="inputState">State</label>
																															<select id="inputState" class="form-control">
																																<option selected>Choose...</option>
																																<option>...</option>
																															</select>
																														</div>
																														<div class="form-group col-md-2">
																															<label for="inputZip">Zip</label>
																															<input type="text" class="form-control" id="inputZip">
																														</div>
																													</div>
																										</div>
																										<div class="form-group">
																											<label for="exampleFormControlTextarea1">Example textarea</label>
																											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
																										</div>
																									</form>
																									<form>
																												<div class="form-row align-items-center">
																													<div class="col-sm-3 my-1">
																														<label class="sr-only" for="inlineFormInputName">Name</label>
																														<input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
																													</div>
																													<div class="col-sm-3 my-1">
																														<label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
																														<div class="input-group">
																															<div class="input-group-prepend">
																																<div class="input-group-text">@</div>
																															</div>
																															<input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
																														</div>
																													</div>
																													<div class="col-auto my-1">
																														<div class="form-check">
																															<input class="form-check-input" type="checkbox" id="autoSizingCheck2">
																															<label class="form-check-label" for="autoSizingCheck2">
																																Remember me
																															</label>
																														</div>
																													</div>
																													<div class="col-auto my-1">
																														<button type="submit" class="btn btn-primary">Submit</button>
																													</div>
																												</div>
																											</form>
																		</div>        <!-- tap-1 form -->
																		<div class="tab-pane fade" id="nav-lorem" role="tabpanel" aria-labelledby="nav-profile-tab">
																				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium tristique sem. Phasellus pulvinar commodo laoreet. Sed vel iaculis justo. Nulla vitae felis a arcu sagittis accumsan nec ut est. Ut nunc sapien, sollicitudin non accumsan non, tempor sit amet risus. Duis sit amet accumsan metus. Sed porta, massa placerat semper rhoncus, lorem neque tempus velit, et tempus ligula urna id ex. Aenean feugiat erat velit, in feugiat dui tincidunt vel. In hac habitasse platea dictumst. Pellentesque pretium, lacus et commodo pellentesque, elit elit maximus dui, non mattis massa lectus eu turpis. Maecenas sagittis, ipsum vel venenatis interdum, mi magna tincidunt augue, eu maximus quam lectus at purus.</p>

																		</div>                <!-- tap-2 lorem -->
																		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
																				<div class="alert alert-success" role="alert">
																				<h4 class="alert-heading">Well done!</h4>
																				<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
																				<hr>
																				<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
																				</div>

																		</div></div>    <!-- tap-3 contact / end tapform -->
																</div>
																<div id="accordion" class=" mt-3">
																				<div class="card">
																					<div class="card-header" id="headingOne">
																						<h5 class="mb-0">
																							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																								<h5>Collapsible Group Item #1</h5>
																							</button>
																						</h5>
																					</div>
																			
																					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
																						<div class="card-body">
																							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																						</div>
																					</div>
																				</div>
																				<div class="card">
																					<div class="card-header" id="headingTwo">
																						<h5 class="mb-0">
																							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																								<h5>Collapsible Group Item #2</h5>
																							</button>
																						</h5>
																					</div>
																					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
																						<div class="card-body">
																							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																						</div>
																					</div>
																				</div>
																				<div class="card">
																					<div class="card-header" id="headingThree">
																						<h5 class="mb-0">
																							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																								<h5>Collapsible Group Item #3</h5>
																							</button>
																						</h5>
																					</div>
																					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
																						<div class="card-body">
																							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dolore, impedit eveniet necessitatibus voluptate distinctio quam repellendus voluptates voluptatum inventore rem sapiente minus esse saepe iste harum architecto numquam quis vero dignissimos beatae est id libero adipisci enim odio natus commodi explicabo modi similique nesciunt deserunt vel consectetur velit omnis quaerat corrupti. Cumque, perspiciatis, culpa, reprehenderit laboriosam obcaecati deleniti soluta tempora ipsum ipsam iure temporibus dolore modi quidem cum doloribus ex vel suscipit sapiente ut esse optio voluptates molestias natus nostrum illo nihil quisquam facilis hic atque voluptas quae pariatur placeat officia doloremque quia ea recusandae rem iste asperiores iusto debitis quod incidunt id nemo repellendus itaque. Iure, vel, expedita quam repellendus aliquam fugit autem obcaecati libero reiciendis excepturi officia voluptate molestiae quis itaque consequatur nulla ea sunt facilis cupiditate tempora sequi nam in asperiores! Sunt, maxime at id eaque debitis quasi a possimus eveniet eum velit tempore quidem voluptates expedita quibusdam officiis. Ipsum, quaerat, vero, adipisci enim autem inventore eum maiores consectetur culpa molestiae cumque sed qui dolorem. Placeat, quae deleniti molestiae minima cupiditate quaerat sit est perspiciatis error iste. Ratione, minus, commodi, magni laborum doloribus libero ullam quos tenetur quis molestias ipsam consequuntur harum asperiores culpa nostrum omnis.
																						</div>
																					</div>
																				</div>
																			</div> 
												</div>               <!-- end accordion -->
												
												<div class="col-12 col-md-4">
																<div class="card bg-light mb-3 mt-3">
																				<div class="card-header">Header</div>
																				<div class="card-body">
																					<h5 class="card-title">Light card title</h5>
																					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
																				</div>
																			</div>
																<div class="card text-white bg-primary mb-3">
																				<div class="card-header">Header</div>
																				<div class="card-body">
																					<h5 class="card-title">Primary card title</h5>
																					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
																				</div>
																			</div>
																			<div class="card text-white bg-info mb-3">
																				<div class="card-header">Header</div>
																				<div class="card-body">
																					<h5 class="card-title">Secondary card title</h5>
																					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
																				</div>
																			</div>                     <!-- end-example card -->

																			<div class="row">

																						<div class="col-md-4">
																								<div class="p-3 mb-3 swatch-1">Primario</div>
																						</div>

																						<div class="col-md-4">
																								<div class="p-3 mb-3 swatch-2">P-light</div>
																						</div>

																						<div class="col-md-4">
																								<div class="p-3 mb-3 swatch-3">P-dark</div>
																						</div>

																						<div class="col-md-4">
																								<div class="p-3 mb-3 swatch-4">Secondary</div>
																						</div>

																						<div class="col-md-4">
																								<div class="p-3 mb-3 swatch-5">S-light</div>
																						</div>

																						<div class="col-md-4">
																								<div class="p-3 mb-3 swatch-6">S-dark</div>
																						</div>

																				</div>
												</div>                     <!-- end- col -->
											</div>            <!-- end- row -->
											
		</section>    <!-- END-CONTENT -->

		<section class="py-5 pre-footer">
				<div class="container">
						<div class="row">
										<div class="col-12 col-md-4">
														<h4 class="footer-title">Footer 1</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
										<div class="col-12 col-md-4">
														<h4 class="footer-title">Footer 2</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
										<div class="col-12 col-md-4">
														<h4 class="footer-title">Contacto</h4>
														<p>Circuito Rafael Guízar y Valencia No. 707, Colonia Reserva Territorial C.P. 91096 Xalapa, Veracruz. 
																		Teléfono: 01 228 841 6170 
																		contacto@fiscaliaveracruz.gob.mx</p>
										</div>
									</div>
				</div>
		</section>    <!-- END-PREFOOTER -->

		<footer class="bg-secondary border-top py-3">
				<div class="container">
					 <small>Copyright © 2018 Fiscalía General del Estado de Veracruz, DCIIT. | Avisos de Privacidad</small> 
				</div>
		</footer>    <!-- END-FOOTER -->

		<!-- <a href="#top" class="to-top">Top</a> -->


<script src="js/main.js"></script> <!-- to-top jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>