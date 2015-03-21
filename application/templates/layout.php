<!DOCTYPE html>
<html>
    <head>
    	<!-- Meta Information -->
        <title>{% block page_title %} {% endblock %}</title>
        <meta charset=&quot;utf8&quot; />
        <meta name="description" content="">
        
        <!-- Favicon-->
        <link rel="icon" href="">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/library/css/font-awesome-4.2.0/css/font-awesome.css">
        <link rel="stylesheet" href="/library/css/bootstrap.css">

    	{% block stylesheets %} {% endblock %}

    </head>
    <body class="{% block body_type %}{% endblock %}">
        {% block content %}{% endblock %}
        <div id="footer">
            
        </div>
        <!-- Scripts -->
        <script src="/library/js/jquery-2.1.1.js"></script>
        <script src="/library/js/modernizr.js"></script>
        <script src="/library/js/bootstrap.js"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>