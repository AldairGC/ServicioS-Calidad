<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--<img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
          <i class="fa fa-file-o" aria-hidden="true"></i>
        </div>
        <div class="info">
          <p><?php echo $_SESSION['Nombre']. " ". $_SESSION['Apellido_Pa']; ?></p>
          <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-o" aria-hidden="true"></i>
            <span>Tramites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-tramites.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-tramites.php"><i class="fa fa-plus-circle"></i>Agregar Tramite</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            <span>Cotizaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-car" aria-hidden="true"></i>
                <span>Autos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-cotizaautos.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                 <li><a href="cotizaciones-autos.php"><i class="fa fa-plus-circle"></i>Agregar Cotizacion</a></li>
--> 
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <span>Vida</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-cotizavida.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                <li><a href="cotizaciones-vida.php"><i class="fa fa-plus-circle"></i>Agregar Cotizacion</a></li>
-->
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <span>Da&ntilde;o</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-cotizadano.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                <li><a href="cotizaciones-vida.php"><i class="fa fa-plus-circle"></i>Agregar Cotizacion</a></li>
-->
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-ambulance" aria-hidden="true"></i>
                <span>Gastos Medicos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-cotizagastos.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--               <li><a href="cotizaciones-gastos.php"><i class="fa fa-plus-circle"></i>Agregar Cotizacion</a></li>
-->
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-badge" aria-hidden="true"></i>
            <span>Polizas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-car" aria-hidden="true"></i>
                <span>Autos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-poliza-auto.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                <li><a href="crear-poliza-auto.php"><i class="fa fa-plus-circle"></i>Agregar Poliza</a></li>
-->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-car" aria-hidden="true"></i>
                <span>Da&ntilde;os</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-poliza-dano.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                <li><a href="crear-poliza-dano.php"><i class="fa fa-plus-circle"></i>Agregar Poliza</a></li>
-->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <span>Vida</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-poliza-vida.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                <li><a href="crear-poliza-vida.php"><i class="fa fa-plus-circle"></i>Agregar Poliza</a></li>
-->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-ambulance" aria-hidden="true"></i>
                <span>Gastos Medicos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-poliza-gmm.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
<!--                <li><a href="crear-poliza-gmm.php"><i class="fa fa-plus-circle"></i>Agregar Poliza</a></li>
-->
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-frown-o" aria-hidden="true"></i>
            <span>Siniestros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-invitados.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-invitado.php"><i class="fa fa-plus-circle"></i>Agregar Siniestros</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book-o" aria-hidden="true"></i>
            <span>Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-registrados.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
            <li><a href="crear-registro.php"><i class="fa fa-plus-circle"></i>Agregar Citas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o" aria-hidden="true"></i>
                <span>Tramites</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="busqueda-tramites.php"><i class="fa fa-list-ul"></i>General</a></li>
              </ul>
             </li>
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <span>Cotizaciones</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="coau.php"><i class="fa fa-list-ul"></i>Autos</a></li>
                <li><a href="covi.php"><i class="fa fa-list-ul"></i>Vida</a></li>
                <li><a href="cogm.php"><i class="fa fa-list-ul"></i>Gastos Medicos</a></li>
                <li><a href="coda.php"><i class="fa fa-list-ul"></i>Da&ntilde;os</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-id-badge" aria-hidden="true"></i>
                <span>Polizas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <span>Endosos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-frown-o" aria-hidden="true"></i>
                <span>Siniestros</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-child" aria-hidden="true"></i>
                <span>Asegurados</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder-o" aria-hidden="true"></i>
                <span>Documentos Asegurados</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-download" aria-hidden="true"></i>
                <span>Descarga de Reportes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-evento.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
              </ul>
-->            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span>Utilerias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if ($_SESSION['Tipo'] == 'administrador') { ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-male" aria-hidden="true"></i>
                <span>Personal</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-per.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i>Agregar Personal</a></li>
              </ul>
            </li>

            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-male" aria-hidden="true"></i>
                <span>Ramos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-ramos.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                <li><a href="crear-ramos.php"><i class="fa fa-plus-circle"></i>Agregar Ramos</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-male" aria-hidden="true"></i>
                <span>Sub - Ramos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-subramos.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                <li><a href="crear-subramos.php"><i class="fa fa-plus-circle"></i>Agregar Ramos</a></li>
              </ul>
            </li>

            <?php } ?>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                <span>Clientes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-clientes.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                <li><a href="crear-clientes.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
              </ul>
            </li>






            <li class="treeview">
              <a href="#">
                <i class="fa fa-building-o" aria-hidden="true"></i>
                <span>Aseguradoras</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <span>Directorio</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                    <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i>Agregar Directorio</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <span>Aseguradoras</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="lista-aseguradora.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                    <li><a href="crear-aseguradora.php"><i class="fa fa-plus-circle"></i>Agregar Aseguradoras</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <span>Sitios Web</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                    <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i>Agregar Sitios Web</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-percent" aria-hidden="true"></i>
                    <span>Cotizadores</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                    <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i>Agregar Cotizadores</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span>Alarmas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-au.php"><i class="fa fa-list-ul"></i>P. Autos</a></li>
                <li><a href="lista-da.php"><i class="fa fa-list-ul"></i>P. Da&ntilde;os</a></li>
                <li><a href="lista-vi.php"><i class="fa fa-list-ul"></i>P. Vida</a></li>
                <li><a href="lista-gm.php"><i class="fa fa-list-ul"></i>P. Gastos</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                <span>Depuracion</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="lista-admin.php"><i class="fa fa-list-ul"></i>Ver Todos</a></li>
                <li><a href="crear-admin.php"><i class="fa fa-plus-circle"></i>Agregar</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->