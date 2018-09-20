$(document).ready(function(){


// For the new posts feed from pn.ispirt blog

  const feedWrap = document.getElementById("feed-wrap");
const baseUrl = "https://pn.ispirt.in";
const apiUrl = `${baseUrl}/wp-json/wp/v2/posts?per_page=3`;
let posts = [];
const months = [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "June",
  "July",
  "Aug",
  "Sept",
  "Oct",
  "Nov",
  "Dec"
];

// let app = new Vue({
//   el: '#feed-wrap',
//   data: {
//           posts:posts
//         }
//     });

getData()
.then(data=>{
  posts = data;
  let app = new Vue({
  el: '#feed-wrap',
  data: {
          posts:posts
        }
    });
})
.catch(err=>{
  //do something on error
});




function requestData(url) {
  return new Promise((resolve, reject) => {
    fetch(url)
      .then(result => {
        return result.json();
      })
      .then(data => {
        resolve(data);
      });
  });
}


function getData()
{
  let data = [];
  return new Promise((resolve,reject)=>{
      requestData(apiUrl).then(posts => {
          //console.log(posts);
        if(posts.length==0)
          {
            reject('No Posts Found');
          }
        posts.forEach(post => {
          let temp={};
          let newDate = new Date(post.date);
          let post_url = `${baseUrl}/wp-json/wp/v2/media/${post.featured_media}`;
          let formatedDate= `${months[newDate.getMonth()]} ${newDate.getDate()}, ${newDate.getFullYear()}`;
          //console.log(post);
          if(post.featured_media==0)
          {
            temp['id'] = post.id;
            temp['link']=post.link;
            temp['imgSrc'] = `background-image:url(http://via.placeholder.com/350x150)`;//change the image link here
            temp['title']=post.title.rendered;
            temp['excerpt']=post.excerpt.rendered;
            temp['date'] = formatedDate
            data.unshift(temp);

          }
          else
          {
                requestData(post_url).then(imageDetails => {
                    temp['id'] = post.id;
                    temp['link']=post.link;
                    let imageUrl = imageDetails.media_details.sizes.medium.source_url;
                    temp['imgSrc']=`background-image:url(${imageUrl});`;
                    temp['title']=post.title.rendered;
                    temp['excerpt']=post.excerpt.rendered;
                    temp['date'] = formatedDate;

                    data.unshift(temp);
            });
          }


        });

        resolve(data);
      });
  });
}


// For new videos feed on youtube channel of iSPIRT

const apiKey = 'AIzaSyBhYPcOKooCFM_x0P7bpeHLRdIwFu8-U00'; //change the api key
const channelId='UCsOXbdxeADMkQ22eWOIcylg';
const base_url= "https://www.googleapis.com/youtube/v3/";
const youtubeWrap= document.getElementById('youtube-wrap');
// query for channel
const channelUrl = `${base_url}channels?key=${apiKey}&id=${channelId}&part=contentDetails`;

getYoutubeData()
.then(data=>{
   let youtubeSection = new Vue({
     el:'#youtube-wrap',
     data:{
       yPosts:data
     }
   })
})
.catch(err=>{
  //do something on error
});

function getYoutubeData()
{
  let youtubeVideosData = [];
  return new Promise((resolve,reject)=>{
      requestData(channelUrl)
      .then(data=>{
      let playListId=data.items[0].contentDetails.relatedPlaylists.uploads;
      const playlistUrl = `${base_url}playlistItems?key=${apiKey}&part=snippet&playlistId=${playListId}&maxResults=4`;
    requestData(playlistUrl)
    .then(playLists=>{
          if(playLists.length===0)
            {
              reject("No Videos Found");
            }
      playLists.items.forEach(playList=>{
            let temp={};
            let videoLink = `https://www.youtube.com/watch?v=${playList.snippet.resourceId.videoId}`;
        temp['youtubeImgSrc'] = `background-image: url('${playList.snippet.thumbnails.high.url}');`;
        temp['youtubeVideoLink'] = videoLink;
        temp['youtubeTitle'] = playList.snippet.title

        youtubeVideosData.push(temp);
      });
      resolve(youtubeVideosData);
    });

});

  });
}


// Menu open-close JS

$("#hamburger").click(function(event) {
   $("#top-navigation").toggleClass("open");
   $("body").toggleClass("no-scroll");
 });

// foundation init

$(document).foundation();

});


// Jquery Filter

$(document).ready(function(){
  $("#people-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#profile-grid .medium-3").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$(document).ready(function(){
  $("#donors-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#profile-grid .medium-4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});