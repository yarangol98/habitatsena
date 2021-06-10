{% load static %}
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H&B</title>
    <link rel="stylesheet" href="{% static 'bootstrap/darkly/bootstrap.min.css' %}">
    <link rel="stylesheet" href="{% static 'scripts/notifications/notifications.css' %}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="{% static 'scripts/notifications/notifications.js' %}"></script>
</head>
<body>
{% include 'navbar/navbar.html' %}

<div class="d-flex justify-content-center mt-3 pa-5 ">
    <div class="card text-white bg-secondary mb-3 w-50" style="max-width: 60rem;">
        <div class="card-header">
            <h3>
                Resultados
            </h3>
        </div>
        <div class="card-body">
            <table class="table" id="table_id">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre Campaña</th>
                    <th scope="col">Resultados</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <!--Registros de la tabla-->
                <tbody id="results">
                {% if formularios_list %}
                    {% for formularios in formularios_list %}
                        <tr>
                            <td>
                                <strong>{{ formularios.nombreFormulario }}</strong>
                            </td>

                            <td>
                                <a href="{{ formularios.urlRespuestas }}" class="btn btn-success btn-lg active"
                                   role="button"
                                   aria-pressed="true" data-toggle="tooltip" data-placement="right"
                                   title="Ver Resultados"><i class="fa fa-table"></i>
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-info btn-lg" id="SaveButton"
                                        onclick="guardar('{{ formularios.pk }}')"
                                        data-toggle="tooltip" data-placement="right"
                                        title="Guardar resultados">
                                    <i class="fa fa-save"></i>
                                </button>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <div class="alert alert-dismissible alert-primary">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Atención!</strong> Lista Vacia
                    </div>
                {% endif %}
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

<script src="{% static 'scripts/jquery/jquery.min.js' %}"></script>
<script src="{% static 'bootstrap/js/popper.min.js' %}"></script>
<script src="{% static 'bootstrap/js/bootstrap.min.js' %}"></script>
<script>


    const SuccessNotification = window.createNotification({
        theme: 'success',
        showDuration: 5000
    });
    let btn = document.getElementById('SaveButton');


    const guardar = (id) => {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "{% url 'api:getForms' %}",
            data: {
                FormID: id,
                dataType: "json",
                csrfmiddlewaretoken: '{{csrf_token}}'
            },

            success: function (data) {
                SuccessNotification({message: data['message']})
            },
        });
    }
</script>
</html>
