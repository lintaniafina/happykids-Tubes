<nav class="navbar navbar-expand navbar-light " style="border-bottom: 1px solid #000;margin-top: -11px;">
    <a class="sidebar-toggle text-dark mr-3"><i class="fa fa-bars"></i></a>
    <img src="https://pipmom.com/logo.png?1516554000" alt="" class="logos">
    <a class="navbar-brand textNav" href="beranda.php">Happy Kids</a>  
    <div class="navbar-collapse collapse" >
        <ul class="navbar-nav ml-auto">
            <div class="topnav">
              <div class="search-container">
                <form action="#">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
              </form>
          </div>
     </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="cart.php">Cart</a>
                    <a class="dropdown-item" href="login.php">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>