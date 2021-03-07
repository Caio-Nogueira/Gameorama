<?php function draw_search_results() { ?>
    <section class="container g-0 mx-auto mt-sm-4 col-lg-7">
        <header class="p-4 p-lg-5 mb-3 bg-white rounded" style="height:fit-content">
            <h3 class="mb-3 color-orange">Results for</h3>
            <h2 class="fw-bold">"Leg"</h2>
        </header>

        <section class="pill-navigation mb-1">
            <ul class="nav nav-pills mb-1 justify-content-space-between bg-white rounded" id="pills-tab"
                role="tablist">
                <li class="nav-item col" role="presentation">
                    <button class="nav-link active w-100" id="pills-posts-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-posts" type="button" role="tab" aria-controls="pills-posts"
                        aria-selected="false">Posts</button>
                </li>
                <li class="nav-item col" role="presentation">
                    <button class="nav-link w-100" id="pills-topics-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-topics" type="button" role="tab" aria-controls="pills-topics"
                        aria-selected="false">Topics</button>
                </li>
                <li class="nav-item col" role="presentation">
                    <button class="nav-link w-100" id="pills-users-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-users" type="button" role="tab" aria-controls="pills-users"
                        aria-selected="false">Users</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-posts" role="tabpanel" aria-labelledby="pills-posts-tab">
                    <div class="news-card mb-3 p-4 rounded bg-white">
                        <div class="row news-card-header">
                            <div class="post-voting col-1 d-flex justify-content-center">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <span class="upvote material-icons-round d-flex justify-content-center">north</span>
                                    </li>
                                    <li>
                                        <span class="score d-flex justify-content-center" id="score">23.0k</span>
                                    </li>
                                    <li>
                                        <span class="downvote material-icons-round d-flex justify-content-center">south</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="post-topics">Topics: <a href="#">Gaming Gadgets</a>; <a href="#">Razer</a></h6>
                                <small class="post-user">Posted by <a href="./profile.php">kaka34</a></small>
                                <h4 class="post-title-smaller">Razer apresenta webcam Kiyo Pro</h4>
                            </div>
                        </div>
                        <div class="news-card-body">
                            <img class="rounded img-fluid img-responsive mx-auto my-3 d-block"
                                style="max-height: 650px" src="https://via.placeholder.com/3840x2160">
                            <p class="card-text truncate-multiple">A Razer revelou a webcam Kiyo Pro. Com uma abrangência que vai para lá do mundo do gaming, tem no Sensor de Luz Adaptativo a sua principal novidade. Vivemos uma época marcada pelo teletrabalho. E isto veio o despertar um problema há muito dormente: a fraca qualidade das câmaras nos nossos computadores portáteis.</p>
                        </div>
                        <div class="row mt-4 news-card-options">
                            <div class="col d-flex justify-content-center blue-hover">
                                <span class="material-icons-outlined align-middle">mode_comment</span>
                                <span class="d-none d-md-block"> 321</span>
                            </div>
                            <div class="col d-flex justify-content-center blue-hover">
                                <span class="material-icons-outlined align-middle">bookmark_add</span>
                                <span class="d-none d-md-block"> Bookmark</span>
                            </div>
                            <div class="col d-flex justify-content-center red-hover">
                                <span class="material-icons-outlined align-middle">outlined_flag</span>
                                <span class="d-none d-md-block"> Report<span>
                            </div>
                        </div>
                    </div> <!-- /.news-card -->
                </div> <!-- /#pills-posts -->
                <div class="tab-pane fade" id="pills-topics" role="tabpanel" aria-labelledby="pills-topics-tab">
                    <section class="bg-white rounded py-2">
                        <div class="row m-3 p-2 rounded bg-white">
                            <div class="row align-items-center">
                                <img src="../assets/L_icon.svg" alt="" class = "col-2 flex-shrink-0 rounded-circle" style="width:90px;height:auto;">
                                <div class="col-md-10 col-8 d-flex">
                                    <div>
                                        <h4>League of Legends</h4>
                                        <p class="h6 fw-normal">1,5M Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3 p-2 rounded bg-white">
                            <div class="row align-items-center">
                                <img src="../assets/L_icon.svg" alt="" class = "col-2 flex-shrink-0 rounded-circle" style="width:90px;height:auto;">
                                <div class="col-md-10 col-8 d-flex">
                                    <div>
                                        <h4>Legends of Runeterra</h4>
                                        <p class="h6 fw-normal">300k Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3 p-2 rounded bg-white">
                            <div class="row align-items-center">
                                <img src="../assets/L_icon.svg" alt="" class = "col-2 flex-shrink-0 rounded-circle" style="width:90px;height:auto;">
                                <div class="col-md-10 col-8 d-flex">
                                    <div>
                                        <h4>Lego Starwars</h4>
                                        <p class="h6 fw-normal">135k Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> <!-- /#pills-topics -->
                <div class="tab-pane fade" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
                    <section class="bg-white rounded py-2">
                        <div class="row m-3 p-2 rounded bg-white ">
                            <div class="row align-items-center">
                                <img src="../assets/avatar4.png" alt="" class = "col-2 flex-shrink-0 rounded-circle" style="width:90px;height:auto;">
                                <div class="col justify-content-between">
                                    <div>
                                        <h4>Legalt_of_Rivia</h4>
                                        <div class="row">
                                            <h6 class="col-12 col-sm-6">135k Followers</h6>
                                            <h6 class="col-12 col-sm-6">5,758,783 Aura Score</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-3 p-2 rounded bg-white">
                            <div class="row align-items-center">
                                <img src="../assets/avatar1.png" alt="" class = "col-2 flex-shrink-0 rounded-circle" style="width:90px;height:auto;">
                                <div class="col justify-content-between">
                                    <div>
                                        <h4>LegendBoy7454</h4>
                                        <div class="row">
                                            <h6 class="col-12 col-sm-6">15,8k Followers</h6>
                                            <h6 class="col-12 col-sm-6">1,151,320 Aura Score</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> <!-- /#pills-users -->
            </div>
        </section>
    </section>
<?php } ?>
