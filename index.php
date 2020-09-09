<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>QR Code</title>
</head>

<body>

    <div class='container'>
        <h1>Guardar contácto en formato VCARD en código QR </h1>
        <form method='post' id="generador">
            <div class='row'>
                <div class='col-md-6'>
                    <div class="form-group">
                        <input type="text" class="form-control m-2" id="names" placeholder="Nombre">
                        <input type="text" class="form-control m-2" id="lastnames" placeholder="Apellido">
                        <input type="text" class="form-control m-2" id="celular" placeholder="celular">
                        <input type="text" class="form-control m-2" id="telefono" placeholder="Teléfono">
                        <input type="text" class="form-control m-2" id="correo" placeholder="Correo">
                        <input type="text" class="form-control m-2" id="organizacion" placeholder="Organización">
                        <input type="text" class="form-control m-2" id="direccion" placeholder="Dirección">
                        <input type="text" class="form-control m-2" id="url" placeholder="Url">
                        <label for="textqr" class="m-2">Tamaño</label>
                        

                        <button type="submit" class="m-2 btn btn-primary">Generar</button>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='result'>

                    </div>
                </div>
            </div>

    </div>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $("#generador").submit(function(event) {
            var names = $("#names").val();
            var lastnames = $("#lastnames").val();
            var celular = $("#celular").val();
            var telefono = $("#telefono").val();
            var correo = $("#correo").val();
            var organizacion = $("#organizacion").val();
            var direccion = $("#direccion").val();
            var url =$("#url").val();

            parametros = {
                "name": names,
                "lastname": lastnames,
                "celular": celular,
                "telefono": telefono,
                "correo": correo,
                "organizacion": organizacion,
                "url": url,
                "direccion":direccion
            };
            $.ajax({
                type: "POST",
                url: "generar.php",
                data: parametros,
                success: function(datos) {
                    $(".result").html(datos);
                }

            })

            event.preventDefault();
        });
    </script>
</body>

</html>