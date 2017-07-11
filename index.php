<!DOCTYPE html>
<html lang="en">

<head>
    <title>Konvergy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animation.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
    <![endif]-->

    <script src="https://use.fontawesome.com/c5880329e1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>

    <script type="text/javascript" src="js/jquery.fullPage.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                /* sectionsColor: ['whitesmoke', '#4f347c', '#8a3881', '#ef7f34', '#009b41','#cd362d'], */
                anchors: ['konvergy', 'tecnology', 'marketing', 'learning', 'social', 'contact'],
                menu: '#menu',

                afterRender: function() {

                    //playing the video
                    $('video').get(0).play();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>

</head>

<body>
    <div class="loader">
        <h1>Bienvenidos</h1>
    </div>

    <header class="container-full">
        <a href="#konvergy">
            <div class="logo">
                <!--<img src="images/konvergy-logo.png" class="image-responsive" alt="Konvergy">-->
            </div>
        </a>
        <nav>
            <ul class="user-menu">
                <li><a href=""><i class="fa fa-search" aria-hidden="true"></a></i>
                </li>
                <li><a href=""><i class="fa fa-lock" aria-hidden="true"></a></i>
                </li>
            </ul>
            <ul id="menu">
                <li data-menuanchor="konvergy" class="active"><a href="#konvergy">Home</a></li>
                <li data-menuanchor="tecnology"><a href="#tecnology">Tecnología</a></li>
                <li data-menuanchor="marketing"><a href="#marketing">Marketing</a></li>
                <li data-menuanchor="learning"><a href="#learning">Learning</a></li>
                <li data-menuanchor="social"><a href="#social">RS</a></li>
                <li data-menuanchor="contact"><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div id="fullpage">

        <div class="section section-one" id="section0">
            <div class="grill">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <div class="konvergy-title">
                                <h1>Elevamos tu utilidad a otro <strong>nivel</strong></h1>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="socials">
                                <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="transform">
                <div class="newsletter">
                    <div class="arrows">
                        <div class="arrow-1"><span class="arrow-color"></span></div>
                        <div class="arrow-2"><span class="arrow-color"></span></div>
                        <div class="arrow-3"><span class="arrow-color"></span></div>
                    </div>
                    <h4>Newsletter</h4>
                </div>
            </div>

            <video poster="" autoplay loop mute data-autoplay>
                <source src="video/konvergy-video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="section section-two" id="section1">
            <div class="slide slide-one active" id="slide1">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2><strong>Certificación K </strong><br> alto Rendimiento / menos Costo</h2>
                                <img class="tecnology-01" src="images/tecnologia-konvergy-productos-certificados-k.jpg" alt="">
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Tecnología</strong></h1>
                                </div>
                                <div class="tec info-box">
                                    <h1>Konvergy Tecnología</h1>
                                    <p>Contamos con un amplio portafolio de productos certificados “K” que están dirigidos a establecer el pleno y óptimo funcionamiento de la estructura tecnológica.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <p>1 / 3</p>
                                            <div class="fp-controlArrow fp-next">
                                                <div class="next-arrows">
                                                    <span class="next"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td><img class="tecnology-02" src="images/data-center-tecnologia-cableado-konvergy.jpg" alt=""></td>
                            <td>
                                <div class="tec socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="slide slide-two" id="slide2">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2><strong>"Nuestro limite</strong> <br> lo indicas TU"</h2>
                                <img class="tecnology-03" src="images/telemedicina-tecnologia-software-konvergy.jpg" alt="">
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Tecnología</strong></h1>
                                </div>
                                <div class="tec info-box">
                                    <h1>Soluciones</h1>
                                    <p>Abarcamos distintos niveles en software y hardware, automatización de procesos, logística, comunicaciones, seguridad, almacenamiento de datos, control de flotas, data center, entre otros; aplicadas a distintos escenarios
                                        que van desde Banca hasta mini tiendas.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <div class="fp-controlArrow fp-prev">
                                                <div class="prev-arrows">
                                                    <span class="prev"></span>
                                                </div>
                                            </div>
                                            <p>2 / 3</p>
                                            <div class="fp-controlArrow fp-next">
                                                <div class="next-arrows">
                                                    <span class="next"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td><img class="tecnology-04" src="images/tiendas-pequenas-marketing-digital-konvergy-mercadeo-outbound-inbound.jpg" alt=""></td>
                            <td>
                                <div class="tec socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="slide slide-three" id="slide3">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2>"<strong>Certificamos productos</strong> <br> no marcas"</h2>
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Tecnología</strong></h1>
                                </div>
                                <div class="tec info-box">
                                    <h1>Productos certificados "K"</h1>
                                    <p>Contamos con un amplio portafolio de productos certificados “K” que están dirigidos a establecer el pleno y óptimo funcionamiento de la estructura tecnológica.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <div class="fp-controlArrow fp-prev">
                                                <div class="prev-arrows">
                                                    <span class="prev"></span>
                                                </div>
                                            </div>
                                            <p>3 / 3</p>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td><img class="tecnology-06" src="images/telecomunicaciones-tecnologia-konvergy-enlace-microonda-producto-certificacion-k.jpg" alt=""></td>
                            <td>
                                <div class="tec socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="transform">
                <div class="tecnology-blog">
                    <div class="arrows">
                        <div class="arrow-1"><span class="arrow-color"></span></div>
                        <div class="arrow-2"><span class="arrow-color"></span></div>
                        <div class="arrow-3"><span class="arrow-color"></span></div>
                    </div>
                    <h4>Blog Tecnología</h4>
                </div>
            </div>

            <div class="background-title">
                <h1>Tecnología</h1>
            </div>
        </div>

        <div class="section section-three" id="section2">
            <div class="slide slide-one active" id="slide1">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2>"<strong>Nos enfocamos en <br> numeros REALES</strong> <br> no estadisticas artificiales"</h2>
                                <img class="marketing-01" src="images/social-media-engagement-konvergy-marketing-digital-inbound-outbound.jpg" alt="">
                            </td>
                            <td>
                                <div class="mark info-box">
                                    <h1>Konvergy Mercadeo</h1>
                                    <p>Nuestra metodología es una combinación entre Inbound Marketing y un outbound marketing definido no agresivo, consiguiendo que tu negocio crezca aprovechando todo el potencial de las alternativas que tenemos para usted.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <p>1 / 3</p>
                                            <div class="fp-controlArrow fp-next">
                                                <div class="next-arrows">
                                                    <span class="next"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Mercadeo</strong></h1>
                                </div>
                                <img class="marketing-02" src="images/outbound-marketing-konvergy-digital-social-media.jpg" alt="">
                            </td>
                            <td>
                                <div class="mark socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="slide slide-two" id="slide2">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2><strong>"Mercadeo Digital y Habitual,</strong> <br> las almas gemelas de KONVERGY"</h2>
                                <img class="marketing-03" src="images/marketing-inbound-outbound-konvergy-digital.jpg" alt="">
                            </td>
                            <td>
                                <div class="mark info-box">
                                    <h1>Soluciones</h1>
                                    <p>Gracias a nuestra metodología con enfoque en atraer potenciales clientes y alcanzar el éxito en el mercado ofrecemos distintas acciones donde combinamos el Mercadeo Digital y el Mercadeo Habitual.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <div class="fp-controlArrow fp-prev">
                                                <div class="prev-arrows">
                                                    <span class="prev"></span>
                                                </div>
                                            </div>
                                            <p>2 / 3</p>
                                            <div class="fp-controlArrow fp-next">
                                                <div class="next-arrows">
                                                    <span class="next"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Mercadeo</strong></h1>
                                </div>
                                <img class="marketing-04" src="images/solucion-marketing-digital-konvergy.jpg" alt="">
                            </td>
                            <td>
                                <div class="mark socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="slide slide-three" id="slide3">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2><strong>"Somos la llave a tu</strong> <br> mercado objetivo"</h2>
                            </td>
                            <td>
                                <div class="mark info-box">
                                    <h1>Productos certificados "K"</h1>
                                    <p>Al reproducir esta metodología para nuestros clientes, generamos a través de estos productos una máquina de venta previsible y escalable.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <div class="fp-controlArrow fp-prev">
                                                <div class="prev-arrows">
                                                    <span class="prev"></span>
                                                </div>
                                            </div>
                                            <p>3 / 3</p>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Mercadeo</strong></h1>
                                </div>
                                <img class="marketing-06" src="images/servicio-marketing-inbound-outbound-konvergy-producto-certficado-k.jpg" alt="">
                            </td>
                            <td>
                                <div class="mark socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="transform">
                <div class="marketing-blog">
                    <div class="arrows">
                        <div class="arrow-1"><span class="arrow-color"></span></div>
                        <div class="arrow-2"><span class="arrow-color"></span></div>
                        <div class="arrow-3"><span class="arrow-color"></span></div>
                    </div>
                    <h4>Blog Mercadeo</h4>
                </div>
            </div>

            <div class="background-title">
                <h1>Mercadeo</h1>
            </div>
        </div>

        <div class="section" id="section3">
            <div class="slide active" id="slide1">
                <div class="grill">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <h2>"<strong>Certificación K Learning,</strong> <br> valida conocimiento en todas <br> nuestras áreas"</h2>
                                    <div class="ent socials">
                                        <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                    </div>
                                </td>
                                <td><img class="entertainment-01" src="images/business-casual-people-marketing-digital-konvergy-office.jpg" alt=""></td>
                                <td>
                                    <div class="ent info-box">
                                        <h1>Konvergy Entretenimiento</h1>
                                        <p>Nuestro compromiso en el programa de certificaciones de KONVERGY se centra en heredar el conocimiento pleno y las habilidades necesarias para utilizar los productos certificados K.
                                            <br><br>
                                            <br><br>
                                            <a class="more-button" href="">Saber más</a>
                                            <br><br>
                                            <br><br>
                                            <div class="controls-arrows">
                                                <p>1 / 2</p>
                                                <div class="fp-controlArrow fp-next">
                                                    <div class="next-arrows">
                                                        <span class="next"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="section-title">
                                        <h1><strong>Entrenamiento</strong></h1>
                                    </div>
                                    <img class="entertainment-02" src="images/certificacion-k-learning-school-konvergy-entrenamiento.jpg" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="slide" id="slide2">
                <div class="grill">
                    <table>
                        <tr>
                            <td>
                                <h2><strong>"La Practica hace al Maestro,</strong> <br> no la teoria"</h2>
                                <div class="ent socials">
                                    <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                </div>
                            </td>
                            <td><img class="entertainment-03" src="images/certificacion-cursos-examenes-k-konvergy-learning.jpg" alt=""></td>
                            <td>
                                <div class="ent info-box">
                                    <h1>Certificaciones, cursos y examenes</h1>
                                    <p>Gracias a nuestra metodología con enfoque en atraer potenciales clientes y alcanzar el éxito en el mercado ofrecemos distintas acciones donde combinamos el Mercadeo Digital y el Mercadeo Habitual.
                                        <br><br>
                                        <br><br>
                                        <a class="more-button" href="">Saber más</a>
                                        <br><br>
                                        <br><br>
                                        <div class="controls-arrows">
                                            <div class="fp-controlArrow fp-prev">
                                                <div class="prev-arrows">
                                                    <span class="prev"></span>
                                                </div>
                                            </div>
                                            <p>2 / 2</p>
                                        </div>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="section-title">
                                    <h1><strong>Entrenamiento</strong></h1>
                                </div>
                                <img class="entertainment-04" src="images/certificaciones-cursos-examen-learning-entrenamiento-konvergy-k.jpg" alt="">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="transform">
                <div class="learning">
                    <div class="arrows">
                        <div class="arrow-1"><span class="arrow-color"></span></div>
                        <div class="arrow-2"><span class="arrow-color"></span></div>
                        <div class="arrow-3"><span class="arrow-color"></span></div>
                    </div>
                    <h4>Material Gratis</h4>
                </div>
            </div>

            <div class="background-title">
                <h1>Entrenamiento</h1>
            </div>
        </div>

        <div class="section" id="section4">
            <div class="social-bg" style="height: 100%;background-image: url(images/rs-responsabilidad-social-konvergy-compromiso.png); background-size: 100%;
    background-repeat: no-repeat;background-position: bottom;">
                <div class="grill">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <h2>"El compromiso es de<br> TODOS"</h2>
                                    <div class="rs socials">
                                        <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="section-title">
                                        <h1><strong>Responsabilidad Social</strong></h1>
                                    </div>
                                    <div class="rs info-box">
                                        <h1>Konvergy <br> RS</h1>
                                        <p>Konvergy fundamenta el compromiso de verificar el cumplimiento de las metas propuestas, asegurando un dialogo permanente con los grupos de interés que le permita el mejoramiento continuo de su estrategia de relacionamiento.</p>
                                        <br><br>
                                        <p>Así como también la propuesta de evitar una afectacion directa al medio ambiente y poner en riesgo a nuestro planeta.</p>
                                        <br><br>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="transform">
                    <div class="rrss">
                        <div class="arrows">
                            <div class="arrow-1"><span class="arrow-color"></span></div>
                            <div class="arrow-2"><span class="arrow-color"></span></div>
                            <div class="arrow-3"><span class="arrow-color"></span></div>
                        </div>
                        <h4>Nuestra Experiencia</h4>
                    </div>
                </div>

                <div class="background-title">
                    <h1>RS</h1>
                </div>
            </div>
        </div>

        <div class="section" id="section5">
            <div class="contactos" style="height: 100%;background-image: url(images/fondo-de-contacto.jpg);">
                <div class="contac-box">
                    <h3>Quieres hablar con:</h3>
                    <select class="form-control">
                        <option>Konvergy Tecnología</option>
                        <option>Konvergy Mercadeo</option>
                        <option>Konvergy Entretenimiento</option>
                        <option>Konvergy RS</option>
                    </select>
                </div>
            </div>

            <div class="background-title">
                <img src="images/konvergy-logo-b.png" alt="">
            </div>
        </div>
    </div>

</body>

</html>