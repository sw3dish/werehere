{% extends 'layout.php' %}

{% block page_title %}Home{% endblock %}

{% block stylesheets %}
	<style type="text/css">
		/* Work & About
		---------------------------------------------------------*/

		#work {
		    padding-top: 20px;

		    .item {
		        padding: 20px 0;
		    }
		    .off {
		        background-color: #ecf0f1;
		    }
		}

		#about {
		    background-color: #a9f2a2;
		    padding: 20px 0;
		}

		#app {
			background-color: #AA5FF3;
			padding: 20px 0;
		}

		#about .avatar{
		    text-align: center;
		}
		#about .avatar img {
		    max-width: 50%;
		}
		#work h3,
		#about h3,
		#app h3 {
		    font-size: 2.2em;
		    margin-bottom: 25px;
		    text-align: center;
		}
		#work p,
		#about p,
		#app p {
		    line-height: 1.4em;
		    margin-bottom: 20px;
		}
		#about a {
		    color: #EEE;
		    border-bottom: 1px dotted #7f8c8d;
		}
		#about a:hover {
		    color: white;
		}
		@media (min-width: 768px) {
		    #work .item,
		    #about {
		        padding: 50px 0;
		    }
		}
		@media (min-width: 992px) {
		    #work .logo img,
		    #about .avatar img {
		        max-width: 100%;
		    }
		    #work h3,
		    #about h3,
		    #app h3 {
		        text-align: left;
		    }
		}

		/* Contact
		---------------------------------------------------------*/

		#contact {
		    font-size: 3em;
		    padding: 20px 0;
		    text-align: center;

		    a {
		        color: #264A9C;
		    }
		    a:hover {
		        color: #4061AD;
		    }
		}
		@media (min-width: 768px) {
		    #contact {
		        padding: 50px 0;
		    }
		}

		/* Homepage - Posts
		---------------------------------------------------------*/

		body.home #content .excerpt {
		    color: #333;
		    display: block;
		    margin-bottom: 40px;
		    -webkit-transition: color 0.3s ease;
		    -moz-transition: color 0.3s ease;
		    -o-transition: color 0.3s ease;
		    transition: color 0.3s ease;
		}
		body.home #content .excerpt:hover {
		    color: #7f8c8d;
		    text-decoration: none;
		}
		body.home #content .excerpt .date {
		    font-size: 0.9em;
		    font-style: italic;
		}
		body.home #content .excerpt h3 {
		    font-weight: 900;
		    margin-top: 5px;
		}
		@media (min-width: 768px) {
		    body.home #content .excerpt {
		        margin-bottom: 75px;
		    }
		    body.home #content h2.title {
		        margin-top: 50px;
		    }
		    body.home #content .excerpt h3 {
		        font-size: 1.8em;
		    }
		}

		.blog-btn {
		    text-align: center;
		}
		.blog-btn .btn {
		    background-color: #95a5a6;
		    border: none;
		    color: white;
		    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
		    font-size: 1em;
		    padding: 10px 30px;
		    -webkit-transition: all 0.3s ease;
		    -moz-transition: all 0.3s ease;
		    -o-transition: all 0.3s ease;
		    transition: all 0.3s ease;
		}
		.blog-btn .btn i {
		    font-size: .8em;
		}
		.blog-btn .btn:hover {
		    background-color: #bbb;
		}
		@media (min-width: 768px) {
		    .blog-btn {
		        margin-bottom: 50px;
		    }
		}

		/* Content
		---------------------------------------------------------*/

		#content {
		    font-family: "Andada", Georgia, Cambria, "Times New Roman", Times, serif;
		    line-height: 1.7em;
		    padding-top: 20px;
		    padding-bottom: 20px;
		    max-width: 768px;
		    margin: 0 auto;
		    word-wrap: break-word;
		}
		#content img {
		    max-width: 100%;
		    height: auto;
		}
		h1.title,
		h2.title {
		    font-family: "Andada", Georgia, Cambria, "Times New Roman", Times, serif;
		    font-weight: bold;
		    margin-bottom: 40px;
		    text-align: center;
		}
		@media (min-width: 768px) {
		    h1.title,
		    h2.title {
		        font-size: 2.4em;
		    }
		}
		#content .single p.info {
		    font-style: italic;
		    margin-bottom: 0;
		}
		@media (min-width: 768px) {
		    #content .single h1 {
		        font-size: 2.2em;
		    }
		}
		#content .single h2 {
		    margin-top: 50px;
		}
		#content .single h1,
		#content .single h2,
		#content .single h3,
		#content .single h4,
		#content .single h5,
		#content .single h6,
		#content .single p,
		#content .single ul,
		#content .single ol,
		#content .single blockquote,
		#disqus_thread {
		    padding: 0 15px;
		    margin-bottom: 25px;
		}
		#content .single ul,
		#content .single ol {
		    margin-left: 30px;
		}
		#content .single pre {
		    margin-bottom: 25px;
		}
		#content .single pre code {
		    padding: 15px 15px;
		}

		@media (min-width: 768px) {
		    #content .single h1,
		    #content .single h2,
		    #content .single h3,
		    #content .single h4,
		    #content .single h5,
		    #content .single h6,
		    #content .single p,
		    #content .single ul,
		    #content .single ol,
		    #content .single blockquote,
		    #disqus_thread {
		        padding: 0 20px;
		    }
		    #content .single pre code {
		        padding: 15px 20px;
		    }
		}
	</style>
{% endblock %}

