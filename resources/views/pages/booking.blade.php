@extends('basic')

@section('content')

<div class="booking-info">
					<h3>booking</h3><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</div>
				<div class="booking-form">
					<!---strat-date-piker---->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!---/End-date-piker---->
					<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
					<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
					<script type="text/javascript" src="js/JFCore.js"></script>
					<script type="text/javascript" src="js/JFForms.js"></script>
					<!-- Set here the key for your domain in order to hide the watermark on the web server -->
					<script type="text/javascript">
						(function() {
							JC.init({
								domainKey: ''
							});
						})();
					</script>
					<div class="online_reservation">
							<div class="b_room">
								<div class="booking_room">
									<div class="reservation">
										<ul>		
											<li  class="span1_of_1 left">
												 <h5>From</h5>
												 <div class="book_date">
													 <form>
														<input type="text" placeholder="Type Depature City" required="">
													 </form>
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>To</h5>
												 <div class="book_date">
												 <form>
													<input type="text" placeholder="Type Destination City" required="">
												 </form>
												 </div>		
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Arrival</h5>
												 <div class="book_date">
													 <form>
													 <input class="date" id="datepicker" type="text" value="2/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required=>
													 </form>
												 </div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Depature</h5>
												 <div class="book_date">
												 <form>
													<input class="date" id="datepicker1" type="text" value="22/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '22/08/2013';}" required=>
												 </form>
												 </div>		
											 </li>
											 <li class="span1_of_1">
												 <h5>Class</h5>
												 <!----------start section_room----------->
												 <div class="section_room">
													  <select id="country" onchange="change_country(this.value)" class="frm-field required">
															<option value="null">Economy</option>
															<option value="null">Business</option>         
															<option value="AX">First Class</option>
															<option value="AX">Premium Economy</option>
													  </select>
												 </div>	
											 </li>
											 <li class="span1_of_3">
													<div class="date_btn">
														<form>
															<input type="submit" value="Find Flight" />
														</form>
													</div>
											 </li>
											 <div class="clearfix"></div>
										</ul>
									 </div>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
					<!---->
				</div>
				<div class="clearfix"></div>
				<div class="booking-grids">
					<h3>WE ARE PROVIDE</h3>
					<div class="col-md-7 booking-grid-left">
						<h4>QUISQUE LECTUS IPSUM, FERMENTUM EU SODALES NON, AUCTOR IN MAURIS. NULLA PRETIUM CURSUS NULLA, AC RUTRUM MAGNA LAOREET EU.</h4>
						<p>Maecenas ultricies molestie efficitur. Maecenas bibendum tincidunt nulla at scelerisque. Fusce sodales nibh ex. Proin vel commodo neque. In congue neque ac venenatis aliquam. Sed vestibulum cursus velit faucibus tempor. Maecenas posuere pellentesque erat, vel auctor mauris fringilla ac. Proin euismod orci nec felis efficitur, a pulvinar nisl viverra. Etiam eu finibus ipsum, id molestie nunc</p>
						<p>Maecenas ultricies molestie efficitur. Maecenas bibendum tincidunt nulla at scelerisque. Fusce sodales nibh ex. Proin vel commodo neque. In congue neque ac venenatis aliquam.Maecenas bibendum tincidunt nulla at scelerisque.</p>
						<div class="read-more red">
							<a href="#">Read More >></a>
						</div>
					</div>
					<div class="col-md-5 booking-grid-right">
						<img src="images/11.jpg" alt="">
					</div>
					<div class="clearfix"> </div>
				</div>
@stop

@section('top_extra')

<div class="how-to">
				<!-- container -->
				<div class="container">
					<div class="how-to-info">
						<h3>HOW TO BOOK</h3>
						<h4>Quisque lectus ipsum, fermentum eu sodales non, auctor in mauris. Nulla pretium cursus nulla, ac rutrum magna laoreet eu.
							Phasellus vel est vel odio finibus lacinia. Donec a diam dictum, elementum ipsum et, pulvina
						</h4>
						<p>Duis vulputate auctor libero, eget viverra ante dapibus sit amet. Vestibulum auctor pellentesque enim, 
						sed ornare metus vehicula eu. Etiam rhoncus eu urna ac feugiat. Praesent sed tempor urna, laoreet dignissim est. 
						Aenean nec justo vitae arcu consequat lobortis. Sed iaculis et dui eu sollicitudin. Morbi id felis porttitor tellus 
						viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam cursus 
						leo nec enim vulputate finibus. Nulla at dui non nisi molestie posuere non sed ante. 
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Nulla at dui non nisi molestie posuere non sed ante. </p>
					</div>
					<div class="how-grids">
						<div class="col-md-4 how-grid">
							<span>1</span>
							<a href="#">LOREM IPSUM DOLOR SIT</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>2</span>
							<a href="#">LOREM IPSUM DOLOR SIT</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>3</span>
							<a href="#">LOREM IPSUM DOLOR SIT</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
@stop

@section('bottom_extra')
<div class="visiting">
				<!-- container -->
				<div class="container">
					<div class="visiting-info">
						<h3>VISITING PLACES</h3>
					</div>
					<div class="top-grids">
						<div class="top-grid">
							<img src="images/6.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/3.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/2.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="top-grid">
							<img src="images/4.jpg" alt="">
							<div class="top-grid-info visiting-grid">
								<h3>Vestibulum auctor</h3>
								<p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices .</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>

@stop