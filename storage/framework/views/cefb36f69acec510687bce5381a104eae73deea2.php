<?php $menu = app('App\Http\Controllers\MenusController'); ?>
<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo route('home'); ?>" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">CRM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">CRMScool</span>
	</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesos Comunes</a>
                    <ul class="dropdown-menu" role="menu">
                    <?php echo $menu->armaMenu2(43); ?> 

                  </ul>
                </li>

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if(Auth::user()): ?>
                        Plantel: <?php echo Cache::remember('razon', 30, function(){
                                return DB::table('plantels as p')
                            ->join('empleados as e', 'e.plantel_id','=', 'p.id')
                            ->where('e.user_id', Auth::user()->id)->value('razon');
                            });; ?>

                        
                        
                        <?php endif; ?>
                    </a>
                </li>
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                        <?php if(Auth::guest()): ?>
                            Invitado
                        <?php else: ?>
                            Empleado: <?php echo Cache::remember('nombre', 30, function(){
                                return DB::table('empleados')->where('user_id', Auth::user()->id)->value('nombre'); 
                            });; ?>

                        <?php endif; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                                                <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <form method="POST">
                                    <a href=" <?php echo route('users.editPerfil', Auth::user()->id); ?> " class="btn btn-default btn-flat">Editar Usuario</a>
                                    <a href=" <?php echo url('logout'); ?> " class="btn btn-default btn-flat">Salir</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>



<!-- Left side column. contains the sidebar 