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
        <link rel="stylesheet" href="/application/library/css/font-awesome-4.2.0/css/font-awesome.css">
        <link rel="stylesheet" href="/application/library/css/bootstrap.css">
        <link rel="stylesheet" href="/application/library/css/global_styles.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
        {% block stylesheets %} {% endblock %}

    </head>
    <body class="{% block body_type %}{% endblock %}">
        {% block content %}{% endblock %}
        <div id="footer">
            
        </div>
        <!-- Scripts -->
        <script src="/application/library/js/jquery-2.1.1.js"></script>
        <script src="/application/library/js/modernizr.js"></script>
        <script src="/application/library/js/bootstrap.js"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>