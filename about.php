<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment1 - Internet Technologies" />
		<meta name="keywords"    content="HTML, CSS" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Personal Detail</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 			
		?>
	
		<section>
			<article>
				<div class="top-wrapper">
					<div class="image-wrapper left">
						<img id="ProfilePic" src ="images/aboutme.jpg" alt="My Photo" />
					</div>
					<div class="details-wrapper right">
						<p id="StudentName"> Name : Hiral Chandora </p>
						<p id="StudentID">Student ID : 4960963</p>
						<p id="Course">Course : Master of Information Technology(Professional Computing)</p>
					</div>
					<div class="clear">
					</div>
				</div>
	
				<div  class="bottom-wrapper">  	
					<h2>Information : </h2>
					<h3>My Place of interest includes :</h3>
					<ol>
						<li>I surf net to enhance my knowledge for new Technologies.</li>
						<li>I listen to music and watch movies to entertain/relax myself in free time.</li>
						<li>Sometime I Play PC HD graphics Game.</li>
						<li>I prefer to read magazines, news and about current events that are happening all around the world. Also I read technology related news and gossips.</li>
					</ol>
					<p><strong> Date Of Birth : </strong> 19 Aug, 1990 </p>
					<p><strong> Hometown : </strong> Ahmedabad, Gujarat, India </p>
					
					<table>
						<caption>Allocation</caption>
						<thead>
							<tr>
								<th scope="col" rowspan="3">Day</th>
								<th scope="col" colspan="7">Time And Subject</th>
							</tr> 
							<tr>
								<th scope="col" colspan="2">Usability</th>
								<th scope="col" colspan="3">IBIS</th>
								<th scope="col" colspan="2">IT</th>
							</tr>
							<tr>
								<th scope="col" colspan="1">Lecture</th>
								<th scope="col" colspan="1">Tutorial</th>
								<th scope="col" colspan="1">Lecture</th>
								<th scope="col" colspan="1">Tutorial</th>
								<th scope="col" colspan="1">Lab</th>
								<th scope="col" colspan="1">Lecture</th>
								<th scope="col" colspan="1">Lab</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td colspan="8">IBIS - Introduction to Business Information System</td>
							</tr>
							<tr>
								<td colspan="8">IT - Internet Technology </td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Tuesday</td>
								<td>12:30</td>
								<td>14:30</td>
								<td>17:30</td>
								<td>-</td>
								<td >-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							
							<tr>
								<td>Wednesday</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>13:30</td>
								<td>14:30</td>
								<td>-</td>
								<td>-</td>
							</tr>
							
							<tr>
								<td>Thursday</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>12:30</td>
								<td>-</td>
							</tr>
							
							<tr>
								<td>Friday</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>12:30</td>
							</tr>
						</tbody>
					</table>
					
					<div id="video">
						<h3>My favourite movie - Despicable me 2 - Trailer Video</h3>
						<video width="320" height="200" controls="True">
							<source src="video/Despicableme2.mp4" type="video/mp4" />
							Your browser does not support the video tag.
						</video>
					</div>
					
					<div id="audio">
						<h3>My favourite music from titanic</h3>
						<audio controls="True">
							<source src="audio/titanic.mp3" type="audio/mp3" />
							Your browser does not support the audio element.
						</audio>
					</div>
				</div>
			</article>
		</section>
		
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	</body>
</html>
