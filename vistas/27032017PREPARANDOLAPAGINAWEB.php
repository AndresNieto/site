
            <?php ob_start() ?>   
            <section class="slice bg-white">
                <div class="wp-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-9">
                                <div class="post-item">
                                    <div class="post-meta-top">
                                        <div class="post-image">
                                            <a href="images/temp/post-img-2.jpg" class="theater" title="Shoreline">
                                                <img src="../images/noticias/Oficial-1920X1080.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title"><a href="#" hidefocus="true" style="outline: none;">PREPARANDO LA PAGINA WEB</a></h2>
                                        <span class="post-author">WRITTEN BY <a href="#" hidefocus="true" style="outline: none;">James Franco</a></span>
                                        <div class="post-tags">Posted in <a href="#" hidefocus="true" style="outline: none;">HOTELS</a>, <a href="#" hidefocus="true" style="outline: none;">SPECIAL PROMOS</a>, <a href="#" hidefocus="true" style="outline: none;">SUMMER</a></div>
                                        <div class="clearfix"></div>
                                        <div class="post-desc">
                                            <p>
                                            Una página web, o página electrónica, o página digital, o ciberpágina 1 2 es un documento o información electrónica capaz de contener texto, sonido, vídeo, programas, enlaces, imágenes, y muchas otras cosas, adaptada para la llamada World Wide Web (WWW) y que puede ser accedida mediante un navegador. Esta información se encuentra generalmente en formato HTML o XHTML, y puede proporcionar navegación (acceso) a otras páginas web mediante enlaces de hipertexto. Las páginas web frecuentemente también incluyen otros recursos como pueden ser hojas de estilo en cascada, guiones (scripts), imágenes digitales, entre otros.

Las páginas web pueden estar almacenadas en un equipo local o en un servidor web remoto. El servidor web puede restringir el acceso únicamente a redes privadas, por ejemplo, en una intranet corporativa, o puede publicar las páginas en la World Wide Web. El acceso a las páginas web es realizado mediante una transferencia desde servidores, utilizando el protocolo de transferencia de hipertexto (HTTP).
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $contenido=ob_get_clean(); ?>
            <?php include "plantilla/plantillabase.php"; ?>