<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile card</title>

        <!--CSS-->
        <link rel="stylesheet" href="{{ asset('css/profilecard.css') }}">
        <!--Boxicom css-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container" id="wrapper">
            <div class="row align-items-end" id="top-row">
                <div class="col-12 col-md-4">
                    <div class="profile-card">
                        <div class="image">
                            <img src="{{ asset('images/ProfileCardPic.jpg') }}" alt="" class="profile-img">
                            <!--<img src="{{ asset('images/profile_pic.png') }}" alt="" class="profile-img">-->
                        </div>

                        <div class="text-data">
                            <span class="name">CodingLab</span>
                            <span class="job">Youtuber & Blogger</span>
                        </div>

                        <div class="media-buttons">
                            <a href="#" style="background: #4267b2" class="link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="#" style="background: #1da1f2" class="link">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="#" style="background: #e1306c" class="link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                            <a href="#" style="background: #ff0000" class="link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                        <div class="buttons">
                            <button class="button">Subcribe</button>
                            <button class="button">Message</button>
                        </div>
                        <div class="analytics">
                            <div class="data">
                                <i class='bx bx-heart'></i>
                                <span class="number">60k</span>
                            </div>
                            <div class="data">
                                <i class='bx bx-share'></i>
                                <span class="number">20k</span>
                            </div>
                            <div class="data">
                                <i class='bx bx-message-rounded-dots'></i>
                                <span class="number">35k</span>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-md-4">
                    <div class="profile-card">
                        <div class="image">
                            <img src="{{ asset('images/ProfileCardPic.jpg') }}" alt="" class="profile-img">
                            <!--<img src="{{ asset('images/profile_pic.png') }}" alt="" class="profile-img">-->
                        </div>

                        <div class="text-data">
                            <span class="name">CodingLab</span>
                            <span class="job">Youtuber & Blogger</span>
                        </div>

                        <div class="media-buttons">
                            <a href="#" style="background: #4267b2" class="link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="#" style="background: #1da1f2" class="link">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="#" style="background: #e1306c" class="link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                            <a href="#" style="background: #ff0000" class="link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                        <div class="buttons">
                            <button class="button">Subcribe</button>
                            <button class="button">Message</button>
                        </div>
                        <div class="analytics">
                            <div class="data">
                                <i class='bx bx-heart'></i>
                                <span class="number">60k</span>
                            </div>
                            <div class="data">
                                <i class='bx bx-share'></i>
                                <span class="number">20k</span>
                            </div>
                            <div class="data">
                                <i class='bx bx-message-rounded-dots'></i>
                                <span class="number">35k</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="profile-card">
                        <div class="image">
                            <img src="{{ asset('images/ProfileCardPic.jpg') }}" alt="" class="profile-img">
                            <!--<img src="{{ asset('images/profile_pic.png') }}" alt="" class="profile-img">-->
                        </div>

                        <div class="text-data">
                            <span class="name">CodingLab</span>
                            <span class="job">Youtuber & Blogger</span>
                        </div>

                        <div class="media-buttons">
                            <a href="#" style="background: #4267b2" class="link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="#" style="background: #1da1f2" class="link">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="#" style="background: #e1306c" class="link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                            <a href="#" style="background: #ff0000" class="link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                        <div class="buttons">
                            <button class="button">Subcribe</button>
                            <button class="button">Message</button>
                        </div>
                        <div class="analytics">
                            <div class="data">
                                <i class='bx bx-heart'></i>
                                <span class="number">60k</span>
                            </div>
                            <div class="data">
                                <i class='bx bx-share'></i>
                                <span class="number">20k</span>
                            </div>
                            <div class="data">
                                <i class='bx bx-message-rounded-dots'></i>
                                <span class="number">35k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>