@extends('layouts.front')

@section('body')
    <!-- begin:slider -->
    <div id="home">
      <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#home-slider" data-slide-to="0" class="active"></li>
          <li data-target="#home-slider" data-slide-to="1"></li>
          <li data-target="#home-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active" style="background: url(/img/tmp/img01.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="carousel-content">
                    <h2 class="animated fadeInUpBig text-center text-black">Hello</h2>
                      <p class="animated rollIn text-black text-center"><span class="text900">Welcome to Dodolan Manuk</span> an awesome catalog theme, <br> built with <i class="fa fa-heart-o"></i> in <span class="text900">Ngayogyokarto hadiningrat.</span><br><br> <a href="#" class="btn btn-green btn-lg">Get Started</a></p>  
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <div class="item" style="background: url(/img/tmp/img02.jpg);">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="carousel-content">
                  	<h3 class="animated fadeInLeftBig text-left">.Built</h3>
					<p class="animated fadeInDownBig text-left">Your own online shop using this catalog theme.<br> Simple and easy cutomize just $12.</p>
					<a class="btn btn-green btn-lg animated fadeInRight" href="#">Learn more &raquo;</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#home-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#home-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
        <div class="pattern"></div>
      </div>

    </div>
    <!-- end:slider -->
	
	<!-- begin:tagline -->	
	<div id="tagline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Hello There, This is 'Dodolan Manuk' Themes</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis. Sed blandit augue vitae augue scelerisque bibendum.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end:tagline -->
	
	<!-- begin:featured -->
	<div id="featured">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-title">
						<h2>Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="featured-container">
						<div class="featured-photos">
							<i class="fa fa-gift"></i>
						</div>
						<h3>the chairman</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="featured-container">
						<div class="featured-photos">
							<i class="fa fa-heart-o"></i>
						</div>
						<h3>the vice chairman</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="featured-container">
						<div class="featured-photos">
							<i class="fa fa-flag"></i>
						</div>
						<h3>the treasurer</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:featured -->
	
	<!-- begin:catalogue -->
	<div id="catalogue">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-title">
						<h2>Most Wanted</h2>
						<p>The best of the best item most wanted in 2013</p>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="thumbnail">
					  <div class="caption-img" style="background: url(/img/tmp/manuk.jpg);"></div>
					  <div class="caption-details">
						<h3>Border Canary</h3>
						<span class="price">$200</span>
					  </div>
					  <a href="detail.html"><div class="caption-link"><i class="fa fa-plus"></i></div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:catalogue -->	
	
	<!-- begin:testimoni -->
	<div id="testimoni">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="testimoni-icon"><i class="fa fa-quote-left"></i></div>
					<h3>Our Testimonials</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="testi" class="carousel slide" data-ride="carousel">
				      <div class="carousel-inner">
				        <div class="item active">
				           <p class="testimoni-item">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<h4>&#8212; John doe, Scriptlabs &#8212;</h4>
				        </div>
				        <div class="item">
				           <p class="testimoni-item">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<h4>&#8212; John doe, Scriptlabs &#8212;</h4>
				        </div>
				        <div class="item">
				           <p class="testimoni-item">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<h4>&#8212; John doe, Scriptlabs &#8212;</h4>
				        </div>
				      </div>
				      <a class="left carousel-control" href="#testi" data-slide="prev">&lsaquo;</a>
				      <a class="right carousel-control" href="#testi" data-slide="next">&rsaquo;</a>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:testimoni -->
	
	<!-- begin:blog -->
	<div id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-title">
						<h2>From Blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="blog-container">
						<div class="blog-date">
							<i class="fa fa-calendar"></i>
							<span class="meta-date">26</span>
							<span class="meta-month-year">MAR 2014</span>
						</div>
						<h3><a href="single.html">the post title</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
						<p><a href="single.html" class="btn btn-green">Read more &raquo;</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="blog-container">
						<div class="blog-date">
							<i class="fa fa-calendar"></i>
							<span class="meta-date">03</span>
							<span class="meta-month-year">FEB 2014</span>
						</div>
						<h3><a href="single.html">the post title</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
						<p><a href="single.html" class="btn btn-green">Read more &raquo;</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="blog-container">
						<div class="blog-date">
							<i class="fa fa-calendar"></i>
							<span class="meta-date">19</span>
							<span class="meta-month-year">JAN 2014</span>
						</div>
						<h3><a href="single.html">the post title</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus, at posuere neque.</p>
						<p><a href="single.html" class="btn btn-green">Read more &raquo;</a></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end:blog -->
	
@stop
	

