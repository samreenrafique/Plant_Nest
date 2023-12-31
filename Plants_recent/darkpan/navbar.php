<?php
session_start();



if (!isset($_SESSION['adm_id'])) {
    header("Location: signin.php");
    exit();
}


?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Dashboard</h3>
                </a>
                <?php
                        if (isset($_SESSION['adm_name'])) {
                            $adm_name = $_SESSION['adm_name'];
                        ?>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="upload/admin/<?php echo $_SESSION['adm_img'] ?>" alt="" style="width: 40px; height: 40px; object-fit: cover; " >
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $adm_name ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add Category.php" class="dropdown-item">Add Category</a>
                            <a href="Show Category.php" class="dropdown-item">Show Category</a>
                            
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add Product.php" class="dropdown-item">Add Product</a>
                            <a href="Show Product.php" class="dropdown-item">Show Product</a>
                            
                        </div>
                    </div>

                    <!-- z -->

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Services</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add Service.php" class="dropdown-item">Add Service</a>
                            <a href="Show Service.php" class="dropdown-item">Show Service</a>
                            
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>About</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add About.php" class="dropdown-item">Add About</a>
                            <a href="Show About.php" class="dropdown-item">Show About</a>
                            
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Details</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add Details.php" class="dropdown-item">Add Details</a>
                            <a href="Show Details.php" class="dropdown-item">Show Details</a>
                            
                        </div>
                    </div>

                    <a href="Show Contact.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Contact</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>FAQ</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Add Faq.php" class="dropdown-item">Add Faq</a>
                            <a href="Show Faq.php" class="dropdown-item">Show Faq</a>
                            
                        </div>
                    </div>
                    <a href="Show Feed.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>FeedBack</a>

                    <a href="Show Review.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Review</a>

                    <a href="Show Order.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i> Order</a>

                    <a href="Show OrderStat.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Order Status</a>

                    <a href="Show User.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>User</a>
                    
        <?php } else {
                        ?>
                        <a href="signin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Log In</a>
                        <?php } ?>
                </div>
            </nav>
        </div>

<div class="content">

<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <?php
                        if (isset($_SESSION['adm_name'])) {
                            $adm_name = $_SESSION['adm_name'];
                        ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="upload/admin/<?php echo $_SESSION['adm_img'] ?>" alt="" style="width: 40px; height: 40px; object-fit: cover; ">
                            <span class="d-none d-lg-inline-flex"><?php echo $adm_name ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="View Profile.php?id=<?php echo $_SESSION['adm_id'] ?>" class="dropdown-item">My Profile</a>
                            <a href="Edit Adminprofile.php?id=<?php echo $_SESSION['adm_id'] ?>" class="dropdown-item">Edit Profile</a>
                            <a href="Admin Changepass.php?id=<?php echo $_SESSION['adm_id'] ?>" class="dropdown-item">Change Password</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
                        <?php } ?>
            </nav>

            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>