<section class="indexPage">
	<div class="search">
		<h1>World Cities Directory</h1>
		<div class="col-md-6">		<label for="" class="search">Search</label> </div>
		<div class="col-md-6 pull-left"><input ng-model="query" placeholder="Search the world" autofocus class="form-control"></div>		
	</div>
	<div class="col-md-12">
			<ul class="cls">
				<li ng-animate="'animate'" ng-repeat="item in country | filter: query | limitTo: 25">
					<a href="#/details/{{country.indexOf(item)}}">{{item.Name}}  is in <span class="continent">{{item.Continent}}</span> </a>
				</li>
			</ul>
	</div>	
</section>