// function informeProveedor(f) {

//     var provedor_id = f;

//     console.log(provedor_id);



// }

$(document).on("change", "#proveedor", function () {

    var datos = new FormData();

    datos.append("proveedor", this.value);

    $.ajax({
        url: "views/dist/ajax/informeProveedor.php",
        method: "POST",
        data: datos,
        caches: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (respuesta) {
            console.log(respuesta);

            informe = document.getElementById('informe');
            informe.style.display = 'block';
            document.getElementById('nombre').innerHTML = respuesta.nombre;
            document.getElementById('regSan').innerHTML = respuesta.regSan;
            document.getElementById('telefono').innerHTML = respuesta.tlf;
            document.getElementById('direccion').innerHTML = respuesta.direccion;

            $.ajax({
                url: "views/dist/ajax/productosProveedor.php",
                method: "POST",
                data: datos,
                caches: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (respuesta2) {
                    console.log(respuesta2);

                    informe = document.getElementById('listado');
                    informe.style.display = 'block';

                    tabla = "<tr><td>Producto</td><td>cantidad</td><td>Numero de lote</td><td>Fecha de compra</td><td>Fecha de caducidad</td></tr>"

                    for (const key in respuesta2) {
                        tabla = tabla + "<tr>";
                        datos2 = respuesta2[key];
                        tabla = tabla + "<td>" + respuesta2[key]['nombre'] + "</td>";
                        tabla = tabla + "<td>" + respuesta2[key]['cantidad'] + "</td>";
                        tabla = tabla + "<td>" + respuesta2[key]['numLote'] + "</td>";
                        tabla = tabla + "<td>" + respuesta2[key]['compra'] + "</td>";
                        tabla = tabla + "<td>" + respuesta2[key]['caducidad'] + "</td>";

                        tabla = tabla + "</tr>";
                    }

                    // console.log(tabla);

                    document.getElementById('lista').innerHTML = tabla;

                }
            });

        }
    });
});