<?php
require 'functions.php';
check_login();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = editProfile($_POST);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $_POST['textpostnew'];
}

?>

<?php include('partials/header.php') ?>

            <!-- ================ MIDDLE ================ -->
            <div class="middle">
                <div class="stories">
                    <div class="story">
                        <div class="profile-picture">
                            <img src="/images/profile-1.jpg" alt="">
                        </div>
                        <p class="nameStory">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="/images/profile-10.jpg" alt="">
                        </div>
                        <p class="nameStory">James Me</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="/images/profile-11.jpg" alt="">
                        </div>
                        <p class="nameStory">Wini Sang</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="/images/profile-12.jpg" alt="">
                        </div>
                        <p class="nameStory">Jane Dos</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="/images/profile-13.jpg" alt="">
                        </div>
                        <p class="nameStory">Tina Ponoco</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="/images/profile-14.jpg" alt="">
                        </div>
                        <p class="nameStory">Daniel Bale</p>
                    </div>

                </div>
                <!-- ================ END STORIES ================ -->

                <!-- ================ CREATE POST ================ -->
                <form action="" class="create-post">
                    <div class="profile-picture">
                        <img src="/images/profile-1.jpg" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind, Diana?" id="create-post">
                    <!-- <input type="submit" value="Submit" class="btn btn-primary"> -->
                </form>

                <!-- ================ FEEDS ================ -->
                <div class="feeds">
                    <div class="feed">
                        <!-- ================ FEED 1 ================ -->
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="/images/profile-10.jpg" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTED AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="/images/feed-1.jpg" alt="">
                        </div>

                        <div class="action-button">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="/images/profile-10.jpg" alt=""></span>
                            <span><img src="/images/profile-15.jpg" alt=""></span>
                            <span><img src="/images/profile-13.jpg" alt=""></span>
                            <p>Like by <b>Ernest Aritn</b> and <b>2, 330 others</b></p>
                        </div>

                        <div class="caption">
                            <p>
                                <b>Lana Rose</b> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">"View all 277 comments"</div>
                    </div>
                    <div class="feed">
                        <!-- ================ FEED 2 ================ -->
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="/images/profile-11.jpg" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Yang chi</h3>
                                    <small>Dubai, 20 MINUTED AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="/images/feed-2.jpg" alt="">
                        </div>

                        <div class="action-button">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="/images/profile-15.jpg" alt=""></span>
                            <span><img src="/images/profile-16.jpg" alt=""></span>
                            <span><img src="/images/profile-13.jpg" alt=""></span>
                            <p>Like by <b>Ernest Aritn</b> and <b>2, 130 others</b></p>
                        </div>

                        <div class="caption">
                            <p>
                                <b>Lana Rose</b> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">"View all 177 comments"</div>
                    </div>
                    <!-- ================ END FEEDS ================ -->
                </div>


            </div>
            <!-- ================ RIGHT ================ -->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Message</h4><i class="uil uil-edit"></i>
                    </div>
                    <!-- -------------- SEARCH BAR -------------- -->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!-- -------------- MESSAGES CATEGORY -------------- -->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <!-- -------------- MESSAGES CATEGORY -------------- -->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="/images/profile-21.jpg" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Edem Quist</h5>
                            <div class="text-bold">Just woke uo bruh</div>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="/images/profile-11.jpg" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Edem Quist</h5>
                            <div class="text-muted">Hello men</div>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="/images/profile-8.jpg" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Edem Quist</h5>
                            <div class="text-muted">Coding website cake?</div>
                        </div>
                    </div>
                </div>
                <!-- -------------- END MESSAGES -------------- -->

                <!-- -------------- FRIEND REQUESTS -------------- -->
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="./images/profile-4.jpg" alt="">
                            </div>
                            <div>
                                <h5>Hajta Bintu</h5>
                                <div class="text-muted">
                                    8 mutual friend
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================ END RIGHT ================ -->

        </main>
        <!-- ================ MODAL POST HIDDEN ================== -->
        <div class="wrapper ">
            <div class="modal">
                <form action="" class="post-modal" method="POST" enctype="multipart/form-data">
                    <div class="input-box">
                        <div class="tweet-area">
                            <input type="text" class="placeholder" name="textpostnew" value="<?= $_SESSION['posts']['textpost']?>">
                            <input type="hidden" name="id_user_post" value="<?=$_SESSION['user']['id']?>">
                            <div class="input editable" contenteditable="true" spellcheck="false"></div>
                            <div class="input readonly" contenteditable="true" spellcheck="false"></div>
                        </div>
                        <div class="privacy">
                            <i class="fas fa-globe-asia"></i>
                            <span>Everyone can reply</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="icons">
                            <li><i class="uil uil-capture"></i></li>
                            <li>
                                <i class="far fa-file-image"><input type="file" class="hidden" name="image-post"></i>
                            </li>
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li><i class="far fa-grin"></i></li>
                            <li><i class="far fa-user"></i></li>
                        </ul>
                        <div class="content">
                            <span class="counter">100</span>
                            <input type="submit" value="Tweet" class="btn btn-primary btn-post">
                        </div>
                    </div>
                </form>
            </div>
        </div>

<?php include 'partials/footer.php' ?>