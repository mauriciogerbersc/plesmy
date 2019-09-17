<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="center">
        <a href='#' onClick="carregarPlesmy()"><i class="fas fa-sync-alt fa-2x"></i></a>
    </div>
    <div id="wrapper" class="wrapper wrap-layout">
       
        <div class="wrapper-content">
            <main class="wp-main wrap-layout">
                <div class="wp-section wrap-layout">
                    <div class="wrap-layout">
                        <div class="container">
                            <div class="row">

                                <div class="wp-two-column wrap-layout">

                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left ">
                                        <aside class="sidebar">
                                            <div class="widget">
                                                <div class="wg-title">
                                                    <h2><i class="fas fa-tasks"></i> Rotinas</h2>
                                                </div>
                                                <div class="wg-content">
                                                    <div class="wg-form">
                                                        <fieldset>
                                                           
                                                                <a href="#" data-filtro="rotina" data-tipo="cadastro"
                                                                    class="filtro list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-cadastro mr-1"></span>
                                                                    Cadastro
                                                                </a>
                                                                <a href="#" data-filtro="rotina" data-tipo="prefeituras"
                                                                    class="filtro list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-prefeituras mr-1"></span>
                                                                    Prefeituras
                                                                </a>
                                                                <a href="#" data-filtro="rotina" data-tipo="movimento"
                                                                    class="filtro list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-movimento mr-1"></span>
                                                                    Movimento
                                                                </a>
                                                                <a href="#" data-filtro="rotina"
                                                                    data-tipo="processo_eletronico"
                                                                    class="filtro list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span
                                                                        class="bullet bullet-processo-eletronico mr-1"></span>
                                                                    Processo Eletrônico
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-exportacao mr-1"></span>
                                                                    Exportação
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-faturas mr-1"></span>
                                                                    Faturas
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-distribuicao mr-1"></span>
                                                                    Distribuição
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-cliente mr-1"></span>
                                                                    Cliente
                                                                </a>
                                                           
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="divider" />
                                            <div class="widget ">
                                                <div class="wg-title">
                                                    <h2><i class="fas fa-bug"></i> Bugs</h2>
                                                </div>
                                                <div class="wg-content">
                                                    <div class="wg-form">
                                                        <fieldset>
                                                         
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-distribuicao mr-1"></span>
                                                                    Alerta
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-distribuicao mr-1"></span>
                                                                    Contrato
                                                                </a>

                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-distribuicao mr-1"></span>
                                                                    Faturas</a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-distribuicao mr-1"></span>
                                                                    Movimento</a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span
                                                                        class="bullet bullet-primary mr-1"></span>Exportação
                                                                    Bradesco</a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span class="bullet bullet-primary mr-1"></span>
                                                                    Exportação</a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span
                                                                        class="bullet bullet-primary mr-1"></span>Atitude
                                                                    Jur</a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center">
                                                                    <span
                                                                        class="bullet bullet-primary mr-1"></span>Cadastro</a>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left body-content">

                                        <!--<div class="wp-filterholder">
                                            <ul class="wp-filtertag">

                                                <li class="alert alert-dismissable">
                                                    <a href="javascrip:void(0)" class="bullet-cadastro"><i
                                                            class="fa fa-times close" data-dismiss="alert"
                                                            aria-label="close"></i> <span>Sem estados</span></a>
                                                </li>
                                                <li class="alert alert-dismissable ">
                                                    <a href="javascrip:void(0)" class="bullet-cliente"><i
                                                            class="fa fa-times close" data-dismiss="alert"
                                                            aria-label="close"></i> <span>Sem Contrato</span></a>
                                                </li>

                                            </ul>
                                        </div>-->

                                        <div class="wrap-layout tasks">

                                            <ul id="todo">
                                            </ul>
    
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>


<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery-library.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://kit.fontawesome.com/56423d438a.js"></script>


