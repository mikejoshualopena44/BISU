<div class="profile-content">
          <!-- friends area-->
          <div class="profile-friends">
            <div class="friends-bar">
              <div class="label">Notifications</div> <br>
                <div class="friends-container">



                <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img" src="./images/profile-2.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b> accepted your friend request
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-3.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>John Doe</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-4.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Marry Oppong</b> and <b>283 Others</b> liked your post
                                    <small class="text-muted">4 Minutes Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-5.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Doris Y. Lartey</b> commented on a post you are tagged in
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-6.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keyley Jenner</b> commented on a post you are tagged in
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-7.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Jane Doe</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-2.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b> accepted your friend request
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-3.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>John Doe</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-4.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Marry Oppong</b> and <b>283 Others</b> liked your post
                                    <small class="text-muted">4 Minutes Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-4.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Marry Oppong</b> and <b>283 Others</b> liked your post
                                    <small class="text-muted">4 Minutes Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-5.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Doris Y. Lartey</b> commented on a post you are tagged in
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img id="notification-img"src="./images/profile-6.jpg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keyley Jenner</b> commented on a post you are tagged in
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            
                         </div>
                        <!--------------- END NOTIFICATION POPUP --------------->

                        <!--------------- END NOTIFICATION POPUP --------------->
                     <!--Problem: I may say add atleast 3 friends so it would fit in the desired size: SOLVED-->
                    <?php
 //                     if($friends)
  //                    {
  //                      foreach ($friends as $FRIEND_ROW) //It will display nth number of posts
   //                     {
    //                      include("P_user.php");
   // //                    }
    //                  }
                    ?>
                </div>
              </div>
          </div>


          <!--  Post area-->
            <div class="profile-posts">

              <!--post something-->
                <div class="posts-area">
                  <form method="post" enctype="multipart/form-data" action="#">
                    <textarea name="post" id=""  placeholder="What's on your mind, <?php echo $user_data['firstName']; ?>?"></textarea>
                    <input name="file" id="posts_browse" type="file" > 
                    <input id="posts_btn" type="submit" value="Post"> 
                    <br><br>
                  </form>
                </div><br>

              <!--profile- timeline-->
                <div class="timeline-bar">
                  <!--Your posts here!-->
                  <div class="timeline"> <!--refer to P_post.php for the content-->
                    <?php
                      if($posts)
                      {
                        foreach ($posts as $ROW) //It will display nth number of posts
                        {
                          $user = new User();
                          $ROW_user = $user->get_user($ROW['stud_ID']);

                          include("P_post.php");
                        }
                      }
                    ?>
                  </div>
              </div>
            </div>

            
          <div class="right">
            <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <i class="uil uil-edit"></i>
                    </div>
                    <!------- SEARCH BAR ------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!------- MESSAGES CATEGORY ------->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests (7)</h6>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-17.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Edem Quist</h5>
                            <p class="text-muted">Just woke up bruh</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-6.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Daniella Jackson</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-8.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Chantel Msiza</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-10.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Juliet Makarey</h5>
                            <p class="text-muted">Birtday Tomorrow</p>
                        </div>
                    </div>
          </div>
            
            

</div>