<!-- M E N U -->
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:60px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="{{ url('/') }}" data-0="line-height:90px;" data-300="line-height:50px;">
					<span><img src="img/rayito_blanco.png" /></span>
					RAYOS&CENTELLAS
					</a></h1>
				</div>


				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						 <!-- <li class="active"><a href="index.html">Home</a></li> -->
						<li><a href="#section-que_hacemos"><?php echo trans('menu.we_do')?></a></li>
						<li><a href="#section-portfolio"><?php echo trans('menu.portfolio')?></a></li>
						<li><a href="#section-contacto"><?php echo trans('menu.contact')?></a></li>
						<li><a href="{{ url('/spanish') }}"><?php echo trans('menu.spanish')?></a></li>
						<li><a href="{{ url('/english') }}"><?php echo trans('menu.english')?></a></li>
					</ul>
				</div><!--/.navbar-collapse -->

			</div>
		</div>
