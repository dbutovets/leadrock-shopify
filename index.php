<?php
$api = [
    'key' => '7669',
    'secret' => 'b3a56e69c5d63947c0cf7b322f13b7a5',
    'flow_url' => 'https://leadrock.com/URL-2CBBB-C03B7'
];

function send_the_order($post, $api)
{
    $params = [
        'flow_url' => $api['flow_url'],
        'user_phone' => $post['phone'],
        'user_name' => $post['name'],
        'other' => $post['other'],
        'ip' => $_SERVER['REMOTE_ADDR'],
        'ua' => $_SERVER['HTTP_USER_AGENT'],
        'api_key' => $api['key'],
        'sub1' => $post['sub1'],
        'sub2' => $post['sub2'],
        'sub3' => $post['sub3'],
        'sub4' => $post['sub4'],
        'sub5' => $post['sub5'],
        'ajax' => 1,
    ];
    $url = 'https://leadrock.com/api/v2/lead/save';

    $trackUrl = $params['flow_url'] . (strpos($params['flow_url'], '?') === false ? '?' : '&') . http_build_query($params);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $trackUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $params['track_id'] = curl_exec($ch);

    $params['sign'] = sha1(http_build_query($params) . $api['secret']);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_exec($ch);
    curl_close($ch);

// <!--Add-->
    $url = 'http://185.179.188.108/1667048/postback?status=lead&payout=9&currency=usd&from=leadrock.com&subid=' . urlencode($_POST['sub1']);
    file_get_contents($url);

    if (!empty($post['success_page'])) {
        $page = $post['success_page'];
    } else {
        if (!empty($post['fbpixel'])) {
            $page = 'confirm.php?fbpixel=' . $post['fbpixel'];
        } else {
            $page = 'confirm.php';
        }
    }

    header('Location: ' . $page);
// <!--/Add-->
}

if (!empty($_POST['phone'])) {
    send_the_order($_REQUEST, $api);
}

if (!empty($_GET)) {
?>
    <script type="text/javascript">
        window.onload = function() {
            let forms = document.getElementsByTagName("form");
            for(let i=0; i<forms.length; i++) {
                let form = forms[i];
                form.setAttribute('action', form.getAttribute('action') + "?<?php echo http_build_query($_GET)?>");
                form.setAttribute('method', 'post');
            }
        };
    </script>
<?php
}

?>
<html><head>
    <script src="https://minfobiz.online/js/Denis/417PE00v2.js"></script>
    <title>ManUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <meta name="description" content="pastillas ???1 para alargar el pene">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/new.css">
</head>

