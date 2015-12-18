<!DOCTYPE html>

<html lang="fr">

<head>
	{% load staticfiles %}
  <link rel="stylesheet" type="text/css" href="{% static 'concours/style.css' %}" >
  <script type="text/javascript" src="{% static 'concours/jquery-1.11.3.min.js' %}"></script>
  <script type="text/javascript" src="{% static 'concours/perso.js' %}" ></script>
	<title>{% block title %}X-WineContest{% endblock %}</title>
</head>



<body>

  <div class='all'>
    <div class='all-container'>
      <header>
          <img alt="bandeau" title="bandeau" src="{% static 'concours/img/bandeauXBis.png' %} " class='bandeauImage'/>
          <nav id='navigation'>
             {% block nav %}
             <div>
                  <a class='nav-link' id='nav-link1' href="/concours">Accueil</a>
                  <a class='nav-link' id='nav-link2' href="/concours/actualites">Actualités</a>
                  <a class='nav-link' id='nav-link3' href="/concours/partenaires">Nos partenaires</a>
                  <a class='nav-link' id='nav-link4' href="/concours/equipe">L'équipe</a>                  
                  <a class='nav-link' id='nav-link5' href="/concours/contact">Contact</a>                  
             </div>
             {% endblock %}
         </nav>
<!--          <div class='titre'>
           <h1>X-WineContest</h1>
         </div> -->
      </header>


    	<section id='content'>
    		<div class='background'>
        {% block image %}
        <img alt="grappe" title="grappe" src="{% static 'concours/img/grappe.bmp' %} " class='backgroundImage' id='backgroundImage'/>
        {% endblock %}
    			<div class= {% block genre %}'text'{% endblock %}>
    				{% block content %}{% endblock %}
    			</div>
    		</div>
    	</section>



      <footer style='color:white; font-size:12px'>&copy; BinetŒno 2013</footer>

    </div>
  </div>
</body>

</html>