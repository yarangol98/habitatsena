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
    <div id="overflow_table">
        <div class="card card-lg text-white bg-secondary mb-3 w-80" style="max-width: 80rem;">
            <div class="card-header">
                <h3>
                    Usuarios de Facebook
                </h3>
            </div>

            <div class="card-body">

                <table class="table table-responsive-lg" id="table_id">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Foto Perfil</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nombre Usuario</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Rango de Edad</th>
                        <th scope="col">Tipo de Baldosa</th>
                        <th scope="col">Tipo Salpicadero</th>
                        <th scope="col">Tipo de Baño</th>
                        <th scope="col">Tipo de Sala</th>
                    </tr>
                    </thead>
                    <!--Registros de la tabla-->

                    <tbody id="results">

                    {% if object_list %}
                        {% for fb in object_list %}

                            <tr>
                                <td>
                                    <img src="{{ fb.Usuario.picture }}" alt="">
                                </td>
                                <td>
                                    {{ fb.Usuario.email }}
                                </td>
                                <td>
                                    {{ fb.Usuario.name }}
                                </td>
                                <td>
                                    {{ fb.genero }}
                                </td>
                                <td>
                                    {{ fb.edad }}
                                </td>
                                <td>
                                    {{ fb.Tipo_baldosa }}
                                </td>
                                <td>
                                    {{ fb.Tipo_Salpicadero }}
                                </td>
                                <td>
                                    {{ fb.Tipo_Baño }}
                                </td>
                                <td>
                                    {{ fb.Tipo_Sala }}
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
</div>
</body>

<script src="{% static 'scripts/jquery/jquery.min.js' %}"></script>
<script src="{% static 'bootstrap/js/popper.min.js' %}"></script>
<script src="{% static 'bootstrap/js/bootstrap.min.js' %}"></script>

</html>
