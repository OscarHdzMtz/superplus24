@extends('layouts.fronted.index')
<div class="container">
	<div class="row">
		<div class="col-xs-11 col-md-10 col-centered">

			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
				<div class="carousel-inner">
					<div class="item active">
						<div class="carousel-col">
							<div class="block red img-responsive">
                                <img src="https://source.unsplash.com/300x300/?west-australia" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="carousel-col">
							<div class="block green img-responsive"></div>
						</div>
					</div>
					<div class="item">
						<div class="carousel-col">
							<div class="block blue img-responsive"></div>
						</div>
					</div>
					<div class="item">
						<div class="carousel-col">
							<div class="block yellow img-responsive"></div>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<div class="left carousel-control">
					<a href="#carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="right carousel-control">
					<a href="#carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>