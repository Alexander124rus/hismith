<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="menu">
                        
                        <li>
                            <a href="<?=base_url();?>index.php/admin">Общая информация</a>
                        </li>
                        <li>
                            <a href="#" class="side">Авторы<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url();?>index.php/admin/add/author/">Добавить</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>index.php/admin/pagelist/author/">Редактировать</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#" class="side-menu">Книги<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url();?>index.php/admin/add/books/">Добавить</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>index.php/admin/pagelist/books">Редактировать</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>