<body>
    <div class="main_wrapper">
        <section class="b1">
            <div class="back">
                <div class="title">
                    <h1> Las pastillas <orange> ???1</orange> para alargar el pene</h1>
                </div>
                <div class="name">
                    <h3> ManUp</h3>
                </div>
                <img class="spray" src="png/product.png" alt>
                <div class="discount">
                    <img src="png/sale.png" alt>
                </div>
                <div class="price flex">
                    <div class="old">
                        <h6> Precio anterior</h6>
                        <h4>280 Sol</h4>
                    </div>
                    <span class="divider"></span>
                    <div class="new">
                        <h6> Precio actual</h6>
                        <h3>140 Sol</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="b2">
            <div class="flex">
                <div class="left">
                    <center><img src="png/icon1.png" alt></center>
                    <h3> Sensaciones agudas</h3>
                    <p> La sensibilidad aumenta 3 veces</p>
                </div>
                <div class="right">
                    <center><img src="png/icon2.png" alt></center>
                    <h3> tama??o gigante</h3>
                    <p> +5 cm de longitud y +3 cm de grosor</p>
                </div>
            </div>
            <div class="flex">
                <div class="left">
                    <center><img src="png/icon3.png" alt></center>
                    <h3> Sexo por m??s tiempo</h3>
                    <p> Alarga el acto sexual hasta 3,5 horas</p>
                </div>
                <div class="right">
                    <center><img src="png/icon4.png" alt></center>
                    <h3> Disponibilidad permanente</h3>
                    <p> Mejora la erecci??n y aumenta el libido</p>
                </div>
            </div>
            <center> <a href="#order"><button> ordenar con descuento</button></a></center>
        </section>
        <section class="b3">
            <h2> ??Tan solo 5 semanas</h2>
            <h3> y las mujeres no podr??n resistirse ante ti!</h3>
            <div class="dild">
                <div class="size1">
                    <h4> 1 semana</h4>
                    <p> 12 CM</p>
                </div>
                <div class="size2">
                    <h4> 2 semana</h4>
                    <p> 15 CM</p>
                </div>
                <div class="size3">
                    <h4> 3 semana</h4>
                    <p> 17 ????</p>
                </div>
            </div>
            <div class="how">
                <h3> Gran tama??o</h3>
                <h4> m??s largo y grueso</h4>
                <center><img src="png/background3.png" alt></center>
                <h5> Ingrediente secreto</h5>
                <p> La f??rmula de las pastillas est?? enriquecida con<bold> Huanarpo macho</bold>. Activa la formaci??n de nuevos tejidos y aumenta el tono musuclar, lo que contribuye a un aumento natural del pene. </p>
            </div>
        </section>
        <section class="b32">
            <div class="flex">
                <div class="left">
                    <center><img src="png/photo2.png" alt></center>
                </div>
                <div class="right">
                    <p> Circunferencia del pene</p>
                    <h4> Antes</h4>
                </div>
            </div>
            <div class="flex">
                <div class="left">
                    <center><img src="png/photo1.png" alt></center>
                </div>
                <div class="right">
                    <p> Circunferencia del pene</p>
                    <h4> Despu??s</h4>
                </div>
            </div>
            <div class="new1">
                <img src="png/new_1.jpg" alt>
                <h3> Ahora t?? puedes <span> hacer con ella </span> todo lo que</h3>
                <center> <a href="#order"><button> quieras</button></a></center>
            </div>
            <section class="b6">
                <h2> ??Por qu?? ManUp<br>
                    <orange> es tan efectivo?</orange>
                </h2>
                <img src="png/new_2.jpg" alt>
                <p> <bold>Maca Negra gelatinizada, Huanarpo macho, Polen</bold> son poderosos ingredientes naturales que mejoran la potencia masculina y aumentan el tama??o del pene. Estas plantas s??lo se encuentran en las tierras altas de Am??rica Latina. La recopilaci??n est?? hecha de una manera especial, por lo que los medicamentos de estos componentes en el mercado son extremadamente raros.</p>
                <center>
                    <img src="png/new_3.jpg" alt>
                    <h3> Aumenta la potencia</h3>
                    <p> Las aminas de ??cidos grasos contenidas en la maca son <bold> un estimulante de gran potencia </bold>
                    </p>
                    <img src="png/new_4.jpg" alt>
                    <h3> Aumento del tama??o del pene</h3>
                    <p> Los l??pidos promueven el crecimiento y la regeneraci??n del tejido cavernoso<bold> conducen al aumento del tama??o del pene</bold>
                    </p>
                    <img src="png/new_5.jpg" alt>
                    <h3> Mejora la cirulaci??n sangu??nea</h3>
                    <p> Los ingredientes activos contribuyen al flujo sangu??neo hacia el pene<bold> el coito se vuelve m??s largo y el orgasmo incre??ble.</bold>
                    </p>
                    <p></p>
                </center>
                <p></p>
            </section>
            <div class="b321">
                <div class="first">
                    <h3> ManUp</h3>
                    <h5> acelera el crecimiento de los tejidos</h5>
                    <h2>1</h2>
                </div>
                <div class="second">
                    <h3> ManUp</h3>
                    <h5> Mejora la cirulaci??n sangu??nea</h5>
                    <h2>2</h2>
                </div>
                <center> <a href="#order"><button> Probar</button></a></center>
            </div>
        </section>
        <section class="b5">
            <h2> Las mujeres no te rechazar??n</h2>
            <h5> Absolutamente demostrado</h5>
            <p> El tama??o si importa para las mujeres. Entre m??s grande sea el pene mayor ser?? la satisfacci??n.<bold> ManUp</bold> har?? que las mujeres sean tuyas y entonces</p>
            <div class="img-warp">
                <center><img src="png/1%208.png" alt></center>
                <h3 class="left">
                    <orange> t?? mismo</orange> pondr??s las reglas </h3>
            </div>
            <div class="img-warp">
                <center><img src="png/2%208.png" alt></center>
                <h3 class="right"> obtendr??s<orange> muchos </orange> orgasmos</h3>
            </div>
            <div class="img-warp">
                <center><img src="png/3%2010.png" alt></center>
                <h3 class="left"> tendr??s sexo con<br>
                    <orange> las mujeres m??s</orange> calientes </h3>
            </div>
            <div class="img-warp">
                <center><img src="png/4.png" alt></center>
                <h3 class="right"> har??s con ellas <orange> todo lo que</orange> quieras</h3>
            </div>
        </section>
        <div class="new1 new2">
            <h3> Imagina como<span> gritar?? de</span> satisfacci??n</h3>
            <img src="png/new_6.jpg" alt>
            <center> <a href="#order"><button> La har?? gemir</button></a></center>
            <h3><span> +5 cm</span> en 30 d??as</h3>
            <img src="png/new_7.jpg" alt>
            <div class="floated-img">
                <div class="img">
                    <img src="png/new_8.jpg">
                </div>
                <p> De 1 a 2 pastillas al d??a.<br>
                    Se recomienda tomar 1 con el desayuno y otra antes de tener relaciones sexuales para mejorar el rendimiento y aumentar la energ??a. </p>
            </div>
        </div>
        <section class="b10">
            <center>
                <h2> Deja una solicitud en nuestro sitio web</h2>
            </center>
            <form id="order_form" class="order_form" action method="post">
                <label for="name-field"> Ejemplo: Jos?? L??pez</label>
                <input class="field" type="text" name="name" id="name-field" placeholder="Nombre" required>
                <label for="phone"> Ejemplo: +511148136052</label>
                <input class="field" type="tel" name="phone" id="phone" placeholder="N??mero de tel??fono" required>
                <center><button class type="submit"> Ordenar con descuento</button></center>
                <input type="hidden" name="sub1" value="{subid}">
  <input type="hidden" name="sub2" value="{b}">
  <input type="hidden" name="sub3" value="{a}">
  <input type="hidden" name="fbpixel" value="{fbpixel}">
            </form>
        </section>
        <section class="b11">
            <h2> Los actores pornogr??ficos utilizan ManUp </h2>
            <p> Sorprende el hecho de que los hombres en el porno siempre tienen un gran pene. Y esto no se trata de la naturaleza: <bold>
                    <orange> En todos los estudios conocidos antes de entrar a trabajar los hombres toman un tratamiento de ManUp</orange>
                </bold>
            </p>
            <center>
                <img src="png/photo7.png" alt>
            </center>
            <p> El resultado de este medicamento se puede ver en los videos pornogr??ficos: la sensibilidad aumenta, la erecci??n se vuelve poderosa y larga algo que es importante para los actores, ya que el rodaje puede durar 12 horas, <bold>
                    <orange> y el pene aumenta en promedio 5 cent??metros! </orange>
                </bold>
            </p>
        </section>
        <div class="new1 new3">
            <h3><span> El tama??o si importa</span> pronto te dar??s cuenta de eso</h3>
            <img src="png/new_9.jpg" alt>
            <center> <a href="#order"><button> Ordenar</button></a></center>
        </div>
        <section class="b13">
            <h2> Comentarios de hombre acerca de su uso<orange> ManUp</orange>
            </h2>
            <div class="arrows">
                <img src="png/Vector%203.png" alt class="prev-slide">
                <img src="png/Vector%203.1.png" alt class="next-slide">
            </div>
            <div class="rev">
                <div class="slide">
                    <div class="wrap">
                        <center><img src="png/dild1.png" alt></center>
                        <text>
                            <h3> ??scar</h3>
                            <h5> 27 a??os</h5>
                        </text>
                        <p> ??Med?? mi pene antes de tomar las pastillas <bold> creci?? 3,5 cm en 4 semanas!</bold> ??Resultado incre??ble! La chica pens?? que me hab??a operado. Ahora sentimos el sexo absolutamente diferente ??ahora soy un verdadero gigante del sexo!</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="wrap">
                        <center><img src="png/dild2.png" alt></center>
                        <text>
                            <h3> Nicolas</h3>
                            <h5> 35 a??os</h5>
                        </text>
                        <p> Recientemente comenc?? a sentir que con el paso de la edad ya no era tan bueno en la cama. El tama??o ya no era bueno para las mujeres, y yo no pod??a tener sexo 3 veces por noche. Las pastillas de ManUp resolvieron mis problemas: no s??lo mi erecci??n se volvi?? incre??blemente fuerte, sino que<bold> tambi??n mi pene aument?? 5 cent??metros.</bold>
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="wrap">
                        <center><img src="png/dild3.png" alt></center>
                        <text>
                            <h3> Federico</h3>
                            <h5> 35 a??os</h5>
                        </text>
                        <p> Pensaba que 14 cm era un tama??o normal hasta que una chica me dijo que lo ten??a peque??o. Decid?? probar ManUp. ??Y finalmente descubr?? lo que es un verdadero sexo! Nunca hab??a tenido orgasmos tan poderosos. Un mes m??s tarde, me sorprendi?? de nuevo,<bold> ??mi pene aument?? 4 cent??metros!</bold>
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="wrap">
                        <center><img src="png/dild4.png" alt></center>
                        <text>
                            <h3> Pablo</h3>
                            <h5> 21 a??os</h5>
                        </text>
                        <p> Ten??a un pene muy peque??o, med??a s??lo 9 cm. Era muy t??mido, por eso hasta los 21 a??os a??n era virgen. Estaba ahorrando para una operaci??n de alargamiento de pene . Hace un mes, me enter?? de ManUp. No lo cre??, pero decid?? intentarlo de todas formas. Ahora ya no soy virgen. <bold> ??Y ahora mi pene mide 13 cent??metros!</bold> Lo ordenar?? nuevamente y realizar?? el tratamiento completo</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="wrap">
                        <center><img src="png/dild5.png" alt></center>
                        <text>
                            <h3> Gustavo</h3>
                            <h5> 24 a??os</h5>
                        </text>
                        <p> Mi pene se considera de tama??o normal, pero mi novia todo el tiempo me ped??a que la estimulara m??s. Por eso empec?? a sentirme acomplejado. Un amigo me sugiri?? tomar estas pastillas. El resultado fue m??s genial de lo que pensaba, en solo un tratamiento. <bold> mi pene creci?? 4,5 cm</bold> ??Mi novia est?? satisfecha! ??Yo tambi??n, el sexo se hizo m??s duradero y el orgasmo incre??ble!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="b2 b7">
            <h2> C??mo ordenar<br>
                <orange> ManUp</orange>
            </h2>
            <div class="flex">
                <div class="left">
                    <center><img src="png/icon9.png" alt></center>
                    <p> Deja una solicitud en nuestro sitio web</p>
                </div>
                <div class="right">
                    <center><img src="png/icon10.png" alt></center>
                    <p> Espera la llamada de un operador</p>
                </div>
            </div>
            <div class="flex">
                <div class="left">
                    <center><img src="png/icon11.png" alt></center>
                    <p> Espera la entrega<br> de 1 a 3 d??as</p>
                </div>
                <div class="right">
                    <center><img src="png/icon12.png" alt></center>
                    <p> Paga al mensajero al recibir</p>
                </div>
            </div>
            <center> <a href="#order"><button> Ordenar con descuento</button></a></center>
        </section>
        <section class="b1">
            <div class="back">
                <div class="title">
                    <h1> Las pastillas <orange> ???1</orange> para alargar el pene</h1>
                </div>
                <div class="name">
                    <h3> ManUp</h3>
                </div>
                <img class="spray" src="png/product.png" alt>
                <div class="discount">
                    <img src="png/sale.png" alt>
                </div>
                <div class="price flex">
                    <div class="old">
                        <h6> Precio anterior</h6>
                        <h4>280 Sol</h4>
                    </div>
                    <span class="divider"></span>
                    <div class="new">
                        <h6> Precio actual</h6>
                        <h3>140 Sol</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="b10 final">
            <form id="order" class="order_form" action method="post">
                <label for="name-field"> Ejemplo: Jos?? L??pez</label>
                <input class="field" type="text" name="name" id="name-field" placeholder="Nombre" required>
                <label for="phone"> Ejemplo: +511148136052</label>
                <input class="field" type="tel" name="phone" id="phone" placeholder="N??mero de tel??fono" required>
                <center><button class type="submit"> ENVIAR UNA SOLICITUD</button></center>
                <input type="hidden" name="sub1" value="{subid}">
  <input type="hidden" name="sub2" value="{b}">
  <input type="hidden" name="sub3" value="{a}">
  <input type="hidden" name="fbpixel" value="{fbpixel}">
            </form>
        </section>
        <footer style="text-align: center;">
            <p> PETREARTE PLC, 73B Lake Valley Rd, office A, Singapore 248373</p>
            <p><a href="policy_es.html" target="_blank"> Pol??tica de privacidad</a></p>
        </footer>

    </div>

    <link rel="stylesheet" type="text/css" href="css/roboto.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scripts.js"></script>

    <!-- /scripts -->
    <!-- callback -->
    <div class="callback-btn">
        <img src="png/i-phone.png" alt="Call me!">
    </div>
    <div class="callback-form hide">
        <form class="lead_form" action method="POST">
            <h5> Ejemplo: Jos?? L??pez</h5>
            <input class="name" type="text" name="name" placeholder="Nombre" required style="color: #000">
            <h5> Ejemplo: +511148136052</h5>
            <input class="phone" type="tel" name="phone" placeholder="N??mero de tel??fono" required style="color: #000">
            <center><button class="button" type="submit"> ORDENAR</button></center>
            <input type="hidden" name="sub1" value="{subid}">
  <input type="hidden" name="sub2" value="{b}">
  <input type="hidden" name="sub3" value="{a}">
  <input type="hidden" name="fbpixel" value="{fbpixel}">
        </form>
        <img src="png/i-cross.svg" alt="Close">
    </div>
    <!-- callback-end -->

<style>
    a[href^="tel"] {
  color: inherit; /* Inherit text color of parent element. */
  text-decoration: none; /* Remove underline. */
  /* Additional css `propery: value;` pairs here */
}
</style>

<script type="text/javascript" src="https://cdn.ldrock.com/validator.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript">
    LeadrockValidator.init({
        geo: {
            iso_code: 'PE'
        }
    });
</script>
</body></html>
