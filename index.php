<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<?php include 'partials/header.php'; ?>


  <section class="welcome-area">

    <div class="welcome-slides owl-carousel">


      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">

              <div class="welcome-text">
              
                <h2 data-animation="fadeInUp" data-delay="100ms"><body> Hello, <?php echo $user_data['user_name']; ?></body></h2>
                <div class="welcome-btn-group">
                  <a href="#" class="btn soundemicbd-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with Apple Music</a>
                  <a href="#" class="btn soundemicbd-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with Spotify</a>
                </div>
              </div>

              <div class="soundemicbd-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="soundemicbd-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="soundemicbd-music-content">
                  <span class="music-published-date">December 9, 2018</span>
                  <h2>EP101</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>
       
                  <div class="soundemicbd-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/sample-audio.mp3">
                    </audio>
                  </div>
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
         
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Listen Now</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn soundemicbd-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with Apple Music</a>
                  <a href="#" class="btn soundemicbd-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with Spotify</a>
                </div>
              </div>
    
              <div class="soundemicbd-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="soundemicbd-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="soundemicbd-music-content">
                  <span class="music-published-date">December 8, 2018</span>
                  <h2>EP202</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>
      
                  <div class="soundemicbd-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/sample-audio.mp3">
                    </audio>
                  </div>
     
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">

              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Discover Today</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn soundemicbd-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with iTunes</a>
                  <a href="#" class="btn soundemicbd-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a>
                </div>
              </div>
    
              <div class="soundemicbd-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="soundemicbd-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="soundemicbd-music-content">
                  <span class="music-published-date">December 7, 2018</span>
                  <h2>EP201</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>
       
                  <div class="soundemicbd-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/sample-audio.mp3">
                    </audio>
                  </div>

                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  
  <section class="soundemicbd-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest Podcasts</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>

 
    <div class="container">
      <div class="soundemicbd-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
          <button class="btn active" data-filter="*">All</button>
          <button class="btn" data-filter=".entre">Entrepreneurship</button>
          <button class="btn" data-filter=".media">Media</button>
          <button class="btn" data-filter=".tech">Tech</button>
          <button class="btn" data-filter=".tutor">Podcasts</button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row soundemicbd-portfolio">

        <div class="col-12 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
     
          <div class="soundemicbd-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="soundemicbd-music-thumbnail">
              <img src="./img/bg-img/5.jpg" alt="">
            </div>
            <div class="soundemicbd-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>EP201</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
        
              <div class="soundemicbd-music-player">
                <audio preload="auto" controls>
                  <source src="audio/sample-audio.mp3">
                </audio>
              </div>
             
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-6 single_gallery_item entre tutor wow fadeInUp" data-wow-delay="0.2s">

          <div class="soundemicbd-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="soundemicbd-music-thumbnail">
              <img src="./img/bg-img/6.jpg" alt="">
            </div>
            <div class="soundemicbd-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>EP202</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>

              <div class="soundemicbd-music-player">
                <audio preload="auto" controls>
                  <source src="audio/sample-audio.mp3">
                </audio>
              </div>
    
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
       
          <div class="soundemicbd-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="soundemicbd-music-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
            <div class="soundemicbd-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>EP203</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
       
              <div class="soundemicbd-music-player">
                <audio preload="auto" controls>
                  <source src="audio/sample-audio.mp3">
                </audio>
              </div>
    
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
  
          <div class="soundemicbd-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="soundemicbd-music-thumbnail">
              <img src="./img/bg-img/8.jpg" alt="">
            </div>
            <div class="soundemicbd-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>EP204</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
     
              <div class="soundemicbd-music-player">
                <audio preload="auto" controls>
                  <source src="audio/sample-audio.mp3">
                </audio>
              </div>
        
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

  
        <div class="col-12 col-md-6 single_gallery_item tech tutor wow fadeInUp" data-wow-delay="0.2s">
       
          <div class="soundemicbd-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="soundemicbd-music-thumbnail">
              <img src="./img/bg-img/9.jpg" alt="">
            </div>
            <div class="soundemicbd-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>EP205</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>

              <div class="soundemicbd-music-player">
                <audio preload="auto" controls>
                  <source src="audio/sample-audio.mp3">
                </audio>
              </div>

              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 single_gallery_item tech wow fadeInUp" data-wow-delay="0.2s">
    
          <div class="soundemicbd-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="soundemicbd-music-thumbnail">
              <img src="./img/bg-img/10.jpg" alt="">
            </div>
            <div class="soundemicbd-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>EP206</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Podcasts</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
    
              <div class="soundemicbd-music-player">
                <audio preload="auto" controls>
                  <source src="audio/sample-audio.mp3">
                </audio>
              </div>

              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn soundemicbd-btn mt-70">Load More</a>
        </div>
      </div>
    </div>
  </section>
  


  <section class="featured-guests-area">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Featured Guests</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/25.jpg" alt="">
            <div class="guest-info">
              <h5>Ershad Zaman</h5>
              <span>Guitar</span>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/26.jpg" alt="">
            <div class="guest-info">
              <h5>Mikael Åkerfeldt</h5>
              <span>Vocal</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/27.jpg" alt="">
            <div class="guest-info">
              <h5>Chris Cornell</h5>
              <span>Songwriter</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php include 'partials/footer.php'; ?>
