<section class="detailsPage">
<!-- <a href="#/details/{{prevItem}}" class="btn">&lt;</a>
	<a href="#/details/{{nextItem}}" class="btn">&gt;</a>
	 -->	<div class="country" ng-model="country">
		<h3>{{country[whichItem].Name}}</h3>
		<div class="info">
			<h4>Here is some information about the city of {{country[whichItem].Name}} </h4>

			<p>Region: <strong>{{country[whichItem].Region}} </strong> </p>
			<p>Conntinent: <strong>{{country[whichItem].Continent}} </strong></p>
			<p>Language: <strong>{{country[whichItem].Language}} </strong></p>
			<p>City Population: <strong>{{country[whichItem].City_Population}} </strong></p>
			<p>Country Population: <strong>{{country[whichItem].Country_Population}} </strong></p>
			<p>Year of Indipendence: <strong>{{country[whichItem].IndepYear}} </strong></p>
			<p>Government Structure: <strong>{{country[whichItem].GovernmentForm}} </strong></p>
			<p>Head of State / President: <strong>{{country[whichItem].HeadOfState}} </strong></p>
			<p>Found in Country: <strong>{{country[whichItem].Country}} </strong></p>
		</div>
	</div>
	<a href="index.php">&laquo; Back to Search</a>
</section>
