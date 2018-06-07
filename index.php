<!DOCTYPE html>
<html lang="fr">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<title>Collectif Corail</title>
</head>
<body>
	<section>
		<main class="main__container">

			<div class="main__slide" id="lobby">
				
			</div>

			<div class="main__slide" id="about_us">
				<div class="aboutus__container">
					<div id="video">
						<h1>About us</h1>
						<p>Collectif d'artistes, nous proposons des cours, stages, formations et organisation d'événements artistiques (de la conception graphique, à l'animation)</p>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/k_MhieA-T34" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						
					</div>
					
				</div>
			</div>

			<div class="main__slide" id="agenda">
			<h2>Calendrier</h2>
			<div class="agenda">
				<div class="table-responsive">
					<table class="table table-condensed table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time</th>
								<th>Event</th>
							</tr>
						</thead>
						<tbody>
							<!-- Single event in a single day -->
							<tr>
								<td class="agenda-date" class="active" rowspan="1">
									<div class="dayofmonth">26</div>
									<div class="dayofweek">Saturday</div>
									<div class="shortdate text-muted">July, 2014</div>
								</td>
								<td class="agenda-time">
									5:30 AM
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										<i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
										Fishing
									</div>
								</td>
							</tr>
							
							<!-- Multiple events in a single day (note the rowspan) -->
							<tr>
								<td class="agenda-date" class="active" rowspan="3">
									<div class="dayofmonth">24</div>
									<div class="dayofweek">Thursday</div>
									<div class="shortdate text-muted">July, 2014</div>
								</td>
								<td class="agenda-time">
									8:00 - 9:00 AM 
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										Doctor's Appointment
									</div>
								</td>
							</tr>
							<tr>
								<td class="agenda-time">
									10:15 AM - 12:00 PM 
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										Meeting with executives
									</div>
								</td>
							</tr>
							<tr>
								<td class="agenda-time">
									7:00 - 9:00 PM
								</td>
								<td class="agenda-events">
									<div class="agenda-event">
										Aria's dance recital
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
						
			</div>

			<div class="main__slide" id="gallery">

				<div class="gallery__container">
					
				</div>
				
			</div>

			<div class="main__slide" id="contact">
				
			</div>
			
		</main>



		<footer class="footer__corail">
			<ul>
				<li><i class="fas fa-map-marker"> Rue Vanderkindere 293 1180 - Bruxelles </i></li>		
				<li><i class="fas fa-mobile-alt"> 0485 71 73 03 </i></li>
				<li><i class="fas fa-envelope"></i><a href="#"> corail.collectif@gmail.com</a> </li>
				<li><i class="fab fa-facebook-square "></i></li>
				<li><i class="fab fa-facebook-messenger"></i></li>
				<li><i class="fab fa-youtube"></i></li>

				<li><div class="button__slide" onclick="clickSlide()">Next</div></li>
				
			</ul>

		</footer>

                      
			
		
	</section>

</body>
<script type="text/javascript" src="main.js"></script>
</html>