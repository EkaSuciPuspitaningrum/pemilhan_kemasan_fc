<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#"
                    data-toggle="sidebar"
                    class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#"
                    data-toggle="search"
                    class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">
        <div class="row">
            <div class="buttons">
                <a href="<?php echo base_url('/login_pakar');?>"
                    class="btn btn-success">Login Pakar</a>
                <a href="<?php echo base_url('/login_admin');?>"
                    class="btn btn-warning">Login Admin</a>
            </div>
        </div>
    </ul>
</nav>
