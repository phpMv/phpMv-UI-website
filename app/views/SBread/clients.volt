<table class='ui single line striped table'>
	<thead><tr><th colspan='2'>{{model}}</th></tr></thead>
		<tbody>
		{% for object in objects %}
			<tr>
			<td>{{object.toString()}}</td>
			<td class='td-center'><a class='ui icon button edit' href='{{"/frm/"~object.getId()}}' id='{{ object.getId() }}'><i class='icon unhide'></i></a></td>
			</tr>
		{% endfor %}
		</tbody>
</table>
{% if script_foot is defined %}
    {{ script_foot }}
{% endif %}
