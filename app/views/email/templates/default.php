{% if auth %}
	<p> Hello {{ auth.getFullNameorUsername() }},</p>
{% else %}
	<p>Hello there,</p>
{% endif %}

{% block content %}
{% endblock %}