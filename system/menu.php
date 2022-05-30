    <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <?php $pagina = basename($_SERVER['PHP_SELF']);?>

                        <li class="<?php if($pagina=='adiciona-curso.php'){echo 'active has-sub';} else if ($pagina=='consulta-cursos.php'){echo 'active has-sub';} else if ($pagina=='edita-curso.php'){echo 'active has-sub';}?>">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Cursos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="adiciona-curso.php">Adicionar</a>
                                </li>
                                <li>
                                    <a href="consulta-cursos.php">Editar</a>
                                </li>
                                <!--<li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>-->
                            </ul>
                        </li>
                         <li class="<?php if($pagina=='inscritos-cursos.php'){echo 'active has-sub';} else if ($pagina=='inscritos-no-curso.php'){echo 'active has-sub';}else if ($pagina=='edita-inscrito.php'){echo 'active has-sub';}?>">
                            <a href="inscritos-cursos.php">
                                <i class="fas fa-chart-bar"></i>Inscritos</a>

                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Newsletter</a>

                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="adiciona-inscrito-news.php">Adicionar inscrito</a>
                                </li>
                                <li>
                                    <a href="newsletter.php">Ver todos</a>
                                </li>
                                <!--<li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>-->
                            </ul>

                        </li>
                         <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>WhatsApp</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                	<li><a href="adiciona-inscrito-whats.php">Adicionar inscrito</a></li>
                                	<li><a href="lista-whatsapp.php">Ver todos</a></li></ul>
                                </ul>
                        </li>
                        <!--<li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>-->
                    </ul>
                </nav>
            </div>