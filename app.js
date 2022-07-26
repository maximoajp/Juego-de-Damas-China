// JavaScript Document
$(document).ready(function () {

    var player = $('#u_player').val();
    if (player == "rojo") {
        $('#in_player_i').val("azul");
        $('#u_turno').html("<strong>Turno de Player: AZUL </strong>");
    } else {
        $('#in_player_i').val("rojo");
        $('#u_turno').html("<strong>Turno de Player: ROJO </strong>");
    }
    /*--------------------------*/
    $('.ficha-r').click(function () {
        if ($('#in_player_i').val() == "rojo") {

            //se activa la ficha inicial
            $('.ficha-r').removeClass('ficha-activa');
            $('.ficha-a').removeClass('ficha-activa');
            $(this).addClass('ficha-activa');

            //se capturan los valores de la ficha
            var area = $(this).attr('id');
            $('#in_mov_i').val(area);
            $('#i_mov_i').val(area);

            var color = $(this).attr('data-id');
            $('#in_color_i').val(color);
            $('#in_player_f').val("rojo");

            //verificamos nuevo movimientos
            var posicion = $(this).text();

            var mov_a = parseFloat(posicion) - parseFloat(10) + 1;
            var mov_b = parseFloat(posicion) - parseFloat(10) - 1;

            var mov_nombre_a = "v" + (mov_a)
            var mov_nombre_b = "v" + (mov_b)

            $("#" + mov_nombre_a).addClass('mov_dis');
            $("#" + mov_nombre_b).addClass('mov_dis');

            $('#m_mov_a').val(mov_nombre_a);
            $('#m_mov_b').val(mov_nombre_b);


        } else {
            alert('solo puedes mover las fichas Azules');
        }
    });
    /*--------------------------*/
    $('.ficha-a').click(function () {
        if ($('#in_player_i').val() == "azul") {

            //se activa la ficha inicial
            $('.ficha-r').removeClass('ficha-activa');
            $('.ficha-a').removeClass('ficha-activa');
            $(this).addClass('ficha-activa');

            //se capturan los valores de la ficha
            var area = $(this).attr('id');
            $('#in_mov_i').val(area);
            $('#i_mov_i').val(area);

            var color = $(this).attr('data-id');
            $('#in_color_i').val(color);
            $('#in_player_f').val("azul");

            //verificamos nuevo movimientos
            var posicion = $(this).text();

            var mov_a = parseFloat(posicion) + parseFloat(10) + 1;
            var mov_b = parseFloat(posicion) + parseFloat(10) - 1;

            var mov_nombre_a = "v" + (mov_a)
            var mov_nombre_b = "v" + (mov_b)

            $("#" + mov_nombre_a).addClass('mov_dis');
            $("#" + mov_nombre_b).addClass('mov_dis');

        } else {
            alert('solo puedes mover las fichas Rojas');
        }
    });
    /*--------------------------*/
    $('.ficha-v').click(function (e) {
        e.preventDefault();

        if ($('#in_mov_i').val() == "") {

            alert('seleccione una ficha Jugador');


        } else {

            if ($('#in_player_f').val() == "azul") {

                //ponemos ficha nueva
                $(this).removeClass('ficha-v');
                $(this).addClass('ficha-a');

                //caturamos el nuevo valor
                var area_f = $(this).attr('id');
                $('#in_mov_f').val(area_f);
                $('#i_mov_f').val(area_f);
                $('#i_player_f').val("azul");

                var color = $(this).attr('data-id');
                $('#in_color_f').val(color);


                //quitamos ficha
                $('.ficha-activa').addClass('ficha-v');
                $('.ficha-activa').removeClass('ficha-activa ficha-a');


                //enviamos datos
                $.ajax({
                    type: "POST",
                    url: "consultas.php",
                    data: $("#actualizar_i").serialize(),
                    success: function (data) {
                        $("#in_mov_i").val("");
                        $("#in_mov_f").val("");
                        $("#in_color_i").val("");
                        $("#in_color_f").val("");
                        $('#in_player_f').val("");
                        $('#in_player_i').val("rojo");
                        console.log('envio exitoso');
                    },
                    error: function () {
                        alert('error');
                    }
                });

                //enviamos 2er dato
                $.ajax({
                    type: "POST",
                    url: "consultas.php",
                    data: $("#actualizar_f").serialize(),
                    success: function (data) {
                        $("#in_mov_i").val("");
                        $("#in_mov_f").val("");
                        $("#in_color_i").val("");
                        $("#in_color_f").val("");
                        $('#in_player_f').val("");
                        $('#in_player_i').val("rojo");
                        console.log('envio exitoso');
                        $('#insertar').submit();
                    },
                    error: function () {
                        alert('error');
                    }
                });
            }


            if ($('#in_player_f').val() == "rojo") {

                //ponemos ficha nueva
                $(this).removeClass('ficha-v');
                $(this).addClass('ficha-r');

                //capturamos el nuevo valor
                var area_f = $(this).attr('id');
                $('#in_mov_f').val(area_f);
                $('#i_mov_f').val(area_f);
                $('#i_player_f').val("rojo");

                var color = $(this).attr('data-id');
                $('#in_color_f').val(color);

                //quitamos ficha
                $('.ficha-activa').addClass('ficha-v');
                $('.ficha-activa').removeClass('ficha-activa ficha-r');


                //enviamos datos
                $.ajax({
                    type: "POST",
                    url: "consultas.php",
                    data: $("#actualizar_i").serialize(),
                    success: function (data) {
                        $("#in_mov_i").val("");
                        $("#in_mov_f").val("");
                        $("#in_color_i").val("");
                        $("#in_color_f").val("");
                        $('#in_player_f').val("");
                        $('#in_player_i').val("azul");
                        console.log('envio exitoso');
                    },
                    error: function () {
                        alert('error');
                    }
                });

                //enviamos 2er dato
                $.ajax({
                    type: "POST",
                    url: "consultas.php",
                    data: $("#actualizar_f").serialize(),
                    success: function (data) {
                        $("#in_mov_i").val("");
                        $("#in_mov_f").val("");
                        $("#in_color_i").val("");
                        $("#in_color_f").val("");
                        $('#in_player_f').val("");
                        $('#in_player_i').val("azul");
                        console.log('envio exitoso');
                        $('#insertar').submit();
                    },
                    error: function () {
                        alert('error');
                    }
                });

            }
        }

    });


});