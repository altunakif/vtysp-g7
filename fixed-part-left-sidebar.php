        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/dr-ismail-iseri.jpg" alt="user" /> 
                             <!-- this is blinking heartbit-->
                            <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <?php $data = $head->userInfo();  ?>
                    <div class="profile-text" data-userid="<?php echo $data[0]["userId"] ?>"> 
                            <h5 style="text-transform: uppercase;">
                            <?php 
                                echo $data[0]["userName"]." ".$data[0]["userSurname"];
                            ?>                                
                            </h5>
                            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                             <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                            <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

                        <div class="dropdown-menu animated flipInY">
                        <!-- text--> 
                        <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->  
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li class="nav-devider"></li>
                        <li class="nav-small-cap">MENÜ</li>

                        <li class="nav-small-cap">GENEL</li>
                        <li> 
                            <a class="waves-effect waves-dark" href="index" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Proje Listesi</span>
                            </a>
                        </li>                        
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-add-project" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Proje Ekle</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-add-task" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Görev Ekle</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-user-list" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Kullanıcı Listesi</span>
                            </a>
                        </li>                        
                        <li class="nav-small-cap">SİZE ÖZEL</li>
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-your-project" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Projeleriniz</span>
                            </a>
                        </li>                        
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-your-task" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Görevleriniz</span>
                            </a>
                        </li>    
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-your-employees-task" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Çalışanlarınızın Görevleri</span>
                            </a>
                        </li>                                              
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-your-employees" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Çalışanlarınız</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">OMUPYS HAKKINDA</li>
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-team" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Ekip</span>
                            </a>
                        </li>  
                        <li> 
                            <a class="waves-effect waves-dark" href="pages-change-log" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i><span class="hide-menu">Changelog</span>
                            </a>
                        </li>                                                                                                                                       
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>