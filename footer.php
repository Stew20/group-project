<footer id="footer">
			<?php
				echo('<img class="centerImage" src="'.$path.'assets/images/stew20Logo.png" alt="Logo">');
			?>
            <h4> © 2017 Stew20 </h4>
			<div class="footerWidth">
				<ul class="footerList">
					<li><h4> Karnowsky Estime </h4></li>
					<li>
						 xxx1234@rit.edu <br>
					</li>
				</ul>
			</div>
			
			<div class="footerWidth">
				<ul class="footerList">
					<li><h4> Patrick Lennon </h4></li>
					<li> 
						 xxx1234@rit.edu <br>
					</li>
				</ul>
			</div>
			
			<div class="footerWidth">
				<ul class="footerList">
					<li><h4> Jason Beaulieu </h4></li>
					<li> 
						 xxx1234@rit.edu <br>
					</li>
				</ul>
			</div>
			
			<div class="footerWidth">
				<ul class="footerList">
					<li><h4> YaLing Lian </h4></li>
					<li>
						 xxx1234@rit.edu <br>
					</li>
				</ul>
			</div>
			
			<div class="footerWidth">
				<ul class="footerList">
					<li><h4> Eric Cen </h4></li>
					<li>
						 xxx1234@rit.edu <br>
					</li>
				</ul>
			</div>
			
			<div class="footerWidth">
				<ul class="footerList">
					<li><h4> Alex King </h4></li>
					<li> 
						 xxx1234@rit.edu <br>
					</li>
				</ul>
			</div>
        </footer>
		<?php
			if( $path == "./")
			{
				echo(' <script src="'.$path.'assets/javascript/nav_bar_level1.js"></script> ');
			}
			else
			{
				echo(' <script src="'.$path.'assets/javascript/nav_bar_level2.js"></script> ');
			}
		
		?>

