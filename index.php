<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Anime</title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <!-- header section start -->
    <header>
        <a href="#" class="logo"><i class="fa-brands fa-golang"></i>Anime.</a>
        <nav class="navbar">
             <a href="index.php">home</a>
             <a href="#">List</a>
             <a href="#child">Updates</a>
             <a href="aboutus.php">About Us</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="aboutus.php" class="fas fa-heart"></a>
            <a href="signup.php" class="fas fa-user"></a>
        </div>
    </header>

<!-- home section start -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box second" style="background: url(img/img6.jpg) no-repeat;max-width: 100%;height: auto;">
                    <div class="content">
                        <h3>DEMON SLAYER</h3>
                         <p>Tanjiro Kamado, who strives to become a demon slayer<br> 
                            after his family was slaughtered and his younger sister, Nezuko,<br>
                            turned into a demon.</p>
                            <li style="color: yellow;">
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color:gray">Rating: (5.0/5.0)</i>
                              </li>
                              <br> 
                        <a href="demonslayer.php" class="btn">Watch Now!</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box " style="background: url(img/img7.jpeg) no-repeat;max-width: 100%;height: auto;">
                    <div class="content">
                        <h3>Kakegurui</h3>
                        <p>High roller Yumeko Jabami plans to clean house at Hyakkaou Private<br>
                        Academy, a school where students are evaluated solely on their<br>
                        gambling skills.</p>
                        <li style="color: yellow;">
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i style="color:gray">Rating: (5.0/5.0)</i>
                          </li>
                          <br> 
                        <a href="kakegurui.php" class="btn">Watch Now!</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box " style="background: url(img/img5.jpg) no-repeat;max-width: 100%;height: auto;">
                    <div class="content">
                        <h3>CODE GEASS</h3>
                         <p>It follows the exiled prince Lelouch vi Britannia, who obtains the<br> 
                            "power of absolute obedience" from a woman named C.C.<br> 
                            Using this supernatural power, known as Geass,</p>
                            <li style="color: yellow;">
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color:gray">Rating: (5.0/5.0)</i>
                              </li>
                              <br>     
                        <a href="#" class="btn">Watch Now!</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box " style="background: url(img/img3.jpg) no-repeat;max-width: 100%;height: auto;">
                    <div class="content" style="margin-top: 10%;">
                        <h3 style="color: black;">Your Lie In April</h3>
                        <p style="color: black;">The story follows a young pianist named Kosei Arima,  <br>
                            who loses the ability to perform the piano after his mother's death,<br>
                            and his experiences after he meets violinist Kaori Miyazono.</p>
                            <li style="color: yellow;">
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="text-warning fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i style="color:gray">Rating: (5.0/5.0)</i>
                              </li>
                              <br>    
                        <a href="#" class="btn">Watch Now!</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- anime section start -->
<section class="anime" id="anime">
    <h1 class="heading">Popular on Anime</h1>
    <div class="swiper anime-slider">
        <div class="swiper-wrapper">
          
            <div class="swiper-slide">
                <div class="box" style="background: url(img/naruto.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Naruto</h3>
                    <br>
                    <p>The story follows Naruto Uzumaki, a young ninja with a secret inside his body, who dreams of becoming the Hokage, the leader of his village and the strongest ninja in the world.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/onepunchman.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>One-Punch Man</h3>
                    <br>
                    <p>The story follows Saitama, a bald and seemingly average-looking guy who becomes a superhero for fun and gains the ability to easily defeat any opponent with just one punch.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                      
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/deathnote.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>DEATH NOTE</h3>
                    <br>
                    <p>The story follows high school student Light Yagami, who discovers a mysterious notebook named "Deathnote" that grants him the power to kill anyone whose name he writes in it.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                      
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/blackclover.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Black Clover</h3>
                    <br>
                    <p>The story follows Asta and Yuno, two orphans who are raised together in a church and share a dream of becoming the Wizard King, the strongest mage in the kingdom of Clover.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/jujutsukaisen.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Jujutsu Kaisen</h3>
                    <br>
                    <p>The story follows high school student Yuji Itadori, who joins a secret organization of jujutsu sorcerers to fight cursed spirits, supernatural creatures that feed on negative emotions.</p>
                    <p>The story follows a high school volleyball team,with the team's ace Shoyo "Little Giant" Hinata, Karasuno, as they strive to become the best volleyball team in Japan.(See more)</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/haikyuu.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Haikyu!!</h3>
                    <br>
                    <p>The story follows a high school volleyball team,with the team's ace Shoyo "Little Giant" Hinata, Karasuno, as they strive to become the best volleyball team in Japan.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/Kuroko1.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Kuroko's Basketball</h3>
                    <br>
                    <p>The story follows a high school basketball team to become the best in Japan. The team's secret weapon is Kuroko, a member of the legendary "Generation of Miracles"</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/MHA.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>My Hero Academia</h3>
                    <br>
                    <p>The series follows the story of Izuku Midoriya, a boy born without a Quirk who dreams of becoming a hero. One day, Izuku meets his hero, the number one hero All Might</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/drstone.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Dr. Stone</h3>
                    <br>
                    <p>The anime follows the story of a high school student named Senku Ishigami who is suddenly awakened after being trapped in stone for thousands of years.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/tokyorevengers.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Tokyo Revengers</h3>
                    <br>
                    <p>It follows the story of Takemichi Hanagaki, a depressed 26-year-old who travels back in time to his middle school days and gets a chance to rewrite his life.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/SAO.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>Sword Art Online</h3>
                    <br>
                    <p>The story follows the protagonist Kirito, a skilled player, as he tries to survive and clear the game with the help of other players he meets along the way.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="#" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/KenganAshura.jpg) no-repeat;"></div>
                <div class="content">
                    <h3>KENGAN ASHURA</h3>
                    <br>
                    <p>The story follows the protagonist, Tokita Ohma, a young fighter who is undefeated in the Kengan matches. He is hired by the Nogi Group, a powerful conglomerate.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="download.html" class="btn">Watch now</a>
                    <br>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/anohana.png) no-repeat;"></div>
                <div class="content">
                    <h3>Anohana</h3>
                    <br>
                    <p>The story follows the protagonist, Jinta Yadimu and a group of childhood friends who have grown apart since the death of one of their mutual friend, Menma.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="download.html" class="btn">Watch now</a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(img/IBO.png) no-repeat;"></div>
                <div class="content">
                    <h3>Gundam: IBO</h3>
                    <br>
                    <p>The story follows a group of child soldiers known as Tekkadan, who are hired by the Martian branch of the CGS to escort a young aristocrat named Kudelia Aina Bernstein.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                        <i style="color:gray">Rating: (4.5/5.0)</i>
                      </li>
                    <br>
                    <a href="download.html" class="btn">Watch now</a>
                </div>
            </div>



        </div>
    </div>
