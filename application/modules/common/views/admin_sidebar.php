<?php 
$r_class = $this->router->fetch_class();
$r_method = $this->router->fetch_method();
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" style="width: 50px;" src="<?php echo base_url(); ?>admin_assets/img/profile_small.jpg"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"><?php echo get_session('admin_username'); ?></span>
                        <span class="text-muted text-xs block"> 
                            MAGA Admin
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    MAGA
                </div>
            </li>

            <li class="<?php if($r_class == 'admin' && $r_method == 'index' || $r_method == 'dashboard') { ?> active <?php } ?>">
                <a href="<?php echo admin_url(); ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a> 
            </li>
            
        </ul>
    </div>
</nav>