<script>


    var data = [
        {
            "id": 1,
            "classe": "bullet-cadastro",
            "icon": "Logos-System-Task-icon.png",
            "title": "Sem estados",
            "tipo": "rotina",
            "label": "Cadastro",
            "oab": "-999 SC",
            "advogado": "Ricardo Barbi dos Santos",
            "last_update": "wanessac (2019-05-16 15:09:06) => Em: contrato cobranca"
        },
        {
            "id": 2,
            "classe": "bullet-prefeituras",
            "icon": "Logos-System-Task-icon.png",
            "title": "Sem Contrato",
            "tipo": "bug",
            "label": "Prefeitura",
            "oab": "-1234 SC",
            "advogado": "Mauricio Gerber",
            "last_update": "wanessac (2019-05-16 15:09:06) => Em: contrato cobranca"
        },
        {
            "id": 3,
            "classe": "bullet-prefeituras",
            "icon": "Logos-System-Task-icon.png",
            "title": "Sem Contrato",
            "tipo": "bug",
            "label": "Prefeituras",
            "oab": "-1234 SC",
            "advogado": "Mauricio Gerber",
            "last_update": "wanessac (2019-05-16 15:09:06) => Em: contrato cobranca"
        },
        {
            "id": 4,
            "classe": "bullet-movimento",
            "icon": "Logos-System-Task-icon.png",
            "title": "Movimentação",
            "tipo": "bug",
            "label": "Movimentação",
            "oab": "-1234 SC",
            "advogado": "Mauricio Gerber",
            "last_update": "wanessac (2019-05-16 15:09:06) => Em: contrato cobranca"
        }

    ];

    carregarPlesmy();


    function carregarPlesmy() {

        var output = '';

        $.each(data, function (key, val) {
            output += '<li>';
            output += '<div class="list-item py-4">';
            output += '    <div class="vx-row">';
            output += '       <h6 class="todo-title">' + val.title + '</h6>';
            output += '       <div class="tag">';
            output += '            <div class="h-2 w-2 rounded-full mr-1 ' + val.classe + '"></div>';
            output += val.label;
            output += '        </div>';
            output += '    </div>';
            output += '    <div class="vx-row">';
            output += '        <p>';
            output += '            <ul class="wp-userlisting-breadcrumb">';
            output += '                <li><span><i class="fa fa-bank"></i> ' + val.oab + '</span></li>';
            output += '                <li><span><i class="fa fa-user"></i>  ' + val.advogado + '</li>';
            output += '            </ul>';
            output += '         </p>';
            output += '    </div>';
            output += '</div>';
            output += '<div class="footer">';
            output += '   <span><strong>Última atualização:</strong> ' + val.last_update + '</span>';
            output += '</div>';    
            output += '</li>';
        });

        console.log(output);
        $("#todo").html(output);

    }

    $(document).ready(function () {
        $('.filtro').click(function () {

            $("#tasks").html();

            var obj = $(this).attr("data-tipo");
            var regex = new RegExp(obj, "i");
            var output = "";
            var count = 0;

            $.each(data, function (key, val) {
                if (val.classe.search(regex) != -1) {
                    output += '<li>';
                    output += '<div class="list-item py-4">';
                    output += '    <div class="vx-row">';
                    output += '        <h6 class="todo-title">' + val.title + '</h6>';
                    output += '       <div class="tag">';
                    output += '            <div class="h-2 w-2 rounded-full mr-1 ' + val.classe + '"></div>';
                    output += val.label;
                    output += '        </div>';
                    output += '    </div>';
                    output += '    <div class="vx-row">';
                    output += '        <p>';
                    output += '            <ul class="wp-userlisting-breadcrumb">';
                    output += '                <li><span><i class="fa fa-bank"></i> ' + val.oab + '</span></li>';
                    output += '                <li><span><i class="fa fa-user"></i>  ' + val.advogado + '</li>';
                    output += '            </ul>';
                    output += '         </p>';
                    output += '    </div>';
                    output += '</div>';
                    output += '<div class="footer">';
                    output += '        <span>' + val.last_update + '</span>';
                    output += '    </div>';
                    output += '</li>';
                    count++;
                }
            });

            console.log(count);

            if (count == 0) {
                output += '<div class="wp-list task-list"><div class="wp-contenthead"><div class="wp-title"><h2>Nenhum resultado encontrado</h2></div></div></div>';
            }

            $("#todo").html(output);

        });
    });
</script>

</html>