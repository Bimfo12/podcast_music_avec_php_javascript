<?php ob_start()   ?>


<?php
          session_start();
          if(isset($_SESSION['id'])){ ?>


<link rel="stylesheet" href="bootstrap/podcast.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<?php
require_once 'deco.php';
?>
 
<div class="tout">
    <div class="menu_side">
      <h1>PlayList</h1>
      <div class="playlist">
        <h4 class="active"><span></span><i class="bi bi-music-note-list"></i>Playlist</h4>
        <h4><span></span><i class="bi bi-music-note-list"></i>Dernier à ecouté</h4>
        <h4><span></span><i class="bi bi-music-note-list"></i>Recommender</h4>
      </div>

      <div class="menu_song">
          <li class="songItem">
            <span>01</span>
              <img src="image/donald.jpg" alt="donald trump">
              <h5>Iny làlana iny <br>
            <div class="sous_titre">zafindrona</div>
          </h5>
        <i class="bi playListPlay bi-play-circle-fill " id="1"></i>
        </li>

        <li class="songItem">
          <span>02</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="2"></i>
        </li>
        
        <li class="songItem">
          <span>03</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="3"></i>
        </li>

        <li class="songItem">
          <span>04</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="4"></i>
        </li>

        <li class="songItem">
          <span>05</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="5"></i>
        </li>

        <li class="songItem">
          <span>06</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="6"></i>
        </li>

        <li class="songItem">
          <span>07</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="7"></i>
        </li>

        <li class="songItem">
          <span>08</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="8"></i>
        </li>

        <li class="songItem">
          <span>09</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="9"></i>
        </li>

        <li class="songItem">
          <span>10</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="10"></i>
        </li>

        <li class="songItem">
          <span>11</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="11"></i>
        </li>

        <li class="songItem">
          <span>12</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="12"></i>
        </li>

        <li class="songItem">
          <span>13</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="13"></i>
        </li>

        <li class="songItem">
          <span>14</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="14"></i>
        </li>

        <li class="songItem">
          <span>15</span>
              <img src="image/friman.jpg" alt="donald trump">
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
           <i class="bi playListPlay bi-play-circle-fill " id="15"></i>
        </li>


      </div>
    </div>


    <div class="song_side">

    <div class="content">
      <h1>Bienvenu dans PODCASTNAKAHY</h1>
         <p>bienvenu cher visiteur, si la contenu vous fait plesire velliez vous inscrire. Dans ce site nous essayon
        de faire votre devertire alors on vous dit amusez-vous.
       </p>
       </div>

       <div class="populaire_pod">
          <div class="h4">
             <h4>Populaire</h4>
               <div class="btn_s">
                <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                 <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                </div>
               </div>
            <div class="pop_song">
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="16"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5> 
             </li>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="17"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="18"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="19"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="20"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="21"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="22"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="23"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
 
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="25"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          </div>
       </div>

       <div class="populaire_pod">
          <div class="h4">
             <h4>Dernier ajouter</h4>
               <div class="btn_s">
               <i class="bi bi-arrow-left-short" id="pop_song_left1"></i>
                 <i class="bi bi-arrow-right-short" id="pop_song_right1"></i>
                </div>
               </div>
            <div class="pop_song pop_song1">

             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="26"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="27"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="28"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="29"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="30"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="31"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="32"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="33"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="34"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>

          </div>
       </div>
       <!-- ---------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------- -->
       <div class="populaire_pod">
          <div class="h4">
             <h4>Recommender</h4>
               <div class="btn_s">
               <i class="bi bi-arrow-left-short" id="pop_song_left2"></i>
                 <i class="bi bi-arrow-right-short" id="pop_song_right2"></i>
                </div>
               </div>
            <div class="pop_song pop_song2">

             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="35"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="36"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="37"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="38"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="39"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="40"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="40"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="42"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
             <li class="songItem">
               <div class="img_play">
                 <img src="image/friman.jpg" alt="donald trump">
                  <i class="bi playListPlay bi-play-circle-fill " id="43"></i>
                </div>
               <h5>Miolakolaka <br>
              <div class="sous_titre">Pasteur Jacky</div>
            </h5>
             </li>

          </div>
       </div>
       <!-- ---------------------------------------------------------------------------------------------------- -->
    </div>



    <div class="master_play">
      <img src="image/ajelila.jpg" alt="anjel" id="poster_music_play">
      <h5 id="titre">
        Lemajijy
        <div class="sous_titre">Loslobaka</div>
      </h5>
        <div class="icon">
           <i class="bi shuffle bi-music-note-beamed">next</i>
             <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
          <i class="bi bi-skip-end-fill" id="next"></i>
        <i class="bi bi-download" id="downlode_music"></i>
      </div>
       <span id="currentStrart">0:00</span>
          <div class="bar">
            <input type="range" id="seek"  min="0" max="100">
             <div class="bar2" id="bar2"></div>
            <div class="dot" ></div>
           </div>
         <span id="currentEnd">0:00</span>
      <div class="vol">
          <i class="bi bi-volume-up-fill" id="vol_icon"></i>
             <input type="range" min="0" max="100" id="vol">
              <div class="vol_bar" ></div>
           <div class="dot" id="vol_dot"></div>
      </div>
    </div>
</div>
<script src="bootstrap/accueil.js"></script>

<?php
          }
          else{
            header('connection');
          }
?>


<?php
    $content = ob_get_clean();
    require 'templete.php';

?>