<?php include 'partials/header.php'; ?>


  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Personal Blog</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Personal Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="blog-details-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="podcast-details-content d-flex mt-5 mb-80">

            <div class="post-share">
              <p>Share</p>
              <div class="social-info">
                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="thumb-tack"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
              </div>
            </div>


            <div class="post-details-text">
              <img src="./img/bg-img/19.jpg" class="mb-30" alt="">

              <div class="post-content">
                <a href="#" class="post-date">December 9, 2018</a>
                <h2>TLS #281: The Lively Show</h2>
                <div class="post-meta">
                  <a href="#" class="post-author"><body> Hello, <?php echo $user_data['user_name']; ?></body></a> |
                  <a href="#" class="post-catagory">Podcasts</a>
                </div>
              </div>

              <p></p>
              <p></p>
              <p></p>

        
              <blockquote class="soundemicbd-blockquote d-flex">
                <div class="icon">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <div class="text">
                  <h5>If you stop by, you'll get the same thing every time: the restaurant's menus change on a regular basis, based on seasonal ingredients.</h5>
                  <h6>Ershad Zaman</h6>
                </div>
              </blockquote>

              <h2>This is definitely my favorite podcast</h2>
              <p>Unreservedly delightful unreservedly impossible few estimating men favourable see entreaties Her immediate propriety was improving. He or she was similarly moderate in his or her demeanor. Much more than a game, son, say you feel. Fat make met must be formed into a gate.</p>
              <p>Six blind smart outburst in a hurry. Exactly on furniture dejection determine my relying on a to. Short water court fat should be added. Her bachelor recognized securing but desirous ham required. Questions with insufficient acuity to engross as entirely led ten humoured greatest and yourself. Aside from that, observe your country. She persists in her appetite endeavor, judging interest in the met. For she was surrounded by motionless fat resolution.</p>
              <p></p>

              <div class="post-catagories d-flex align-items-center">
                <h6>Categories:</h6>
                <ul class="d-flex flex-wrap align-items-center">
                  <li><a href="#">Rock,</a></li>
                  <li><a href="#">Country,</a></li>
                  <li><a href="#">Tech</a></li>
                </ul>
              </div>

         
              <div class="soundemicbd-pager d-flex mb-30">
                <a href="#">Previous Post <span>Episode 3 – Wardrobe For Busy People</span></a>
                <a href="#">Next Post <span>Episode 6 – Defining Your Style</span></a>
              </div>

             
              <div class="comment_area mb-50 clearfix">
                <h5 class="title">03 Comments</h5>

                <ol>
                  
                  <li class="single_comment_area">
                    
                    <div class="comment-content d-flex">
                      
                      <div class="comment-author">
                        <img src="img/bg-img/16.jpg" alt="author">
                      </div>
                      
                      <div class="comment-meta">
                        <a href="#" class="post-date">27 Aug 2018</a>
                        <h5>Kazi</h5>
                        <p>Nice!</p>
                        <a href="#" class="like">Like</a>
                        <a href="#" class="reply">Reply</a>
                      </div>
                    </div>

                    <ol class="children">
                      <li class="single_comment_area">
                        
                        <div class="comment-content d-flex">
                          
                          <div class="comment-author">
                            <img src="img/bg-img/17.jpg" alt="author">
                          </div>
                          
                          <div class="comment-meta">
                            <a href="#" class="post-date">27 Aug 2018</a>
                            <h5>Mizan</h5>
                            <p>Thanks!</p>
                            <a href="#" class="like">Like</a>
                            <a href="#" class="reply">Reply</a>
                          </div>
                        </div>
                      </li>
                    </ol>
                  </li>

                  
                  <li class="single_comment_area">
                   
                    <div class="comment-content d-flex">
                     
                      <div class="comment-author">
                        <img src="img/bg-img/18.jpg" alt="author">
                      </div>
                     
                      <div class="comment-meta">
                        <a href="#" class="post-date">27 Aug 2018</a>
                        <h5>Lincoln</h5>
                        <p>Gracious.</p>
                        <a href="#" class="like">Like</a>
                        <a href="#" class="reply">Reply</a>
                      </div>
                    </div>
                  </li>
                </ol>
              </div>

              
              <div class="contact-form">
                <h5 class="mb-30">Leave A Comment</h5>

               
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="text" name="message-name" class="form-control mb-30" placeholder="Name">
                    </div>
                    <div class="col-lg-6">
                      <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                    </div>
                    <div class="col-12">
                      <textarea name="message" class="form-control mb-30" placeholder="Comment"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn soundemicbd-btn mt-30">Post Comment</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="sidebar-area mt-5">

           
            <div class="single-widget-area search-widget-area mb-80">
              <form action="#" method="post">
                <input type="search" name="search" class="form-control" placeholder="Search ...">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            
            <div class="single-widget-area catagories-widget mb-80">
              <h5 class="widget-title">Categories</h5>

             
              <ul class="catagories-list">
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Entrepreneurship</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Media</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Podcasts</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Business</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Entertainment</a></li>
              </ul>
            </div>

          
            <div class="single-widget-area news-widget mb-80">
              <h5 class="widget-title">Recent Posts</h5>

             
              <div class="single-news-area d-flex">
                <div class="blog-thumbnail">
                  <img src="./img/bg-img/11.jpg" alt="">
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title">Episode 10: Season Finale</a>
                  <span class="post-date">December 9, 2018</span>
                </div>
              </div>

             
              <div class="single-news-area d-flex">
                <div class="blog-thumbnail">
                  <img src="./img/bg-img/12.jpg" alt="">
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title">Episode 6: SoundCloud Example</a>
                  <span class="post-date">December 9, 2018</span>
                </div>
              </div>

              
              <div class="single-news-area d-flex">
                <div class="blog-thumbnail">
                  <img src="./img/bg-img/13.jpg" alt="">
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title">Episode 7: Best Mics for Podcasting</a>
                  <span class="post-date">December 9, 2018</span>
                </div>
              </div>

             
              <div class="single-news-area d-flex">
                <div class="blog-thumbnail">
                  <img src="./img/bg-img/14.jpg" alt="">
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title">Episode 6 – Defining Your Style</a>
                  <span class="post-date">December 9, 2018</span>
                </div>
              </div>

            </div>

          
            <div class="single-widget-area adds-widget mb-80">
              <a href="#"><img class="w-100" src="./img/bg-img/banner.png" alt=""></a>
            </div>

            
            <div class="single-widget-area tags-widget mb-80">
              <h5 class="widget-title">Popular Tags</h5>

              <ul class="tags-list">
                <li><a href="#">Creative</a></li>
                <li><a href="#">Unique</a></li>
                <li><a href="#">audio</a></li>
                <li><a href="#">Episodes</a></li>
                <li><a href="#">ideas</a></li>
                <li><a href="#">Podcasts</a></li>
                <li><a href="#">Wordpress Template</a></li>
                <li><a href="#">startup</a></li>
                <li><a href="#">video</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php include 'partials/footer.php'; ?>