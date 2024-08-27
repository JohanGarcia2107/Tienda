<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Vistas/CSS/styles.css">
    <link rel="icon" href="Vistas/IMGs/Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <section class="Side_bar">
        <div class="menus_container">
            <div class="logo_container">
                    <img src="Vistas/IMGs/Logo.png" class="logo" alt="logo">
            </div>
            <label class="ControlMenu C1">
                <input class="DisplayMenu D1" type="radio" name="Manejador" id="abrir" checked>
                <span class="material-symbols-outlined">Menu</span>
            </label>
            <label class="ControlMenu C2">
                <input class="DisplayMenu D2" type="radio" name="Manejador" id="cerrar" >
                <span class="material-symbols-outlined">Close</span>
            </label>
            <nav class="Menu">
                <ul class="menu_container">
                    <li class="menu_item"><a href="#Inicio"><span class="material-symbols-outlined">Home</span><i>Inicio</i></a></li>
                    <li class="menu_item"><a href="Vistas/Productos.php"><span class="material-symbols-outlined">Shopping_cart</span><i>Compra</i></a></li>
                    <li class="menu_item"><a href="#Contacto"><span class="material-symbols-outlined">Mail</span><i>Contactanos</i></a></li>
                    <li class="menu_item"><a href="#NuestrosServicios"><span class="material-symbols-outlined">Work</span><i>Nuestros Servicios</i></a></li>
                    <li class="menu_item"><a href="#NuestrosTrabajos"><span class="material-symbols-outlined">Design_Services</span><i>Nuestros Trabajos</i></a></li>
                </ul>
            </nav>
            <nav class="Menu">
                <ul class="menu_container">
                    <li class="menu_item"><a href="Vistas/Perfil.php"><span class="material-symbols-outlined">Person</span><i>Perfil</i></a></li>
                    <li class="menu_item"><a href="Vistas/InicioSesion.php"><span class="material-symbols-outlined">Login</span><i>Iniciar Sesion</i></a></li>
                </ul>
            </nav>
        </div>
    </section>
    <div class="Contenido">
        <div class="Con"><a href="https://wa.me/573142309876" target="_blank"><span class="material-symbols-outlined">Mail</span><p>Contactanos</p></a></div>
    <header>
        <h1>CUBRIMAGEN</h1>
        <div  class="Logotipo">
            <img class="LogoTipoIMG" src="Vistas/IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
    </header>
    <main id="Inicio" class="QuienesSomos" id="QuienesSomos">
        <div class="a">
            <div class="QuienesSomos_Container">
                <div class="logo_container2">
                    <img src="Vistas/IMGs/Doc5.png" class="profile_image">
                </div>
                <div class="data_container">
                    <div class="data">
                            <h2 class="Titulo1">
                                ¿Quienes somos?
                            </h2>
                            <p class="QuienesSomosTexto">
                                En Cubrimagen, somos más que una empresa: somos creadores de experiencias visuales. Desde nuestra fundación, nos hemos dedicado apasionadamente a diseñar, fabricar y alquilar inflables publicitarios, carpas y toldos que destacan y atraen miradas.

                                Nuestra Misión: Impulsar tu marca hacia nuevas alturas. Creemos que la creatividad y la calidad son la base de todo lo que hacemos. Cada inflable, cada figura 3D y cada parasol que sale de nuestro taller lleva consigo la esencia de tu negocio y la promesa de visibilidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <section class="NuestrosServicios" id="NuestrosServicios">
        <h2>Nuestros Servicios</h2>
        <div class="NuestrosServicios_container">
            <div class="Servicio">
                <div class="SevicioFrente">
                    <img loading="lazy" class="IMGServicio" src="Vistas/IMGs/Inflabe.jpg" alt="Inflable">
                </div>
                <div class="ServicioAtras">
                    <h3>Inflable</h3>
                    <p>Fabricamos inflables de alta calidad para el uso comercial, personal, o publicitario, puedes cotizar con nosotros por medio de nuestroc contacto o el formulario el cual se encuantra a continuacion seleccionando en el asunto <strong>"Cotización"</strong></p>
                </div>
            </div>
            <div class="Servicio">
                <div class="SevicioFrente">
                    <img loading="lazy" class="IMGServicio" src="Vistas/IMGs/Parasol.jpg" alt="Parasoles">
                </div>
                <div class="ServicioAtras">
                    <h3>Parasoles</h3>
                    <p>Fabricamos parasoles para el uso comercial, personal, o publicitario, puedes cotizar uno personalizado o comprar los ya disponibles en el apartado <strong>"Comprar"</strong> que encuentras en el menu </p>
                </div>
            </div>
            <div class="Servicio">
                <div loading="lazy" class="SevicioFrente">
                    <img class="IMGServicio" src="Vistas/IMGs/3d.jpg" alt="Impresion3d">
                </div>
                <div class="ServicioAtras">
                    <h3>Impresiones3d</h3>
                    <p>Vendemos variados diseños e impresiones 3d para uso personal, tambien contamos con un perfil en <a href="https://cults3d.com/es/usuarios/3DPrintGlobin/modelos-3d" target="_blank">Cults</a> y un <a href="https://www.patreon.com/3DPrintGlobin" target="_blank">Patreon</a> por si deseas apoyarnos </p>
                </div>
            </div>
        </div>
    </section>
    <section class="NuestrosTrabajos" id="NuestrosTrabajos">
        <h2>Nuestros trabajos</h2>
        <div class="b">
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/1.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/2.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/3.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/4.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/5.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/6.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/7.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/8.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/9.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/11.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/12.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/13.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/14.jpg" alt="">
                </div>
            </div>
            <div class="NuestrosTrabajos_container">
                <div class="Trabajo">
                    <img loading="lazy" class="trabajos" src="Vistas/IMGs/15.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="Contacto_section" id="Contacto">
        <h2>Contacto</h2>
        <form class="form" action="mailto:jdavid3mon@gmail.com">
            <label class="label_contact" for="name">Nombre
                <input class="input_contact" required type="text" placeholder="Johan Garcia" name="name" id="name">
            </label>
            <label class="label_contact" for="correo">Correo
                <input class="input_contact" required type="email" placeholder="example@gmail.com" name="correo" id="correo">
            </label>
            <label class="label_contact" for="Asunto">Asunto
                <select class="input_contact" name="Asunto" aria-label="Selecciona el asunto">
                    <option value="Cotización">Cotización </option>
                    <option value="Reclamo">Reclamo</option>
                    <option value="Comentario">Comentario</option>
                </select>   
            </label>
            <label class="label_contact" for="mensaje">Mensaje
                <textarea class="input_contact" name="mensaje" id="mensaje" placeholder="Ingresa tu mensaje" rows="6"></textarea>
            </label>
            <input class="input_send" type="submit" value="Enviar">
        </form>
        <div class="redes">
            <a class="red" href="https://www.facebook.com/3DPrintGlobin/" target="_blank"><img src="https://img.icons8.com/?size=100&id=118468&format=png&color=ffffff" alt="facebook"><i>Facebook</i></a>
            <a class="red" href="https://www.facebook.com/3DPrintGlobin/" target="_blank"><img src="https://img.icons8.com/?size=100&id=vgHlr0wYdqNm&format=png&color=ffffff" alt="Pantreon"><i>Patreon</i></a>
            <a class="red" href="https://wa.me/573142309876" target="_blank"><img src="https://img.icons8.com/?size=100&id=16712&format=png&color=ffffff" alt="WhatsApp"><i>+57 3142309876</i></a>
            <a class="red" href="mailto:cubrimage@hotmail.com" target="_blank"><img src="https://img.icons8.com/?size=100&id=53388&format=png&color=ffffff" alt="Mail"><i>cubrimage@hotmail.com</i></a>
        </div>
    </section>
    <footer>
        <div class="footer_container">
            <h4>JG</h4>
            <h4>Diseñado y desarrollado por Johan Garcia, con el uso de la imagen y marca de "Cubrimagen" &copy; 2024 - Todos los Derechos Reservados</h4>
        </div>
    </footer>
</div>
</body>
</html>