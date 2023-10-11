<?php
/*
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Por favor debes iniciar sesion");
            window.location = "Login_CodeLearn/index_login.php";
        </script>
        ';
        session_destroy();
        die();
    }
    */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLearnPro</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="Estilos.css">
    <link rel="stylesheet" href="Estilos_menu.css">
   <style>
/*Estilo--Ejemplo-Cursos*/
.cuadro-con-fondo-blanco {
    background-color: #f5f5f5; /* Color de fondo */
    padding: 20px; /* Espacio interno */
    border: 2px solid #333; /* Borde */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Sombra suave */
    width: 400px; /* Ancho del cuadro */
    margin: 0 auto; /* Centrado horizontal */
    text-align: left; /* Alineación del texto a la izquierda */
  }
  /* Estilo para el título */
  .cuadro-con-fondo-blanco h2 {
    color: #333; /* Color del texto del título */
    margin-bottom: 15px; /* Espacio inferior */
  }
</style>
</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">CodeLearnPro</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index.html" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Ejercicios</a>
                   
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Cursos</a>
                    <ul>
                        <li><a href="./Cursos/HTML/Index_Iniciado.html">HTML</a></li>
                        <li><a href="./Cursos/Python/Index.html">Python</a></li>
                        <li><a href="./Cursos/PHP/Index.html">PHP</a></li>
                        <li><a href="./Cursos/Css/Index.html">CSS</a></li>
                        <li><a href="./Cursos/MYSQL/Index.html">MYSQL</a></li>
                        <li><a href="./Cursos/Java/Index.html">Java</a></li>
                    </ul>
                </li>
                <li class="nav__items">
                    <a href="Login_CodeLearn/php/cerrar_sesion.php" class="nav__links">Cerrar Sesión</a>
                </li>
                

                <img src="./images/programacion.jpeg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">APRENDE PROGRAMACIÓN DESDE CERO HASTA DOMINARLO.</h1>
            <p class="hero__paragraph">Elige cualquier lenguaje para aprender de una vez por todas, una vez que termines cualquier curso serás
                capaz de crear cualquier cosa</p>
            <a href="Consola.html" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué aprenderás en estos cursos?</h2>
            <p class="about__paragraph">Todo lo necesario y obligatorio de la programación, (PHP, PYTHON, JAVA, HTML, CSS y más)</p>

            <div class="about__main">
                <article class="about__icons">
               
                    <img  href="./Python/Index.html" src="./images/shapes.svg" class="about__icon">
                    <h3 class="about__title">Python</h3>
                    <p class="about__paragrah">Es esencialmente utilizado para el desarrollo de software, análisis de datos y ciencia de datos, así como desarrollo web. Es un lenguaje versátil y ampliamente aplicable en diversas áreas de la informática y la tecnología.</p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">Diseño con CSS</h3>
                    <p class="about__paragrah">Se utiliza para dar estilo y diseño a páginas web, permitiendo controlar aspectos como colores, tipografía, diseño y presentación. Es fundamental para crear sitios web atractivos y con una apariencia profesional.</p>
                </article>

                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">PHP</h3>
                    <p class="about__paragrah">PHP es esencialmente utilizado para desarrollar sitios web dinámicos y aplicaciones web interactivas, así como para gestionar bases de datos en línea. Es una herramienta clave en la creación de experiencias web dinámicas y funcionales.</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Curso completo de PYTHON. ¡Domina PYTHON de una vez por todas!</h2>
                    <p class="knowledge__paragraph"> Inscríbete y comienza tu viaje de aprendizaje de Python. No olvides practicar regularmente y trabajar en proyectos personales para consolidar tus habilidades. ¡Buena suerte! </p>
                    <a href="./Python/Index.html" class="cta">Entra al curso</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/cursos-gratis-de-python-en-español.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Obten el plan perfecto para aprender</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Flexbox</p>
                    <h3 class="price__price">Free</h3>

                    <div class="price__items">
                        <p class="price__features">Flexbox</p>
                        <p class="price__features">Layouts</p>
                        <p class="price__features">Responsive</p>
                    </div>

                    <a href="#" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element price__element--best">
                    <p class="price__name">Grid</p>
                    <h3 class="price__price">$30/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Grid</p>
                        <p class="price__features">Implicit Grid</p>
                        <p class="price__features">Responsive</p>
                    </div>

                    <a href="#" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element">
                    <p class="price__name">Animaciones</p>
                    <h3 class="price__price">$40/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Animation</p>
                        <p class="price__features">Transition</p>
                        <p class="price__features">Render Website</p>
                    </div>

                    <a href="#" class="price__cta">Empieza ahora</a>
                </div>


            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jordan Alexander, <span class="testimony__course">estudiante
                                de CSS.</span></h2>
                        <p class="testimony__review">Mi dedicación y entusiasmo por aprender CSS son altos, y estoy comprometido en invertir tiempo y esfuerzo para dominar esta tecnología. A medida que avanzo en el curso, estoy aprendiendo cómo aplicar estilos a elementos HTML, lo que me permite controlar aspectos como el color, la tipografía, el espaciado y la disposición de los elementos en una página web.

                        </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face3.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Alejandra Perez, <span class="testimony__course">estudiante de
                                Python.</span></h2>
                        <p class="testimony__review">Como estudiante, estoy emocionado de aprender Python en esta plataforma. La programación siempre me ha intrigado y Python parece ser un lenguaje versátil y poderoso. Mi dedicación y entusiasmo por aprender son altos, y estoy comprometido en invertir tiempo y esfuerzo para dominar esta habilidad.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face2.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Karen Arteaga, <span class="testimony__course">estudiante de
                                PHP.</span></h2>
                        <p class="testimony__review">Estoy emocionado por aprender PHP en esta plataforma. PHP es un lenguaje de programación ampliamente utilizado en el desarrollo web, y estoy ansioso por comprender cómo funciona y cómo puedo aplicarlo en la creación de sitios web dinámicos.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Kevin Ramirez, <span class="testimony__course">estudiante de
                                Java.</span></h2>
                        <p class="testimony__review"> Java es un lenguaje de programación ampliamente utilizado en el desarrollo de aplicaciones empresariales, aplicaciones móviles y en una variedad de otros campos, y estoy ansioso por comprender sus conceptos y aplicaciones.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face4.jpg" class="testimony__img">
                    </figure>
                </section>


                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph"></p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es programación?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">La programación es el proceso de escribir un conjunto de instrucciones o código en un lenguaje de programación específico para que una computadora o dispositivo electrónico realice una tarea o función particular. En esencia, la programación es la forma en que los seres humanos se comunican con las computadoras para que realicen diversas acciones, desde simples cálculos matemáticos hasta tareas complejas como el procesamiento de datos, la creación de aplicaciones o el control de hardware?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es un framework?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Es un conjunto de bibliotecas, herramientas y directrices que proporcionan una estructura y un conjunto de funcionalidades comunes para el desarrollo de aplicaciones o sistemas de software. Está diseñado para facilitar el proceso de desarrollo al estandarizar ciertos aspectos de la aplicación, lo que permite a los desarrolladores centrarse en la lógica específica de su proyecto en lugar de tener que preocuparse por reinventar la rueda cada vez que crean una nueva aplicación.</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es POO?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">La programación orientada a objetos (POO) es un paradigma de programación que se basa en el concepto de "objetos" para modelar y organizar el código. En este enfoque, se considera que un programa se compone de objetos, que son instancias de clases, y estos objetos interactúan entre sí para realizar tareas y manipular datos. La POO se basa en varios principios clave: Clases y objetos, Encapsulamiento, Herencia, Polimorfismo y Abstracción. </p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">Tipos de lenguajes de programación</h2>
                <section class="knowledge">
                    <div class="knowledge__container container">
                        <div class="knowledege__texts">
                            <h2 class="subtitle">HTML</h2>
                            <p class="knowledge__paragraph"> El mejor lenguaje para contrucción de páginas web  </p>
                            <a href="./HTML/Index.html" class="cta">Entra al curso</a> <br>
                            <br>
                            <a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_default" class="cta" target="_blank">Entra a spaces</a>
                            <br>
                            <br>
                        
                            <a class="cta" href="https://www.youtube.com/watch?v=0CLZ_jsLLZs" target="_blank">Video Tutorial</a>
                        </body>
                        </div>
        
                        <figure class="knowledge__picture">
                            <h2 class="subtitle">Ejemplo:</h2>
                            <div class="cuadro-con-fondo-blanco">
                                <h2>Código HTML</h2><br>
                                &lt;!DOCTYPE html&gt;<br>
                                &lt;html&gt;<br>
                                    &lt;head&gt;<br>
                                        &lt;title HTMLTutorial &lt;/tilte&gt;<br>
                                        &lt;/head&gt;<br>
                                        &lt;body&gt;<br>

                                            &lt;h1 This is a headin &lt;/h1&gt;<br>
                                            &lt;p This is a paragraph.  &lt;/p&gt; <br>

                                            &lt;/body&gt;<br>
                                            &lt;/html&gt;<br>
                                 
                              </div>
                        </figure>
                    </div>
                </section>
                <section class="knowledge">
                    <div class="knowledge__container container">
                        <div class="knowledege__texts">
                            <h2 class="subtitle">Python</h2>
                            <p class="knowledge__paragraph"> El mejor lenguaje para contrucción de páginas web  </p>
                            <a href="./Python/Index.html" class="cta">Entra al curso</a> <br>
                            <br>
                            <a href="https://www.w3schools.com/python/trypython.asp?filename=demo_default" class="cta" target="_blank">Entra a spaces</a>
                            <br>
                            <br>
                        
                            <a class="cta" href="https://www.youtube.com/watch?v=0CLZ_jsLLZs" target="_blank">Video Tutorial</a>
                        </body>
                        </div>
        
                        <figure class="knowledge__picture">
                            <h2 class="subtitle">Ejemplo:</h2>
                            <div class="cuadro-con-fondo-blanco">
                               
                                <h2>Código Python</h2><br>
                             <p> print("Hello, World!")</p>
                              </div>
                        </figure>
                    </div>
                </section>

                <section class="knowledge">
                    <div class="knowledge__container container">
                        <div class="knowledege__texts">
                            <h2 class="subtitle">PHP</h2>
                            <p class="knowledge__paragraph"> El mejor lenguaje para contrucción de páginas web  </p>
                            <a href="./PHP/Index.html" class="cta">Entra al curso</a> <br>
                            <br>
                            <a href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_intro" class="cta" target="_blank">Entra a spaces</a>
                            <br>
                            <br>
                        
                            <a class="cta" href="https://www.youtube.com/watch?v=0CLZ_jsLLZs" target="_blank">Video Tutorial</a>
                        </body>
                        </div>
        
                        <figure class="knowledge__picture">
                            <h2 class="subtitle">Ejemplo:</h2>
                            <div class="cuadro-con-fondo-blanco">
                                <!-- Aquí puedes agregar tu información -->
                                <h2>Código PHP</h2><br>
                                <p>  &lt;DOCTYPE html&gt;<br>
                                    &lt; html&gt;<br>
                                    &lt; body&gt;<br>
                                    
                                    &lt;?php
                                    echo "My first PHP script!";
                                    ?><br>
                                    
                                    &lt;/body&gt;<br>
                                    &lt;/html&gt;<br>
                                </p>
                              </div>
                        </figure>
                    </div>
                </section>

        
                </section>
                <section class="knowledge">
                    <div class="knowledge__container container">
                        <div class="knowledege__texts">
                            <h2 class="subtitle">CSS</h2>
                            <p class="knowledge__paragraph"> El mejor lenguaje para contrucción de páginas web  </p>
                            <a href="./Css/Index.html" class="cta">Entra al curso</a> <br>
                            <br>
                            <a href="https://www.w3schools.com/css/tryit.asp?filename=trycss_default" class="cta" target="_blank">Entra a spaces</a>
                            <br>
                            <br>
                        
                            <a class="cta" href="https://www.youtube.com/watch?v=0CLZ_jsLLZs" target="_blank">Video Tutorial</a>
                        </body>
                        </div>
        
                        <figure class="knowledge__picture">
                            <h2 class="subtitle">Ejemplo:</h2>
                            <div class="cuadro-con-fondo-blanco">
                                <!-- Aquí puedes agregar tu información -->
                                <h2>Código CSS</h2><br>
                                <p>body {<br>
                                    background-color: lightblue;
                                 <br> }
                                  <br>
                                  <br>
                                  <br>
                                  h1 {<br>
                                    color: white;
                                    text-align: center;
                                  }
                                  <br>
                                  <br>
                                  <br>
                                  p {<br>
                                    font-family: verdana;
                                  }</p>
                              </div>
                        </figure>
                    </div>
                </section>
                <section class="knowledge">
                    <div class="knowledge__container container">
                        <div class="knowledege__texts">
                            <h2 class="subtitle">MYSQL</h2>
                            <p class="knowledge__paragraph"> El mejor lenguaje para contrucción de páginas web  </p>
                            <a href="./MYSQL/Index.html" class="cta">Entra al curso</a> <br>
                            <br>
                            <a href="https://www.w3schools.com/mysql/trymysql.asp?filename=trysql_select_all" class="cta" target="_blank">Entra a spaces</a>
                            <br>
                            <br>
                        
                            <a class="cta" href="https://www.youtube.com/watch?v=0CLZ_jsLLZs" target="_blank">Video Tutorial</a>
                        </body>
                        </div>
        
                        <figure class="knowledge__picture">
                            <h2 class="subtitle">Ejemplo:</h2>
                            <div class="cuadro-con-fondo-blanco">
                                <!-- Aquí puedes agregar tu información -->
                                <h2>Código MYSQL</h2><br>
                                <p>SELECT * FROM Customers;
                                </p>
                              </div>
                        </figure>
                    </div>
                </section>
                <section class="knowledge">
                    <div class="knowledge__container container">
                        <div class="knowledege__texts">
                            <h2 class="subtitle">Java</h2>
                            <p class="knowledge__paragraph"> El mejor lenguaje para contrucción de páginas web  </p>
                            <a href="./Java/Index.html" class="cta">Entra al curso</a> <br>
                            <br>
                            <a href="https://www.w3schools.com/java/tryjava.asp?filename=demo_helloworld" class="cta" target="_blank">Entra a spaces</a>
                            <br>
                            <br>
                        
                            <a class="cta" href="https://www.youtube.com/watch?v=0CLZ_jsLLZs" target="_blank">Video Tutorial</a>
                        </body>
                        </div>
        
                        <figure class="knowledge__picture">
                            <h2 class="subtitle">Ejemplo:</h2>
                            <div class="cuadro-con-fondo-blanco">
                                <!-- Aquí puedes agregar tu información -->
                                <h2>Código Java</h2><br>
                                <p>public class Main {
                                    public static void main(String[] args) {<br>
                                     <br> System.out.println("Hello World");
                                    }
                                  }</p>
                              </div>
                        </figure>
                    </div>
                </section>
            </section>
        </section>
        
    </main>
    
    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">CodeLearnPro</h2>

                <ul class="nav__link nav__link--menu">
                    <li class="nav__items">
                        <a href="index.html" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Ejercicios</a>
                       
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Cursos</a>
                        <ul>
                            <li><a href="./HTML/Index.html">HTML</a></li>
                            <li><a href="./Python/Index.html">Python</a></li>
                            <li><a href="./PHP/Index.html">PHP</a></li>
                            <li><a href="./Css/Index.html">CSS</a></li>
                            <li><a href="./MYSQL/Index.html">MYSQL</a></li>
                            <li><a href="./Java/Index.html">Java</a></li>
                        </ul>
                    </li>
                    <li class="nav__items">
                        <a href="login.php" class="nav__links">Iniciar Sesión</a>
                    </li>
                    
    
                    <img src="./images/programacion.jpeg" class="nav__close">
                </ul>
    
            </nav>

            <form class="footer__form" action="#" method="POST">
                <h2 class="footer__newsletter"></h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; CodeLearnPro.2023</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    


</body>

</html>