{% block content %}
	<div id="header">
		<div class="about">
			<h1>We're Here</h1>

			<h2>
				Asymmetrical irony Wes Anderson McSweeney's Austin locavore 3 wolf moon fashion axe.<br/>
				XOXO trust fund wolf, messenger bag Vice meh paleo aesthetic asymmetrical farm-to-table Brooklyn ugh art party. 
			</h2>

			<ul class="list-unstyled">
				<li><a href="">Lorem</a></li>
	            <li class="second"><a href="">Ipsum</a></li>
	            <li class="third"><a href="">Dolor</a></li>
	            <li><a href="">Sit Amet</a></li>
			</ul>
		</div>
	</div>

	<div id="app">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 description">
	                <h3>
	                	Lorem Ipsum
	                </h3>
	                <p>
	                	 Next level brunch tofu vegan High Life, artisan Blue Bottle keytar meh cronut kale chips
	                </p>
	                <p>
	                    Synth twee Carles photo booth leggings chia. Shabby chic salvia narwhal Tumblr
	                </p>
	                <p>
	                    fixie kale chips. McSweeney's swag single-origin coffee Bushwick lomo.
	                </p>
	            </div>
	            <div class="col-md-4 avatar">
	                
	            </div>
	        </div>
	    </div>
	</div>

	<div id="content" class="container">
		<h2 class="title">Lorem Ipsum</h2> 
	    <p class="blog-btn">
	        <a class="btn btn-default" href="">View Ipsum</a>
	    </p>
	</div>

	<div id="about">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 description">
	                <h3>
	                	Lorem Ipsum
	                </h3>
	                <p>
	                	 Next level brunch tofu vegan High Life, artisan Blue Bottle keytar meh cronut kale chips
	                </p>
	                <p>
	                    Synth twee Carles photo booth leggings chia. Shabby chic salvia narwhal Tumblr
	                </p>
	                <p>
	                    fixie kale chips. McSweeney's swag single-origin coffee Bushwick lomo.
	                </p>
	            </div>
	            <div class="col-md-4 avatar">
	                
	            </div>
	        </div>
	    </div>
	</div>

	<div id="contact">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-4">
	                <a href="https://www.facebook.com/werehereus"><i class="fa fa-facebook"></i></a>
	            </div>
	            <div class="col-xs-4">
	                <a href="https://twitter.com/werehereus"><i class="fa fa-twitter"></i></a>
	            </div>
	            <div class="col-xs-4">
	                <i class="fa fa-envelope"></i>
	            </div>
	        </div>
	    </div>
	</div>
{% endblock %}

{% block javascripts %}
<script type="text/javascript">
	/**
	  * Smooth scroll to anchor.
	  *
	  * @Source: http://css-tricks.com/snippets/jquery/smooth-scrolling/
	  */

	$('a[href*=#]:not([href=#])').click(function() {
		console.log("here");
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      	var target = $(this.hash);
	      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      	if (target.length) {
	        	$('html,body').animate({
	          		scrollTop: target.offset().top
	        	}, 1000);
	        	return false;
	      	}
	    }
  	});
</script>
{% endblock %}