</section>

<!-- action section start -->

<section class="action" id="action">
    <h1 class="heading">Action Movies</h1>
    <div class="swiper action-slider">
        <div class="swiper-wrapper">
        
        
          
                <div class="swiper-slide">
                    <div class="box" style="background: url(img/Kuroko1.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Kuroko's Basketball</h3>
                        <br>
                    <p>Guided by the spirit demon within him, orphaned Naruto learns
                    to harness his powers as a ninja in this anime adventure series.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                      </li>
                      <p style="color:gray">Rating: (4.5/5.0)</p>
                    <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/ahirunosora.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>AHIRU NO SORA</h3>
                        <br>
                    <p>Guided by the spirit demon within him, orphaned Naruto learns
                    to harness his powers as a ninja in this anime adventure series.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                      </li>
                      <p style="color:gray">Rating: (4.5/5.0)</p>
                    <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/seraph.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Seraph of the End</h3>
                        <br>
                    <p>Guided by the spirit demon within him, orphaned Naruto learns
                    to harness his powers as a ninja in this anime adventure series.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                      </li>
                      <p style="color:gray">Rating: (4.5/5.0)</p>
                    <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/Kurokothemovie.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Kuroko's  Last Game</h3>
                        <br>
                        <p>Guided by the spirit demon within him, orphaned Naruto learns
                        to harness his powers as a ninja in this anime adventure series.</p>
                        <br>
                        <li style="color: yellow;">
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star-half"></i>
                          </li>
                          <p style="color:gray">Rating: (4.5/5.0)</p>
                        <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/fate.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Fate/Zero</h3>
                        <br>
                    <p>Guided by the spirit demon within him, orphaned Naruto learns
                    to harness his powers as a ninja in this anime adventure series.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                      </li>
                      <p style="color:gray">Rating: (4.5/5.0)</p>
                    <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/hellsing.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Hellsing Ultimate</h3>
                        <br>
                    <p>Guided by the spirit demon within him, orphaned Naruto learns
                    to harness his powers as a ninja in this anime adventure series.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                      </li>
                      <p style="color:gray">Rating: (4.5/5.0)</p>
                    <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/devilsline.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>DEVILS'LINE</h3>
                        <br>
                    <p>Guided by the spirit demon within him, orphaned Naruto learns
                    to harness his powers as a ninja in this anime adventure series.</p>
                    <br>
                    <li style="color: yellow;">
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star"></i>
                        <i class="text-warning fa-solid fa-star-half"></i>
                      </li>
                      <p style="color:gray">Rating: (4.5/5.0)</p>
                    <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box" style="background: url(img/legendofexorcism.jpg) no-repeat;"></div>
                    <div class="content">
                        <h3>Legend of Exorcism</h3>
                        <br>
                        <p>Guided by the spirit demon within him, orphaned Naruto learns
                        to harness his powers as a ninja in this anime adventure series.</p>
                        <br>
                        <li style="color: yellow;">
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star"></i>
                            <i class="text-warning fa-solid fa-star-half"></i>
                          </li>
                          <p style="color:gray">Rating: (4.5/5.0)</p>
                        <br>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>



</div>
</div>
</section>


<!-- copyright -->
<div class="copyright container">
    <a href="#" class="logo"><i class="fa-brands fa-golang"></i>Anime.</a>
    <p>&#169; Junmaxie. All rights reserved.</p>
    <div class="socail-links mt-3" style="font-size: xx-large;color: red;">
        <a href="https://twitter.com/" target="_blank" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100089673155790" target="_blank" alt="facebook" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://myaccount.google.com/" target="_blank" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/login" target="_blank" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>
</div>

                  

<!-- link swiper file -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custome js file link -->
    <script src="main.js"></script>
</body>
</html>
</html>