<?php

/**
 * Template Name: ordini-mercatino
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
get_header(); 
 ?>


<?php
session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if (isset($_POST["sub"])) {
    $validUser = $_POST["username"] == "francescoilgrande" && $_POST["password"] == "caccadimaya";
    if (!$validUser) $errorMsg = "Nome utente o password non validi";
    else $_SESSION["login"] = true;
}
if ($validUser) { ?>



<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .hover:hover {
                cursor: pointer;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://www.agriturismoterraecielo.it/load/ordinimercatino/node_modules/moment/moment.js"></script>
        <script src="https://www.agriturismoterraecielo.it/load/ordinimercatino/node_modules/moment/locale/it.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <script src="https://www.agriturismoterraecielo.it/load/ordinimercatino/node_modules/fullcalendar/main.js"></script>
        <link rel="stylesheet" href="https://www.agriturismoterraecielo.it/load/ordinimercatino/node_modules/fullcalendar/main.css">
        <link rel="stylesheet" href="https://www.agriturismoterraecielo.it/load/ordinimercatino/node_modules/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <div class="modal fade" id="editModal" data-backdrop="static" aria-labelledby="editModalTitle" aria-hidden="true">

            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalTitle">INFORMAZIONI</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>



                    <div class="modal-body">
                        <div class="col">
                            <label class="form-label">Nome</label>
                            <p class="form-control">Stefano Pruzzo</p>
                            <label class="form-label">Mail</label>
                            <p class="form-control">stefano.pruzzo@gmail.com</p>
                            <label class="form-label">Telefono</label>
                            <p class="form-control">3475447655</p>
                            <label class="form-label"> </label>
                            <p class="form-control ">Ritiro il bla cla bla </p>
                            <div class="card col">
                                <h6 class="mt-2">PRODOTTI</h6>
                                <label class="form-label"> </label>
                                <p class="form-control ">Ritiro il bla cla bla </p>

                            </div>
                            <textarea readonly class="form-control mt-2">note aggiuntive</textarea>
                            <div class="row mt-2">

                                <div class="col-6">
                                    Pagato
                                </div>
                                <div class="col-6 text-right">
                                    <h5>30euro</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                        </button>
                </div>
            </div>
        </div>

        </div>

    <div class="col">

        <div class="card mt-1">


            <div class="text-center">
                <h6>LEGENDA</h6>
            </div>

            <div class="row ml-2 mt-2">
                <div class="col-4 col-sm-1">
                    <div class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-start fc-event-end fc-event-future"
                         style="border-color: #007bff; background-color:#007bff">
                        <div class="fc-event-main" style="color: white;">
                            <div class="fc-event-main-frame">
                                <div class="fc-event-time"></div>
                                <div class="fc-event-title-container">
                                    <div class="fc-event-title fc-sticky">Ordine</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    Ritiro in Agriturismo
                </div>
            </div>



            <div class="row ml-2 mt-2 mb-2">
                <div class="col-4 col-sm-1">
                    <div class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-start fc-event-end fc-event-future"
                         style="border-color: #f0a400; background-color: #f0a400">
                        <div class="fc-event-main" style="color: white;">
                            <div class="fc-event-main-frame">
                                <div class="fc-event-time"></div>
                                <div class="fc-event-title-container">
                                    <div class="fc-event-title fc-sticky">Ordine</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    Consegna a Domicilio
                </div>
            </div>





        </div>
        <div id='calendar' class="mt-2"></div>
    </div>

    </body>

</html>

<script type="text/javascript">
    var orders;
    $(document).ready(function () {
        $.get('https://www.agriturismoterraecielo.it/shop-orders/get_orders.php').done(function(data){
            orders = data; 
            moment.locale('it');
            initCalendar();
        });

    });


    function initCalendar() {
        var initialView = 'dayGridMonth';
        if ($(window).width() < 720) {
            initialView = 'dayGridWeek';
        }
        var timeFormat = {
            hour: '2-digit',
            minute: '2-digit'
        }
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialDate: getInitialDate(),
            themeSystem: 'bootstrap',
            initialView: initialView,
            firstDay: 1,
            buttonText: {
                month: 'mese',
                week: 'settimana',
                day: 'giorno'
            },
            events: getEvents(),
            eventTimeFormat: timeFormat,
            eventClick: eventClick,
            headerToolbar: {
                end: 'dayGridMonth dayGridWeek timeGridDay prev,next'
            }
        });
        calendar.setOption('locale', 'it');
        calendar.render();
    }

    function getEvents() {
        var events = [];
        orders.forEach(function (order) {
            var event = {
                id: orders.indexOf(order),
                title: order.nome + " " + order.cognome,
                start: getDate(order.orario),
                display: "block",
                color: order.come == "ritiro" ? "#007bff" : "#f0a400",
                className: "hover"
            };
            events.push(event);
        });
        return events;
    }

    function getDate(date) {
        // moment.lang('it');
        var array = date.split(" ");


        // moment("17 ottobre 2021 13:00", "DD MMMM YYYY hh:mm").format()
        var m = moment(date, "DD MMMM YYYY hh:mm").format()
        return m;
    }
    function eventClick(info) {
        console.log(info);
        var order = orders[info.event._def.publicId];
        var body = '<div class="col"><label class="form-label">Nome</label><p class="form-control">' + order.nome + ' ' + order.cognome + '</p>' +
            '<label class="form-label" > Mail</label>' +
            '<p class="form-control">' + order.email + '</p>' +
            '<label class="form-label">Telefono</label>' +
            '<p class="form-control">' + order.telefono + '</p>' +
            '<label class="form-label"> </label>' +
            '<p class="form-control ">' + (order.come == "ritiro" ? ('Ritiro il ') : ('Consegna il ')) + order.orario + '</p>' +
            '<div class="card col">' +
            '<h6 class="mt-2">PRODOTTI</h6>' +
            '<label class="form-label"> </label>';
        order.contenitori.forEach(function (item) {
            if (!!item.contenitore)
                body = body + '<label class="form-label">' + item.contenitore.name + " " + item.contenitore.capacity + " pezzi</label>";

            item.prodotti.forEach(function (prodotto) {
                body = body + '<p class="form-control ">' + prodotto.quantity + 'x ' + prodotto.prodotto + '</p>';
            });
        });
        var pagato = order.pagato == 'pagato' ? true : false;
        body = body + '</div>' +
            '<textarea readonly class="form-control mt-2">' + order.altro + '</textarea>' +
            '<div class="row mt-2 alert alert-' + (pagato ? "primary" : "danger") + '">' +
            '<div class="col-6">' + (order.pagato == "pagato" ? "Ordine Pagato" : "Ordine da pagare") +
            '</div>' +
            '<div class="col-6 text-right">' +
            '<h5>' + 'Totale: ' + order.totale + ' €' + '</h5>' +
            '</div>' +
            '</div>' +
            '</div>';


        $('#editModal .modal-body').html(body);
        $('#editModal').modal('show');
    }

    function getInitialDate() {
        var futureorders = orders.map(function (o) {
            if (moment(o.orario, "DD MMMM YYYY hh:mm") > moment())
                return o;
        });
        var smaller;
        if (!!futureorders) {
            smaller = moment(futureorders[0].orario, "DD MMMM YYYY hh:mm");
            futureorders.forEach(function (item) {
                var element = moment(item.orario, "DD MMMM YYYY hh:mm");
                if (element < smaller)
                    smaller = element;
            });
            return smaller.format();
        }
        else
            return moment().format();
    }
</script>



<?php
} else
{
    get_header();
    echo '<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Login</title>
</head>
<body>
<h4 style="margin-top:2vh; margin-bottom: 4vh; color: blue; text-align:center">Agri Summer Festival Login</h4>
  <form style="margin-left: 2vw;margin-right: 2vw;" name="input" action="" method="post">
    <label for="username">Username:</label><input type="text" value="'.$_POST["username"].'" id="username" name="username" />
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
    <div class="error">'.$errorMsg.'</div>
    <input type="submit" value="Invia" name="sub" />
  </form>
</body>
</html>';
}

do_action('himalayas_after_body_content'); 
get_footer();

?>
