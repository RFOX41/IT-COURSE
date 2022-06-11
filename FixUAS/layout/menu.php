<div class="menu-item">
    <div class="menu-content pb-2">
        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
    </div>
</div>
<?php if ($_SESSION['role'] == "admin"): ?>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-user.php' || $getUriSegment[2] == 'update-user.php' || $getUriSegment[2] == 'add-user.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master User</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-user.php' || $getUriSegment[2] == 'update-user.php' || $getUriSegment[2] == 'add-user.php') ? 'active' : '' ?>" href="../admin/manage-user.php">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List User</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-mentor.php' || $getUriSegment[2] == 'update-mentor.php' || $getUriSegment[2] == 'add-mentor.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Mentor</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-mentor.php' || $getUriSegment[2] == 'update-mentor.php' || $getUriSegment[2] == 'add-mentor.php') ? 'active' : '' ?>" href="../admin/manage-mentor.php">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Mentor</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-course.php' || $getUriSegment[2] == 'update-course.php' || $getUriSegment[2] == 'add-course.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Course</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-course.php' || $getUriSegment[2] == 'update-course.php' || $getUriSegment[2] == 'add-course.php') ? 'active' : '' ?>" href="../admin/manage-course.php">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Course</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-class.php' || $getUriSegment[2] == 'update-class.php' || $getUriSegment[2] == 'add-class.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Class</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a href="../admin/manage-class.php" class="menu-link <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-class.php' || $getUriSegment[2] == 'update-class.php' || $getUriSegment[2] == 'add-class.php') ? 'active' : '' ?>">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Class</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-content.php' || $getUriSegment[2] == 'update-content.php' || $getUriSegment[2] == 'add-content.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Content</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a href="../admin/manage-content.php" class="menu-link <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-content.php' || $getUriSegment[2] == 'update-content.php' || $getUriSegment[2] == 'add-content.php') ? 'active' : '' ?>">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Content</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Category</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-category.php' || $getUriSegment[2] == 'update-category.php' || $getUriSegment[2] == 'add-category.php') ? 'show' : '' ?> menu-sub-accordion">
            <div class="menu-item">
                <a href="../admin/manage-category.php" class="menu-link <?php echo $getUriSegment[1] == 'admin' && ($getUriSegment[2] == 'manage-category.php' || $getUriSegment[2] == 'update-category.php' || $getUriSegment[2] == 'add-category.php') ? 'active' : '' ?>">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Category</span>
                </a>
            </div>
        </div>
    </div>
<?php elseif($_SESSION['role'] == "mentor"): ?>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'mentor' && ($getUriSegment[2] == 'manage-class.php' || $getUriSegment[2] == 'update-class.php' || $getUriSegment[2] == 'add-class.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Class</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a href="../mentor/manage-class.php" class="menu-link <?php echo $getUriSegment[1] == 'mentor' && ($getUriSegment[2] == 'manage-class.php' || $getUriSegment[2] == 'update-class.php' || $getUriSegment[2] == 'add-class.php') ? 'active' : '' ?>">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Class</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'mentor' && ($getUriSegment[2] == 'manage-course.php' || $getUriSegment[2] == 'update-course.php' || $getUriSegment[2] == 'add-course.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Course</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link <?php echo $getUriSegment[1] == 'mentor' && ($getUriSegment[2] == 'manage-course.php' || $getUriSegment[2] == 'update-course.php' || $getUriSegment[2] == 'add-course.php') ? 'active' : '' ?>" href="../mentor/manage-course.php">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Course</span>
                </a>
            </div>
        </div>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item <?php echo $getUriSegment[1] == 'mentor' && ($getUriSegment[2] == 'manage-content.php' || $getUriSegment[2] == 'update-content.php' || $getUriSegment[2] == 'add-content.php') ? 'show' : '' ?> menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Master Content</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a href="../mentor/manage-content.php" class="menu-link <?php echo $getUriSegment[1] == 'mentor' && ($getUriSegment[2] == 'manage-content.php' || $getUriSegment[2] == 'update-content.php' || $getUriSegment[2] == 'add-content.php') ? 'active' : '' ?>">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Content</span>
                </a>
            </div>
        </div>
    </div>
<?php else: ?>
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-title">Course</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link" href="../../demo1/dist/apps/customers/getting-started.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">List Course</span>
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>