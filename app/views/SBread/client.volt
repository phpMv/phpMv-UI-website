<img class="ui middle aligned tiny image" src="{{ client.getImage() }}">
<span>{{ client.toString() }}</span>
{% if script_foot is defined %}
    {{ script_foot }}
{% endif %}