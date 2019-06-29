<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Menu</li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-puzzle"></i> Test</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            My records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Upcoming Tests</a>
                    </li>
                </ul>
            </li>
            <?php
if ($_SESSION['user_type'] == 'admin') {
    ?>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-cursor"></i> Backups</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/export_feedback_pr">
                            Practical Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/export_feedback_th">
                            Theory Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/export_counter_th">
                            Theory Counter Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/export_counter_pr">
                            Practical Counter Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/export_reviews">
                            Reviews</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-bell"></i> Add Users</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/add_admin">
                            Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/add_faculty">
                            Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Ctrl_admin/add_students">
                            Students</a>
                    </li>
                </ul>
            </li>
<?php 
}
?>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-bell"></i> Feedback</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="ctrl_feedback">
                            Theory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ctrl_feedback_pr">
                            Practical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review">
                            Review</a>
                    </li>
                </ul>
            </li>

            <li class="divider"></li>

        </ul>
    </nav>
</div>