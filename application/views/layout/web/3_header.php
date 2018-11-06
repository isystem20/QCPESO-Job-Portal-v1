     
        <header class="header <?php if(!empty($transparentwrapper)) { echo 'header-transparent';} ?>">
            <div class="container-fluid">
                <!-- Brand-->
                <div class="inner-header">
                    <a class="inner-brand" href="#">
                        <img src="<?php echo base_url();?>themes/ltr/vertical-static/assets/images/auth/qcpeso.png" width="50">
                        Quezon City PESO
                    </a>
                </div>
           
                <div class="inner-navigation collapse">
                    <div class="inner-nav onepage-nav">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>"><span class="menu-item-span">Home</span></a></li>
                            <li><a href="<?php echo base_url(); ?>web/AboutController/about"><span class="menu-item-span">About</span></a></li>
                            <li><a href="<?php echo base_url(); ?>web/Servicescontroller/services"><span class="menu-item-span">Services</span></a></li>
                            <li><a href="<?php echo base_url(); ?>web/browsejobcontroller/browsejob"><span class="menu-item-span">Browse Jobs</span></a></li>
                            <li><a href="<?php echo base_url(); ?>web/newscontroller/news"><span class="menu-item-span">News</span></a></li>                        
                            <li><a href="<?php echo base_url(); ?>web/LoginController/Login"><span class="menu-item-span">Login</span></a></li>
                            <li><a href="<?php echo base_url(); ?>web/RegisterController/Register"><span class="menu-item-span">Register</span></a></li>
                        </ul>
                    </div>
                </div>

 
            </div>
        </header>