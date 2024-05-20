let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right = document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];

let pop_song_left1 = document.getElementById('pop_song_left1');
let pop_song_right1 = document.getElementById('pop_song_right1');
let pop_song1 = document.getElementsByClassName('pop_song1')[0];

let pop_song_left2 = document.getElementById('pop_song_left2');
let pop_song_right2 = document.getElementById('pop_song_right2');
let pop_song2= document.getElementsByClassName('pop_song2')[0];

const music = new Audio('Audio/111.mp3');
//music.play();

pop_song_right.addEventListener('click', ()=>{
    pop_song.scrollLeft +=200;
});
pop_song_left.addEventListener('click', ()=>{
    pop_song.scrollLeft -=200;
});

 pop_song_right1.addEventListener('click', ()=>{
     pop_song1.scrollLeft +=200;
 });
 pop_song_left1.addEventListener('click', ()=>{
     pop_song1.scrollLeft -=200;
 });

 pop_song_right2.addEventListener('click', ()=>{
     pop_song2.scrollLeft +=200;
 });
 pop_song_left2.addEventListener('click', ()=>{
     pop_song2.scrollLeft -=200;
 });


 
  const songs = [
      {
          id:1,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/1.mp3",
          poster:"image/1.jpg",
      },
      {
          id:2,
          songName:`Miolakolaka <br> 
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/2.mp3",
          poster:"image/2.jpg",
      },
      {
          id:3,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/3.mp3",
          poster:"image/3.jpg",
      },
      {
          id:4,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/4.mp3",
          poster:"image/4.jpg",
      },
      {
          id:5,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/5.mp3",
          poster:"image/5.jpg",
      },
      {
          id:6,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/6.mp3",
          poster:"image/6.jpg",
      },
      {
          id:7,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poste_audio:"audio/7.mp3",
          poster:"image/7.jpg",
      },
      {
          id:8,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/8.jpg",
      },
      {
          id:9,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/9.jpg",
      },
      {
          id:10,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/10.jpg",
      },
      {
          id:11,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/11.jpg",
      },
      {
          id:12,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/12.jpg",
      },
      {
          id:13,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/13.jpg",
      },
      {
          id:14,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/14.jpg",
      },
      {
          id:15,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/15.jpg",
      },
      {
          id:16,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/16.jpg",
      },
      {
          id:17,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/17.jpg",
      },
      {
          id:18,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/18.jpg",
      },
      {
          id:19,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/19.jpg",
      },
      {
          id:20,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/20.jpg",
      },
      {
          id:21,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/21.jpg",
      },
      {
          id:22,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/22.jpg",
      },
      {
          id:23,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/23.jpg",
      },
      {
          id:24,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/24.PNG",
      },
      {
          id:25,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/25.PNG",
      },
      {
          id:26,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/26.png",
      },
      {
          id:27,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/27.png",
      },
      {
          id:28,
          songName:`Miolakolaka <br>
          <div class="sous_titre">Pasteur Jacky</div>`,
          poster:"image/28.png",
      },
      {
        id:29,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/15.jpg",
    },
    {
        id:30,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/16.jpg",
    },
    {
        id:31,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/17.jpg",
    },
    {
        id:32,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/18.jpg",
    },
    {
        id:33,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/19.jpg",
    },
    {
        id:34,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/20.jpg",
    },
    {
        id:35,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/21.jpg",
    },
    {
        id:36,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/22.jpg",
    },
    {
        id:37,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/23.jpg",
    },
    {
        id:38,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/24.PNG",
    },
    {
        id:39,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/25.PNG",
    },
    {
        id:40,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/8.jpg",
    },
    {
        id:41,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/9.jpg",
    },
    {
        id:42,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/10.jpg",
    },
    {
        id:43,
        songName:`Miolakolaka <br>
        <div class="sous_titre">Pasteur Jacky</div>`,
        poster:"image/25.PNG",
    },
    
   ]

   Array.from(document.getElementsByClassName('songItem')).forEach((e,i)=>{
       e.getElementsByTagName('img')[0].src = songs[i].poster;
       e.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
   });
 
   let masterPlay = document.getElementById('masterPlay');

   masterPlay.addEventListener('click',()=>{
    if (music.paused || music.currentTime <= 0) {
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
    } else {
        music.pause();
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
    }
   });


   const makeAllBackground = () => {
    Array.from(document.getElementsByClassName('songItem')).forEach((el)=>{
        el.style.background= 'rgb(105,105,105,0)';
    })
   }
    const makeAllPlay = () => {
     Array.from(document.getElementsByClassName('playListPlay')).forEach((el)=>{
          el.classList.add('bi-play-circle-fill');
          el.classList.remove('bi-pause-circle-fill');
     })
    }

       let ind = 0;
    //    index++;
    //    console.log(index);
       let poster_music_play = document.getElementById('poster_music_play');
       let titre = document.getElementById('titre');

       Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
        e.addEventListener('click',(el)=>{
            ind = el.target.id;
             music.src=`audio/${ind}.mp3`;
             poster_music_play.src=`image/${ind}.jpg`;
             music.play();
             masterPlay.classList.remove('bi-play-fill');
             masterPlay.classList.add('bi-pause-fill');

             let songTitles = songs.filter((els)=>{
                return els.id == ind;
             });

             songTitles.forEach(elss=>{
                let {songName} = elss;
                titre.innerHTML = songName;
             });

             makeAllBackground();
             Array.from(document.getElementsByClassName('songItem'))[ind - 1].style.background= 'rgb(105,105,105,1)';
             makeAllPlay();
             el.target.classList.remove('bi-play-circle-fill');
             el.target.classList.add('bi-pause-circle-fill');
        })
       })

       let currentStrart = document.getElementById('currentStrart');
       let currentEnd = document.getElementById('currentEnd');
       let seek = document.getElementById('seek');
       let bar2 = document.getElementById('bar2');
       let dot = document.getElementsByClassName('dot')[0];

       music.addEventListener('timeupdate', ()=>{

        music_cur = music.currentTime;
        music_dur = music.duration;

        let min1 = Math.floor(music_dur/60);
        let sec1 = Math.floor(music_dur%60);

        if(sec1<10){
            sec1=`0${sec1}`;
        }
        currentEnd.innerText=`${min1}:${sec1}`;

        let min2 = Math.floor(music_cur/60);
        let sec2 = Math.floor(music_cur%60);
        if(sec2<10){
            sec2=`0${sec2}`;
        }
        currentStrart.innerText=`${min2}:${sec2}`;

        let progressBar = parseInt((music_cur / music_dur) * 100);
        seek.value = progressBar;
        let seekbar = seek.value;
        bar2.style.width = `${seekbar}%`;
        dot.style.left = `${seekbar}%`;
       });

       seek.addEventListener('change',()=>{
        music.currentTime = seek.value * music.duration / 100;
       });

       let vol_icon = document.getElementById('vol_icon'); 
       let vol = document.getElementById('vol'); 
       let vol_dot = document.getElementById('vol_dot'); 
       let vol_bar = document.getElementsByClassName('vol_bar'); 

       vol.addEventListener('change',()=>{
        if(vol.value == 0){
            vol_icon.classList.remove('bi-volume-up-fill');
            vol_icon.classList.remove('bi-volume-down-fill');
            vol_icon.classList.add('bi-volume-off-fill');
        }
        if(vol.value > 0){
            vol_icon.classList.remove('bi-volume-up-fill');
            vol_icon.classList.add('bi-volume-down-fill');
            vol_icon.classList.remove('bi-volume-off-fill');
        }
        if(vol.value > 50){
            vol_icon.classList.add('bi-volume-up-fill');
            vol_icon.classList.remove('bi-volume-down-fill');
            vol_icon.classList.remove('bi-volume-off-fill');
        }

        let vol_a = vol.value;
        vol_bar.style.width = `${vol_a}%`;
        vol_dot.style.left = `${vol_a}%`;

        music.volume = vol_a / 100;
       });

       let back = document.getElementById('back');
       let next = document.getElementById('next');

       back.addEventListener('click',()=>{
        ind -=1;
        if(ind < 1){
            ind = Array.from(document.getElementsByClassName('songItem')).length;
        }
        music.src=`audio/${ind}.mp3`;
             poster_music_play.src=`image/${ind}.jpg`;
             music.play();
             masterPlay.classList.remove('bi-play-fill');
             masterPlay.classList.add('bi-pause-fill');

             let songTitles = songs.filter((els)=>{
                return els.id == ind;
             });

             songTitles.forEach(elss=>{
                let {songName} = elss;
                titre.innerHTML = songName;
             });

             makeAllBackground();
             Array.from(document.getElementsByClassName('songItem'))[ind - 1].style.background= 'rgb(105,105,105,1)';
             makeAllPlay();
             el.target.classList.remove('bi-play-circle-fill');
             el.target.classList.add('bi-pause-circle-fill');
       });

       next.addEventListener('click',()=>{
        ind ++;
         if(ind > Array.from(document.getElementsByClassName('songItem')).length){
             ind = 1;
         }
        music.src=`audio/${ind}.mp3`;
             poster_music_play.src=`image/${ind}.jpg`;
             music.play();
             masterPlay.classList.remove('bi-play-fill');
             masterPlay.classList.add('bi-pause-fill');

             let songTitles = songs.filter((els)=>{
                return els.id == ind;
             });

             songTitles.forEach(elss=>{
                let {songName} = elss;
                titre.innerHTML = songName;
             });

             makeAllBackground();
             Array.from(document.getElementsByClassName('songItem'))[ind - 1].style.background= 'rgb(105,105,105,1)';
             makeAllPlay();
             el.target.classList.remove('bi-play-circle-fill');
             el.target.classList.add('bi-pause-circle-fill');
       });