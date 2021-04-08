<title>Home</title>

<?php
include 'header.php';
?>

        <!-- LEFT-CONTAINER -->
        <div class="left-container container">
            <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
                <h2 class="titular">MENU BOX</h2>
                <ul class="menu-box-menu">
                    <li>
                        <a class="menu-box-tab" href="animals.php"><span class="icon fas fa-horse scnd-font-color"></span>animals<div class="menu-box-number">24</div></a>                            
                    </li>
                    <li>
                        <a class="menu-box-tab" href="brids.php"><span class="icon fas fa-dove scnd-font-color"></span>Brids<div class="menu-box-number">3</div></a>                            
                    </li>                
                    <li>
                        <a class="menu-box-tab" href="addanimal.php"><span class="icon fas fa-dog scnd-font-color"></span>Add animals<div class="menu-box-number">1</div></a>                            
                    </li>                
                </ul>
                <ul class="social horizontal-list block"> <!-- SOCIAL (LEFT-CONTAINER) -->
                    <li class="facebook"><p class="icon"><span class="zocial-facebook"></span></p><p class="number">248k</p></li>
                    <li class="twitter"><p class="icon"><span class="zocial-twitter"></span></p><p class="number">30k</p></li>
                    <li class="googleplus"><p class="icon"><span class="zocial-googleplus"></span></p><p class="number">124k</p></li>
                    <li class="mailbox"><p class="icon"><span class="fontawesome-envelope"></span></p><p class="number">89k</p></li>
                </ul>
            </div>
            

     
        </div>

        <!-- MIDDLE-CONTAINER -->
        <div class="middle-container container">
            <div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
                <a class="add-button" href="#28"><span class="icon fas fa-smile scnd-font-color"></span></a>
                <div class="profile-picture big-profile-picture clear">
                    <img width="230px" alt="Anne Hathaway picture" src="https://th.bing.com/th/id/Rf58eee9c37cd538a2d54c200e07f2434?rik=4JBlU0ZRWDhRpw&riu=http%3a%2f%2f2.bp.blogspot.com%2f-ijw0ReKuhVY%2fTybHBoQePQI%2fAAAAAAAABOY%2fjqtTCmg6E_8%2fs1600%2fCute%2bCat%2bFaces.jpg&ehk=jlszbgJng09dcRFHHHJi5ZvOxx32BndZbHlw83TIjNo%3d&risl=&pid=ImgRaw" >
                </div>
                <h1 class="user-name">PETS SHOP</h1>
                <div class="profile-description">
                    <p class="scnd-font-color">Best pet store ever</p>
                </div>
                <ul class="profile-options horizontal-list">
                    <li><a class="comments" href="#40"><p><span class="icon fontawesome-comment-alt scnd-font-color"></span>23</li></p></a>
                    <li><a class="views" href="#41"><p><span class="icon fontawesome-eye-open scnd-font-color"></span>841</li></p></a>
                    <li><a class="likes" href="#42"><p><span class="icon fontawesome-heart-empty scnd-font-color"></span>49</li></p></a>
                </ul>
            </div>
      


        </div>

        <!-- RIGHT-CONTAINER -->
        <div class="right-container container">
            <div class="join-newsletter block"> <!-- JOIN NEWSLETTER (RIGHT-CONTAINER) -->
                <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
                    <h2 class="titular">MENU BOX</h2>
                    <ul class="menu-box-menu">
                        <li>
                            <a class="menu-box-tab" href="Prodact.php"><span class="icon fas fa-store scnd-font-color"></span>Products<div class="menu-box-number">5</div></a>                            
                        </li>
                        <li>
                            <a class="menu-box-tab" href="salesdetaile.php"><span class="icon fas fa-info-circle scnd-font-color"></span>Salesdetails</a>
                        </li>
                        <li>
                            <a class="menu-box-tab" href="castumer.php"><sapn class="icon fas fa-people-carry scnd-font-color"></sapn>Customer<div class="menu-box-number">17</div></a>
                        </li>                        
                    </ul>
                </div>
                
            </div>
            </div> <!-- end calendar-month block --> 
 
        </div> <!-- end right-container -->

    </div> <!-- end main-container -->
<?php
include 'footer.php'
?>
</body>

</html>
<?php
if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location: login.php');
}
?>