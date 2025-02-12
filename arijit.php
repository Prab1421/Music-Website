<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prabhat Singh">
    <meta name="description" content="Music website">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Music Website</title>
    <style>
        header .song_side::before {
            background: url('arjit_bg.png');
        }
    </style>
</head>
<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"> <span></span> <i class="bi bi-music-note-beamed"></i> Playlist </h4>
                <h4> <span></span> <i class="bi bi-music-note-beamed"></i> Last Listening </h4>
                <h4> <span></span> <i class="bi bi-music-note-beamed"></i> Recommended </h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="img_01">
                    <h5>
                        On My Way <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="img_02">
                    <h5>
                        Alan Walker - Fade <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/3.jpg" alt="img_04">
                    <h5>
                        Cartoon - On & On <br> <div class="subtitle">Daniel Levi</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/4.jpg" alt="img_04">
                    <h5>
                        On My Way <br> <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/5.jpg" alt="img_05">
                    <h5>
                        Ertugrul Gazi <br> <div class = "subtitle">Ertugrul</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/6.jpg" alt="img_06">
                    <h5>
                        Electronic Music <br> <div class = "subtitle">Electro</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/7.jpg" alt="img_07">
                    <h5>
                        Agar Tum Sath Ho <br> <div class = "subtitle">Tamashaa</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="img/7.jpg" alt="img_08">
                    <h5>
                        Suna Hai <br> <div class = "subtitle">Neha Kakker</div>
                    </h5>
                    <i class="bi bi-play-circle-fill playListPlay" id="8"></i>
                </li>
            </div>
        </div>
        <div class="song_side"> 
            <nav>
                <ul>
                    <li> Discover <span></span> </li>
                    <li> MY LIBRARY </li>
                    <li> RADIO </li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music....">
                    <div class="search_results">
                        <!-- <a href="#" class="card">
                            <img src="img/1.jpg" alt="01">
                            <div class="content">
                                On My Way <br> <div class="subtitle">Alan Walker</div>
                            </div>
                        </a> -->
                        
                    </div>
                </div>
                <div class="user">
                    <img src="img/KDS CODER.png" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Arijit Singh</h1>
                <p>Khairiyat Pucho Kabhi to Kaifiyat Pucho Tumhare Bin Deewane Ka <br> Kya Haal Hai, Tumahari Tasveer ke Hawale Mausam Kai Guzaare!</p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/9.jpg" alt="img_02">
                            <i class="bi bi-play-circle-fill playListPlay" id="9"></i>
                        </div>
                        <h5>
                            Dilber<br> <div class = "subtitle">Satyameva Jayate</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/10.jpg" alt="img_10">
                            <i class="bi bi-play-circle-fill playListPlay" id="10"></i>
                        </div>
                        <h5>
                            Duniya <br> <div class = "subtitle">Luka Chuppi</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/11.jpg" alt="img_11">
                            <i class="bi bi-play-circle-fill playListPlay" id="11"></i>
                        </div>
                        <h5>
                            Lagdi Lahore Di <br> <div class = "subtitle">Street Dancer 3D</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/12.jpg" alt="img_02">
                            <i class="bi bi-play-circle-fill playListPlay" id="12"></i>
                        </div>
                        <h5>
                            Putt Jatt Da <br> <div class = "subtitle">Putt Jatt Da</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/13.jpg" alt="img_02">
                            <i class="bi bi-play-circle-fill playListPlay" id="13"></i>
                        </div>
                        <h5>
                            Baarishein <br> <div class = "subtitle">Atif Aslam</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/14.jpg" alt="img_02">
                            <i class="bi bi-play-circle-fill playListPlay" id="14"></i>
                        </div>
                        <h5>
                            Vaaste <br> <div class = "subtitle">Dhvani Bhanushali</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/15.jpg" alt="img_15">
                            <i class="bi bi-play-circle-fill playListPlay" id="15"></i>
                        </div>
                        <h5>
                            Lut Gaye <br> <div class = "subtitle">Jubin Nautiyal</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artist</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item artists_bx">
                    <li>
                        <img src="img/arjit.jpg" alt="Arijit">
                    </li>
                </div>
            </div>
        </div>
        <div class="master_play">
            <div class="wave" id="wave"> 
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/arijit/1.jpg" alt="img_20" id="poster_master_play">
            <h5 id="title">
                Naina Ashq Na Ho
                <div class="subtitle">Holiday - Arijit </div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <a href="" id="download_music" download><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </div>
            <span id="currentStart">
                0:00
            </span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>


    <script src="arijit.js"></script>
</body>
</html>
