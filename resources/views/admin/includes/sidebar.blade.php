            <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>

                <ul class="nav nav-list">
                    <li class="active">
                        <a href="{{url('admin/home')}}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{url('admin/tips/showtips')}}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Tips By Ebele </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{url('admin/videos/showvideos')}}">
                            <i class="menu-icon fa fa-youtube"></i>
                            <span class="menu-text"> Training Videos </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                   
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>