<style>
    body{
         background-image:url("images/blurred-background.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
    h1,h2,h3,h4,h5,p,span,lable,li,a,ul,div{
        color:white;
        }
    .panel{
        background-color:rgba(0,0,0,0.4);
    }
    .table-striped>tbody>tr:nth-of-type(odd) {
    background-color:rgba(0,0,0,0.4);
}
.table-striped>tbody>tr:hover {
    background-color: black;
    /* color: #fff; */
}
</style>
<div class="brand clearfix">
	<a href="dashboard.php" class="navbar-brand" ><B>BLOODBANK MANAGEMENT SYSTEM</B></a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
