<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social - Cuong</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ICONCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
</head>

<body>
    <nav>
        <div class="container">
            <a class="logo" href="index.php">
                <h2>CuongSocial</h2>    
            </a>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators inspirations">
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-picture">
                    <img src="assets/imagesupload/<?= $_SESSION['user']['image']?>" class="img-logo">
                    <div class="logout">
                        <a href="profile.php">Profile</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!----------------------------- MAIN ----------------------------->
    <main>
        <div class="container">
            <!-- ================ LEFT ================ -->
            <div class="left">
                <div class="profile">
                    <div class="profile-picture">
                        <img src="assets/imagesupload/<?= $_SESSION['user']['image']?>">
                    </div>
                    <div class="handle">
                        <h4><?= $_SESSION['user']['username'] ?></h4>
                        <p class="text-muted">
                            <?= $_SESSION['user']['email']?>
                        </p>
                    </div>
                </div>

                <!-- ============= SIDEBAR ============= -->

                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i>
                        </span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i>
                        </span>
                        <h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notification">
                        <span><i class="uil uil-bell"><small class="notification-count">4</small></i>
                        </span>
                        <h3>Notifications</h3>
                        <!-- ----------------------- NOTIFICATION POPUP ----------------------- -->
                        <div class="notification-popup" style="display: none;">
                            <div>
                                <div class="profile-picture">
                                    <img src="/images/profile-5.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Messi</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">5 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="/images/profile-7.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="/images/profile-9.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="/images/profile-4.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>MynaSang</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="menu-item" id="message-notification">
                        <span><i class="uil uil-envelope-alt"><small class="notification-count">9+</small></i>
                        </span>
                        <h3>Messages</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-bookmark"></i>
                        </span>
                        <h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-chart-line"></i>
                        </span>
                        <h3>Analytics</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i>
                        </span>
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-setting"></i>
                        </span>
                        <h3>Setting</h3>
                    </a>

                </div>
                <!-- ======================= END OF SIDEBAR ======================= -->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!-- ================ END OF LEFT ================ -->

            