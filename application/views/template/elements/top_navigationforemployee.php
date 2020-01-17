<!--Header-->
<header id="topnav" class="navbar navbar-black navbar-fixed-top" role="banner">

    <div class="logo-area" style="width: 700px;">
                <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
                    <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                        <span class="icon-bg">
                            <i class="ti ti-menu"></i>
                        </span>
                    </a>
                </span>

                <div style="color: lightgreen;font-size: 12pt;padding-top: 15px;">
                    <img src="assets/img/prime_logo.png" style="width: 20px; height: 20px;">
                    <?php echo $this->session->company_name;?> 
                    <span style="color: #FFF;"> - HRIS</span>
                </div>

    </div><!-- logo-area -->

    <ul class="nav navbar-nav toolbar pull-right">

        <li class="toolbar-icon-bg hidden-xs right_employee_create" style="display:" id="icon_new_employee">
            <a href="#" class="btn_new"  title="New Employee"><span class="icon-bg"><i class="fa fa-user-plus"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs right_leaveentitlement_view" style="display:" id="icon_entitlement">
            <a href="#" class="edit_entitlement" title="Leave Entitlement"><span class="icon-bg"><i class="fa fa-file-text"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs right_applyleave_view" id="icon_apply_leave">
            <a href="#" class="apply_leave" title="Apply Leave"><span class="icon-bg"><i class="fa fa-sign-out"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs right_rates_view" style="display:" id="icon_rates">
            <a href="#" class="edit_duties" title="Rates and Duties"><span class="icon-bg"><i class="fa fa-area-chart"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs right_memorandum_view" id="edit_memorandum">
            <a href="#" class="edit_memorandum" title="Memorandum"><span class="icon-bg"><i class="glyphicon glyphicon-list-alt"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs right_commendation_view" id="edit_commendation">
            <a href="#" class="edit_commendation" title="Commendation"><span class="icon-bg"><i class="glyphicon glyphicon-thumbs-up"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs right_seminar_view" id="edit_seminar">
            <a href="#" class="edit_seminar" title="Seminars and Training"><span class="icon-bg"><i class="fa fa-suitcase"></i></span></i></a>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-md hidden-lg hidden-sm">
            <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                <img  src="assets/img/Menu.svg" alt="" />
            </a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="#" class="btn_new"  title="New Employee">Add Employee</i></a></li>
                <li><a href="#" class="edit_entitlement" title="Leave Entitlement">Entitlement</i></a></li>
                <li><a href="#" class="apply_leave" title="Apply Leave">Apply Leave</i></a></li>
                <li><a href="#" class="edit_duties" title="Rates and Duties">Rates and Duties</a></li>
                <li><a href="#" class="edit_memorandum" title="Memorandum">Memorandum</i></a></li>
                <li><a href="#" class="edit_commendation" title="Commendation">Commendation</i></a></li>
                <li><a href="#" class="edit_seminar" title="Seminars and Training">Seminars</a></li>

            </ul>
        </li>

        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                <img class="img-circle" src="<?php echo $this->session->user_photo; ?>" alt="" />
            </a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="Profile"><i class="fa fa-user"></i><span>Profile</span></a></li>
                <li><a href="login/transaction/logout"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
            </ul>
        </li>

    </ul>

</header><!--Header-->
