<?php require('header.php');?>
<div id="contacts" class="decor_page">
	<div id="contacts_info">
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2116.865817739198!2d2.121206248863039!3d41.38059461050564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2sCamp+Nou!5e0!3m2!1sru!2sua!4v1482102924912" width="600px" height="500px" frameborder="1" style="border:2" allowfullscreen></iframe>
		</div>
		<h1>Camp Nou</h1>
		<p>Camp Nou is a football stadium in Barcelona, Catalonia, Spain. It has been the home of FC Barcelona since its completion in 1957.</p>

		<p>With a seating capacity of 99,354, it is the largest stadium in Spain by capacity. It is also the largest stadium in Europe and the third largest association football stadium in the world in terms of capacity. It has hosted numerous international matches at a senior level, including a 1982 FIFA World Cup semi-final match, two UEFA Champions League finals and the football competition at the 1992 Summer Olympics.</p>

		<h2>Address</h2>
		<p>C. Aristides Maillol, 12, 08028 Barcelona, Испания</p>

		<h2>Transport connections</h2>
		<h3>Tramway</h3>
		<p>500 metres from Camp Nou there is the Trambaix Avinguda de Xile station (lines T1, T2 and T3).</p>
		Especially at the end of the matches, the service is stepped up.
		<h3>Metro</h3>
		<p>The stadium is accessible from the Barcelona Metro. The closest stations to Camp nou are Palau Reial, Maria Cristina and Les Corts, on L3; Badal on L5 and Collblanc on L5 or L9. All are 500 to 1,000 metres from Camp Nou, depending on which of the gates (accesses) to Camp Nou are used.</p>

		<p>Closest station to each access:
		<ul>
			<li>Accesses 1–10: Palau Reial.
			<li>Accesses 11–16: Collblanc.
			<li>Accesses 17 and 18: Badal.
			<li>Accesses 19–21: les Corts.
		</ul>
		</p>
		<p>Currently a station for Camp Nou is under construction, on L9 and L10.

		Usually metro services are increased when there is a match. On workdays and Sundays the metro runs until midnight. On Saturdays there is continuous service all night.</p>

		<h3>Bus</h3>
		<p>The bus lines with a stop close to Camp Nou are:
		<br/>TMB lines:
		<ul>
			<li>7 – Diagonal Mar/Z. Universitària</li>
			<li>15 – Hosp. St. Pau/Collblanc
			<li>33 – Z. Universitària/Verneda
			<li>43 – Les Corts/Sant Adrià
			<li>50 – Collblanc / Trinitat Nova
			<li>54 – Estació Nord/Campus Nord
			<li>59 – Pg. Marítim/R. M. Cristina
			<li>63 – Pl. Universitat/Sant Joan Despí
			<li>67 – Pl. Catalunya/Cornellà
			<li>70 – Sants/Pg. Bonanova
			<li>72 – Distr. Gran Via l'Hospitalet/Bonanova
			<li>74 – Z. Universitària/Fabra i Puig
			<li>75 – Les Corts/Av. Tibidabo
			<li>78 – Est. Sants/St. Joan Despí
			<li>113 – La Mercè
			<li>D20 – Pg. Marítim / Ernest Lluch
		</ul>
	
		AMB lines:
		<ul>
			<li>L12 – Barcelona (Pl. Reina Maria Cristina)/Cornellà (Almeda)
			<li>N2 – Hospitalet (Av. Carrilet)/Barcelona (Via Augusta)
			<li>N3 – Collblanc/Montcada i Reixac
			<li>N12 – Barcelona (Pl. Portal de la Pau)/St. Feliu de Llob. (La Salut)
			<li>N14 – Barcelona (Rda. Universitat)/Castelldefels (Centre vila)
		</ul>
	</p>
	<p>Usually the lines 15, 43 and 56 service is stepped up, depending on the demand that may occur. Apart from that there are two special lines to Mossèn Jacint Verdaguer Square and to Catalunya Square when there are matches.</p>
	<h3>Airport</h3>
	<p>The stadium is 8.5 miles (13.7 km) away from the El Prat International Airport.</p>
	</div>

	<?php if(! isset($_SESSION["user_id"])) { ?>
       <h2> You are not logged in </h2>
       <?php } else { ?> 
			<h2> Feedback form </h2>
			<form method="post" action="feedback_post_func.php">
				<label> Leave your message below </label>
				<input type="text" name="title" placeholder="Title"> 
				<textarea class="feedback-text" name="feedback_text"> </textarea>
				<input type="submit" name="submit" value="Send">
			</form>
		<?php } ?>
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>