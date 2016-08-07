<?php
/**
 *   Main Sidebar for the Dashboard frame
 */
global $_rfConfig;
?>

<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered">
                <a href="https://wordimpress.com" target="_blank">
                    <img src="assets/img/wordimpress-icon-white.png" class="img-circle" width="60">
                </a>
            </p>
            <h5 class="centered"><?php echo $_rfConfig['company'];?></h5>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboards</span>
                </a>
                <ul class="sub">
                    <?php
                    $files = scandir( DASHWP_PATH . '/dashboards/');

                    foreach($files as $file) {
                        $name = basename($file, "-dashboard.php"); // $file is set to "index"

                        echo '<li><a href="' . $file . '">' . ucwords($name) . '</a></li>';
                    }
                    ?>

                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cogs"></i>
                    <span>Tools</span>
                </a>
                <ul class="sub">
                    <li><a  href="calendar.html">Calendar</a></li>
                    <li><a  href="gallery.html">Gallery</a></li>
                    <li><a  href="todo_list.html">Todo List</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<?php
