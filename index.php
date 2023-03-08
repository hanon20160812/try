<?php
$user_type = 'admin';

//載入連練
require_once './conn_obj.php';

if (!isset($_GET['Search_text']) or $_GET['Search_text'] == '') {
    $_GET['Search_text'] = '%';
}

//$GET['Search_text'];
//$sql = "SELECT * FROM `students`";
//SELECT * FROM `students` WHERE `cName` LIKE '%林%' OR `cAddr` LIKE '%林%';
$sql = "SELECT * FROM `product` WHERE `p_name` LIKE  '%{$_GET['Search_text']}%'";

//查詢資料
$result = $db_link->query($sql);
//print_r($result);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>暗黑破壞神747　｜　作品集</title>
    <link href="./_res/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./_res/style.css">

    <link rel="icon" href="./_img/LOGO.ico" type="image/x-icon" />
</head>



<style>
.btn-pink {
    background-color: #FF6F88;
    color: #FFFFFF;
}

.btn-pink2 {
    background-color: #FDACA9;
    color: #FFFFFF;
}

.connection_info {
    color: #5E718D;
}
</style>



<body>



    <header>

        <!-- NAV START -->
        <?php include_once './nav.php'; ?>
        <!-- NAV END -->

        <!-- Banner START -->

        <div id="bannerBG" class="mb-5">
            <div class="bannerPP">
                <!-- <img class="img-fluid justify-content-center" src="./_img/banner_PP.png" alt="PP" width="600px"> -->
            </div>
        </div>
        <!-- Banner END -->

    </header>


    <div class="container-fluid text-center mb-4">

        <!-- 故事 START -->
        <article id="Skill" class="mb-5 ">

            <!-- 標題 -->
            <div>
                <img class="img-fluid" src="./_img/title_Story.png" alt="title_Stickers" width="400px" height="auto">
            </div>
            <!-- 標題 -->
            <br>
            <div class="d-flex justify-content-center">

                <div class="skill_box">
                    <ul>

                        <li>
                            <h4>平面設計</h4>
                        </li>
                        <li>貼圖</li>
                        <li>攝影</li>
                        <li>網頁視覺</li>
                        <li>廣告Banner</li>
                    </ul>
                </div>

                <div class="skill_box">
                    <ul>
                        <li>
                            <h4>網頁工具</h4>
                        </li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Bootstrap</li>
                        <li>Mysql</li>
                    </ul>
                </div>

                <div class="skill_box">
                    <ul>
                        <li>
                            <h4>影音剪輯</h4>
                        </li>
                        <li>剪輯</li>
                        <li>轉場</li>
                        <li>文字特效</li>
                    </ul>
                </div>

            </div><!-- 技能組 -->
            <br>
            <div>
                <img class="p-2" src="./_img/icon_ps.png" alt="ps">
                <img class="p-2" src="./_img/icon_ai.png" alt="ai">
                <img class="p-2" src="./_img/icon_figma.png" alt="figma">
                <img class="p-2" src="./_img/icon_pr.png" alt="pr">
                <img class="p-2" src="./_img/icon_ae.png" alt="ae">
            </div>

        </article><!-- 故事 END -->


        <!-- 貼圖 START -->
        <article id="Stickers" class="mb-5">

            <div>
                <img class="img-fluid" src="./_img/title_Stickers.png" alt="title_Stickers" width="400px" height="auto">
            </div>

            <div class="stickersBG">



            </div>

        </article><!-- 貼圖 END -->



        <!-- 作品 START -->

        <article id="Portfolio" class="mb-5">

            <!-- 底色 -->
            <div class="Portfolio_BG">

                <!-- 標題 -->
                <div>
                    <img class="img-fluid" src="./_img/title_Portfolio.png" alt="title_Portfolio" width="400px"
                        height="auto">
                </div>

                <!-- 標題 -->

                <div class="container mt-5" style="position: relative;">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist"
                        style="position: absolute; top: -100px; right:30px ">
                        <li class="nav-item" role="presentation">
                            <button class="Portfolio_tag" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="false">

                                <img src="./_img/icon_design.svg" onmouseover="this.src='./_img/icon_design2.svg';"
                                    onmouseout="this.src='./_img/icon_design.svg';">

                            </button>

                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="Portfolio_tag" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">

                                <img src="./_img/icon_img.svg" onmouseover="this.src='./_img/icon_img2.svg';"
                                    onmouseout="this.src='./_img/icon_img.svg';">
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="Portfolio_tag active" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="true">

                                <img src="./_img/icon_movie.svg" onmouseover="this.src='./_img/icon_movie2.svg';"
                                    onmouseout="this.src='./_img/icon_movie.svg';">

                            </button>
                        </li>
                    </ul>

                    <div class="p-5 tab-content Portfolio_frame" id="pills-tabContent">

                        <!-- 三小圓 -->
                        <div class="d-flex round">
                            <div class="mx-1 Portfolio_round" style="background-color:#FBAA80;"></div>
                            <div class="mx-1 Portfolio_round" style="background-color:#FCD5BE;"></div>
                            <div class="mx-1 Portfolio_round" style="background-color:#FEE6D9;"></div>
                        </div>
                        <!-- 三小圓 -->

                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                            tabindex="0">
                            <h2>平面設計</h2>
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div><!-- 平面設計 -->

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <h2>攝影作品</h2>
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                            </div>
                        </div><!-- 攝影作品 -->

                        <div class="tab-pane fade show active" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <h2>影片剪輯</h2>
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/VyvHreTWfIU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>

                                    <div class="col">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/UAP6feepzUE"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>

                                    <div class="col">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/vwVtNvdZmmY"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/XyWcIyd_jDk"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>

                                    <div class="col">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/vwVtNvdZmmY"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>

                                    <div class="col">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/ZZh3pDt6S2w"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>


                            </div><!-- row -->

                        </div><!-- 影片剪輯 -->

                    </div><!-- 標籤分頁 -->

                </div>


            </div><!-- 底色 -->


        </article>
        <!-- 作品 END -->



        <!-- 初見始衷 START -->
        <article id="OriginalGoal" class="mb-5">


            <!-- 標題 -->
            <div>
                <img class="img-fluid mb-3" src="./_img/title_OriginalGoal.png" alt="title_Stickers" width="400px"
                    height="auto">
            </div><!-- 標題 -->

            <!-- 內文 -->
            <div class="mb-5">
                <h3> 穿梭黑夜的蝶影，幻化為你我心中的意義。 </h3>
                <br>
                <p>設計不僅應該讓人們感到舒適和方便，而且還應該讓人們感到愉悅和美好。</p>
                <p>我擅長使用 Photoshop、Figma 等設計工具，以及 HTML、CSS 等前端技術來實現網站的設計和開發。</p>

                <p>在我設計的網站中，我注重色彩、排版和對比度等元素，並致力於打造一個視覺上令人愉悅的使用體驗。</p>
                <p>同時，我也會考慮使用者習慣和行為等因素，以確保網站的易用性和可操作性。</p>
            </div>


            <!-- 聯絡資訊 -->
            <div class="row justify-content-between">
                <div class="col-md-6 col-sm-12" style="padding-left: 300px;">
                    <div>
                        <img class="img-fluid" src="./_img/people.png" alt="title_Stickers" width="200px" height="auto">
                        <h1 style="color:#FF6F88">波音涓</h1>
                        <div class="mb-3" style="border: 2px solid #DDB318;border-radius: 10px;"></div>
                    </div>
                    <!-- 按鈕組 -->
                    <div>
                        <button class="btn btn-pink mx-3">歡迎合作</button>
                        <button class="btn btn-pink2 mx-3">客製小物</button>
                    </div>

                    <!-- 信箱/FB/IG -->
                    <div>
                        <p class="connection_info mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-envelope-paper-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1.133l.941.502A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765L2 3.133V2Zm0 2.267-.47.25A1 1 0 0 0 1 5.4v.817l1 .6v-2.55Zm1 3.15 3.75 2.25L8 8.917l1.25.75L13 7.417V2a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v5.417Zm11-.6 1-.6V5.4a1 1 0 0 0-.53-.882L14 4.267v2.55ZM8 2.982C9.664 1.309 13.825 4.236 8 8 2.175 4.236 6.336 1.31 8 2.982Zm7 4.401-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734Z" />
                            </svg>
                            hanon20160812@gmail.com
                        </p>
                        <p class="connection_info mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            暗黑破壞神747
                        </p>
                        <p class="connection_info mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                            judy840812
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <img class="img-fluid" src="./_img/pr07_2.png" alt="title_Stickers" width="400px" height="auto">
                </div>
            </div>



        </article><!-- 初見始衷 END -->




    </div><!-- container -->

    <footer>
        <?php include_once './footer.php'; ?>
    </footer>
    <script src="./_res/bootstrap.bundle.min.js"></script>
</body>

</html>