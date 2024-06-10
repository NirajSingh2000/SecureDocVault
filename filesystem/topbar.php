<style>
	.logo {
    margin: auto;
    font-size: 40px;
    background: white;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #000000b3;

}

nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  text-decoration: none;
  color: black;
  padding: 10px 20px;
  display: block;
}

nav ul li.dropdown:hover .submenu {
  display: block;
}

nav ul li.dropdown .submenu {
  display: none;
  position: absolute;
  background-color: #fff;
  border: 1px solid #ccc;
}

nav ul li.dropdown .submenu li {
  display: block;
}

nav ul li.dropdown .submenu li a {
  padding: 10px 20px;
}

.fa-spin {
  animation: spin 2s infinite linear;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

</style>

<nav class="navbar navbar-dark bg-success fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<img width="120" src="assets/img/logo1.png">
  		</div>
	  	<div class="col-md-2 mt-2 float-right">
    
	  		

        <ul>
        <a class="text-light" href="#"><?php echo $_SESSION['login_name'] ?></a>
    <li class="dropdown">
      <a class="text-light" href="#"><i class="fa fa-cog fa-spin"></i></a>
      <ul class="submenu">
        <li><a href="index.php?page=files"><i class="fa fa-file"></i> Files</a></li>
        <li><a href="#update-password"><i class="fa fa-key"></i>Change Password</a></li>
        <li><a href="ajax.php?action=logout"><i class="fa fa-power-off"></i>Logout</a></li>
      </ul>
    </li>
  </ul> 
	    </div>
    </div>
  </div>
  
</nav>