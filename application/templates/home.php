{% extends 'layout.php' %}

{% block page_title %}Home{% endblock %}

{% block stylesheets %}
	<style type="text/css">
		#left {
			background-color: black;
		}

		#right {
			background-color: white;
		}
	</style>
{% endblock %}

{% block content %}
	<div id="content" class="container-fluid">
		<div class="row">
			<div id="left" class="col-md-6">
			</div>
			<div id="right" class="col-md-6">
			</div>
		</div>
	</div>
{% endblock %}

{% block javascripts %}

{% endblock %}