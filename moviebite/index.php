<?php
if(!isset($_SESSION['visited'])){
	session_start();
	$_SESSION['visited'] = "visited";
	if(file_exists("visit.txt")){
	$firstOpen = fopen("visit.txt","r");
    $contents = fread($firstOpen,filesize("visit.txt"));	
	fclose($firstOpen);
	$newCont = $contents + 1;
	$sOpen = fopen("visit.txt","w");
	fwrite($sOpen,$newCont);
	fclose($sOpen);
	}else{
		$newFile = fopen("visit.txt","w");
		$one = 1;
		fwrite($newFile, $one);
		fclose($newFile);
	}
}
require_once 'Mobile_Detect.php';
 $detect = new Mobile_Detect;
?>
<?php
 if(isset($_GET['q']) && $_GET['q'] !== null){
?>
<?php
 $query = $_GET['q'];
 if($_GET['sort'] !== null){
	   $sortings =explode("/",$_GET['sort']);
	   $sort = $sortings[0];
	   $order = $sortings[1];
	 }else{
	   $sort = "year";
	   $order = "desc";
	 }
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/001.png" type="image/x-icon">
  <link rel="shortcut icon" href="images/001.png" type="image/png">
  <link rel="icon" href="images/001.png" type="image/png">
  <link rel="apple-touch-icon" href="images/001.png" type="image/png">
  <meta name="description" content="Search results for <?php echo $query; ?>">
  <meta name="robots" content="index, follow"> 
  <meta name="theme-color" content="#000">
  <meta property="og:title" content="Search results for <?php echo $query; ?>"/>
  <meta property="og:type" content=""/>
  <meta property="og:description" content="Search results for <?php echo $query; ?>"/>
  <meta property="og:image" content="images/001.png"/>
  <meta property="og:site_name" content="Moviebite" />
  
  <title>Search results for <?php echo $query; ?></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<link rel="stylesheet" href="style2.css">
  <script src="jquery-3.2.1.min.js"></script>
  <style>
   .l-s-m-190 {
    height: 70px;
    border-top: 1px solid 
    #4a4545;
    margin-left: 5%;
    margin-right: 5%;
    text-align: center;
	display:none;
	}
	.l-s-m-190 img {
    height: 60px;
    display: inline-block;
    margin: auto;
	}
	.l-s-m-190 p {
    display: inline-block;
    color: 
    #77052a;
	}
  </style>
</head>
<body>
<nav class="menu">
 <div class="menubarM">
  <span class="top-mn-img">
   <img class="" src="images/002.jpg" alt="Watch and download free movies on Moviebite" title="Watch and download free movies on Moviebite" />
  </span>
   <span class="top-mn-brand-name" >Moviebite</span>
   <button class="menuButtonM" id="myBtn">Get app</button>
   
 </div>
 <div class="menuItem">
  <span class="menu-09-i"  >
   <span onclick="openBigMenu()" class="sub-men-bu-ca"> 
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-menu" ></i>
   </span>
  </span>
  <span class="menu-09-i"   >
   <span class="search-but-99" onclick="showSearch()" id="search-b" >
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-search"></i>
   </span>
  </span>
 </div>
 <script>
 function openSearchTab(){
  $('#searchTab').css("display","grid");
 }
 function closeSearchTab(){
  $('#searchTab').css("display","none");
 }
 </script>
 <script>
	   function showSearch(){
		   document.getElementById('searchBar').style.animation='dropS130down 1s';
		   document.getElementById('searchBar').style.display='block';
		   document.getElementById('searchBar').style.height='124px';
		   document.getElementById('search-b').style.background='#000';
	   }
	   
	   function hideSearch(){
		   document.getElementById('searchBar').style.animation='dropS130up 1s';
		   document.getElementById('searchBar').style.height='0px';
		   document.getElementById('search-b').style.background='inherit';
	   }
</script>
<div id="searchBar" class="searchBar" style="background-color:rgba(0, 0, 0, .5);">
 <div class="s130">
      <form method="get" action="">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" name="q" type="text" placeholder="Which movie are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <button type="submit" class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
	<script src="js/extention/choices.js"></script>
 <span class="s-bar-hid" onclick="hideSearch()">&times;</span>
</div>
</nav>
<!--big menu-->
<div id="bigMenu" style="display:none" class="menu-big-background">
 <div id="bigMenuContent" class="menu-big-cont">
  <div class="big-mn-clos-container">
   <span onclick="closeBigMenu()" class="big-mn-close">
    <i class="fas fa-times"></i>
   </span>
   <div class="u-mn-cont-74">
    <span class="mn-con-sec">
	 <span class="mn-con-sec-ttle"></span>
	</span>
	<span class="mn-con-sec">
	 <a href="index.php"><span class="mn-con-sec-ttle">
	  <i class="fas fa-home"></i> Home
	 </span></a>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  <i class="fas fa-video"></i> Movies
	 </span>
	 <span class="mn-con-sec-cont">
	  <a class="mn-con-sec-cont-i"  href="index.php?cat=comedy">Comedy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=sci-fi">Sci-fi</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=horror">Horror</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=adventure">Adventure</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=animation">Animation</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=mystery">Mystery</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=romance">Romance</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=action">Action</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=thriller">Thriller</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=crime">Crime</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=fantasy">Fantasy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=superhero">Superhero</a>
	 </span>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  Follow Us
	 </span>
	 <span  class="menu-ssc-link">
	  <a href="https://fb.me/moviebiteOn" target="_blank"  class="mn-ssc-link-i">
	   <i  class="fab fa-facebook"></i>
	  </a>
	  <a href="https://instagram.com/moviebitetv" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-instagram"></i>
	  </a>
	  <a href="https://tiktok.com/@moviebite" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-tiktok"></i>
	  </a>
	 </span>
	</span>
   </div>
  </div>
 </div>
</div>
<script>
 function closeBigMenu() {
  var bigMenu = document.getElementById("bigMenu");
  $("#bigMenu").css("animation","closeBigMenu");
  $("#bigMenu").css("display","none");
  $("#bigMenuContent").css("animation-duration","1s");
 }
 function openBigMenu(){
  $("#bigMenu").css("display","block");
  $("#bigMenuContent").css("animation","openBigMenu");
  $("#bigMenuContent").css("animation-duration","1s");
 }
</script>


<div id="downTab" class="modal">

  <!-- Modal content -->
  <div class="downTab-content">
    <span class="close-2">&times;</span>
    <h6 class="hd-1">Download Moviebite apps to be able to download our movies</h6>
	<div class="dtab-1">
     <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/002.jpg">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>Moviebite</h3>
	   <p>Its moviebite official app where you watch online and get download links of movies</p>
	   <a href="1.0.0/moviebite.apk"><button class="dapp-1">download</button></a>
	  </div>
	 </div>
	 <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/unnamed.webp">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>torrent downloader</h3>
	   <p>This app help to download movies using links you get from moviebite app</p>
	   <a href="https://play.google.com/store/apps/details?id=com.utorrent.client&hl=en&gl=US&referrer=utm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_term%3Dtorrent+downloader+apk&pcampaignid=APPU_1_OvMxYeyALs_zgAbd06q4Bg"><button class="dapp-1">download</button></a>
	  </div>
	 </div>
	</div>
   </div> 
	 
	
  </div>
<script>
// Get the modal
var modal = document.getElementById("downTab");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-2")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
<section style="margin-top: 90px;">
 <div class="i-row">
<!-- search resulst or movie with specific genre-->
 <p class="r-heading" style="color:#fff;font-weight:bold;margin-left:5px;width:100%;float: left;color:#fff;padding:10px;text-align:left;">
 Search results for "<?php echo $query; ?>"</p>
 <!--back word seeMore-->
 <div name="older" class="dropdown"><button class="dropbtn" style="border-bottom:2px solid #000;border-radius: 0px !important;margin-left:10px !important;"><span style="color:#77052a;font-weight:bold">Sort by</span></button>
   <div class="dropdown-content" style="background-color:#77052a">

<a href="?sort=year/desc&q=<?php echo $query; ?>">
   <span style="text-align:left">Year   </span>
   <span style="text-align:right">desc</span>
</a>
<a href="?sort=year/asc&q=<?php echo $query; ?>">
   <span style="text-align:left">Year   </span>
   <span style="text-align:right">asc</span>
</a>
<a href="?sort=rating/asc&q=<?php echo $query; ?>">
   <span style="text-align:left">rating   </span>
   <span style="text-align:right">asc</span>
</a>
<a href="?sort=rating/desc&q=<?php echo $query; ?>">
   <span style="text-align:left">Ratings   </span>
   <span style="text-align:right">desc</span>
</a>
</div>
</div>
 <div class="i-Holder-2 catMovieHolder" id="catMovieHolder">
  <?php
    $link ="https://yts.mx/api/v2/list_movies.json?limit=10&query_term=".urlencode($query)."&sort_by=".$sort."&order_by=".$order."";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 if($total_count >0){
		 $movies = $movie['data']['movies'];
            ?>
            <input type="hidden" name="total_count" id="total_count"
            value="<?php echo $total_count; ?>" />
			<input type="hidden" name="cat" id="cat"
            value="<?php echo $query; ?>" />

            <?php
            foreach($movies as $moviedata) {
                ?>
   <a href="?watch=<?php echo base64_encode($moviedata['id']); ?>">
   <div class="item-3 catMoviePost" id="<?php echo $page; ?>" style="background-image: url(<?php echo $moviedata['large_cover_image']; ?>);">
	 <h3 style=""><?php echo $moviedata['title']; ?><br>
      <span style="margin-right: 10px;background-color:#000;color:#fff;border-radius: 10px;padding: 3px;font-size: 12px;"><?php echo $moviedata['year']; ?></span>
      <span style="float:right"><span class="px-2 mbr-iconfont mbr-iconfont-social mbri-star" style="color: rgb(247, 237, 74); fill: rgb(247, 237, 74);"> <?php echo $moviedata['rating']; ?></span>
	  </span>
	 </h3>
   </div>
   </a>
<?php
		 }
		 ?>
	</div>
  <!-- see more button-->
  <button class="seeMore" id="seeMoreM">see more <span class="px-2 mbr-iconfont mbr-iconfont-social mbrib-arrow-down"></span></button>
  <div class="l-s-m-190 seeMoreCat">
   <img src="images/loaderb.gif">
   <p>loading more...</p>
   </div>
		 <?php
		 }else{
		 echo "no movies found";
	 }
	 }else{
		 echo "no data";
	 }
 }else{
	 echo $movie['status_message'];
 }
?>
<?php echo '<script type="text/javascript">'; ?>
$(document).ready(function(){
       $("#seeMoreM").on("click", function(e){if($(".catMoviePost").length < $("#total_count").val()) {
                var lastId = $(".catMoviePost:last").attr("id");
				var queryTerm = "<?php echo urlencode($query); ?>";
                //getMoreData(lastId);
				$.ajax({
        url: 'getMoreData.php?page=' + lastId + '&q=<?php echo $query; ?>&sortBy=<?php echo $sort; ?>&orderBy=<?php echo $order; ?>',
        type: "get",
        beforeSend: function ()
        {
            $('.seeMoreCat').attr("style","display:block !important;");
			$('.seeMore').attr("style","display:none !important;");
        },
        success: function (data) {
        	   setTimeout(function() {
                $('.seeMoreCat').attr("style","display:none !important;");
				$('.seeMore').attr("style","display:flex !important;");
            $("#catMovieHolder").append(data);
            windowOnScroll();
        	   }, 1000);
        }
   });
            }
    });
});
</script>
</section>
<!--footer--->
<div id="devedTab" class="dev-tab">
 <div class="content-dev-tab">
  <span onclick="closeDevTap()" class="close-dev-tab-bt">
   <i class="fas fa-times"></i>
  </span>
  <iframe class="dev-tab-src-frame" src="dev.html"></iframe>
 </div>
</div>
<section class="footer-09">
 <div class="globe-ff-flex">
 <div class="globe-footer432">
  <div class="footer-cont-nt">
   <span onclick="openDevTap()" class="dev-tab-open">
    Developer
   </span>
   <a href="mailto:niyonizerasamson100@gmail.com"><span onclick="" class="contact-pisc">
    contact
   </span></a>
  </div>
  <span class="foot-txt">Moviebite 2022 Nioza project</span>
  </div>
 </div>
 <script>
 function openDevTap(){
  $('#devedTab').css("display","grid");
  $('#devedTab').css("animation","openDevTab 1s");
 }
 function closeDevTap(){
  $('#devedTab').css("display","none");
 }
 </script>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
<?php
 }elseif(isset($_GET['cat']) && $_GET['cat'] !== null){
?>
<?php
 $query = $_GET['cat'];
 if($_GET['sort'] !== null){
	   $sortings =explode("/",$_GET['sort']);
	   $sort = $sortings[0];
	   $order = $sortings[1];
	 }else{
	   $sort = "year";
	   $order = "desc";
	 }
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/001.png" type="image/x-icon">
  <link rel="shortcut icon" href="images/001.png" type="image/png">
  <link rel="icon" href="images/001.png" type="image/png">
  <link rel="apple-touch-icon" href="images/001.png" type="image/png">
  <meta name="description" content="Watch and Download Free <?php echo $query; ?> movies ON Moviebite">
  <meta name="robots" content="index, follow"> 
  <meta name="theme-color" content="#000">
  <meta property="og:title" content="<?php echo $query; ?> movies"/>
  <meta property="og:type" content=""/>
  <meta property="og:description" content="<?php echo $query; ?> movies"/>
  <meta property="og:image" content="images/001.png"/>
  <meta property="og:site_name" content="Moviebite" />
  
  <title><?php echo $query; ?> movies ON Moviebite || page <?php echo $page; ?></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<link rel="stylesheet" href="style2.css">
  <script src="jquery-3.2.1.min.js"></script>
  <style>
   .l-s-m-190 {
    height: 70px;
    border-top: 1px solid 
    #4a4545;
    margin-left: 5%;
    margin-right: 5%;
    text-align: center;
	display:none;
	}
	.l-s-m-190 img {
    height: 60px;
    display: inline-block;
    margin: auto;
	}
	.l-s-m-190 p {
    display: inline-block;
    color: 
    #77052a;
	}
  </style>
</head>
<body>
<nav class="menu">
 <div class="menubarM">
  <span class="top-mn-img">
   <img class="" src="images/002.jpg" alt="Watch and download free movies on Moviebite" title="Watch and download free movies on Moviebite" />
  </span>
   <span class="top-mn-brand-name" >Moviebite</span>
   <button class="menuButtonM" id="myBtn">Get app</button>
   
 </div>
 <div class="menuItem">
  <span class="menu-09-i"  >
   <span onclick="openBigMenu()" class="sub-men-bu-ca"> 
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-menu" ></i>
   </span>
  </span>
  <span class="menu-09-i"   >
   <span class="search-but-99" onclick="showSearch()" id="search-b" >
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-search"></i>
   </span>
  </span>
 </div>
 <script>
 function openSearchTab(){
  $('#searchTab').css("display","grid");
 }
 function closeSearchTab(){
  $('#searchTab').css("display","none");
 }
 </script>
 <script>
	   function showSearch(){
		   document.getElementById('searchBar').style.animation='dropS130down 1s';
		   document.getElementById('searchBar').style.display='block';
		   document.getElementById('searchBar').style.height='124px';
		   document.getElementById('search-b').style.background='#000';
	   }
	   
	   function hideSearch(){
		   document.getElementById('searchBar').style.animation='dropS130up 1s';
		   document.getElementById('searchBar').style.height='0px';
		   document.getElementById('search-b').style.background='inherit';
	   }
</script>
<div id="searchBar" class="searchBar" style="background-color:rgba(0, 0, 0, .5);">
 <div class="s130">
      <form method="get" action="">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" name="q" type="text" placeholder="Which movie are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <button type="submit" class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
	<script src="js/extention/choices.js"></script>
 <span class="s-bar-hid" onclick="hideSearch()">&times;</span>
</div>
</nav>
<!--big menu-->
<div id="bigMenu" style="display:none" class="menu-big-background">
 <div id="bigMenuContent" class="menu-big-cont">
  <div class="big-mn-clos-container">
   <span onclick="closeBigMenu()" class="big-mn-close">
    <i class="fas fa-times"></i>
   </span>
   <div class="u-mn-cont-74">
    <span class="mn-con-sec">
	 <span class="mn-con-sec-ttle"></span>
	</span>
	<span class="mn-con-sec">
	 <a href="index.php"><span class="mn-con-sec-ttle">
	  <i class="fas fa-home"></i> Home
	 </span></a>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  <i class="fas fa-video"></i> Movies
	 </span>
	 <span class="mn-con-sec-cont">
	  <a class="mn-con-sec-cont-i"  href="index.php?cat=comedy">Comedy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=sci-fi">Sci-fi</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=horror">Horror</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=adventure">Adventure</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=animation">Animation</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=mystery">Mystery</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=romance">Romance</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=action">Action</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=thriller">Thriller</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=crime">Crime</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=fantasy">Fantasy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=superhero">Superhero</a>
	 </span>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  Follow Us
	 </span>
	 <span  class="menu-ssc-link">
	  <a href="https://fb.me/moviebiteOn" target="_blank"  class="mn-ssc-link-i">
	   <i  class="fab fa-facebook"></i>
	  </a>
	  <a href="https://instagram.com/moviebitetv" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-instagram"></i>
	  </a>
	  <a href="https://tiktok.com/@moviebite" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-tiktok"></i>
	  </a>
	 </span>
	</span>
   </div>
  </div>
 </div>
</div>
<script>
 function closeBigMenu() {
  var bigMenu = document.getElementById("bigMenu");
  $("#bigMenu").css("animation","closeBigMenu");
  $("#bigMenu").css("display","none");
  $("#bigMenuContent").css("animation-duration","1s");
 }
 function openBigMenu(){
  $("#bigMenu").css("display","block");
  $("#bigMenuContent").css("animation","openBigMenu");
  $("#bigMenuContent").css("animation-duration","1s");
 }
</script>
<div id="downTab" class="modal">

  <!-- Modal content -->
  <div class="downTab-content">
    <span class="close-2">&times;</span>
    <h6 class="hd-1">Download Moviebite apps to be able to download our movies</h6>
	<div class="dtab-1">
     <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/002.jpg">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>Moviebite</h3>
	   <p>Its moviebite official app where you watch online and get download links of movies</p>
	   <a href="1.0.0/moviebite.apk"><button class="dapp-1">download</button></a>
	  </div>
	 </div>
	 <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/unnamed.webp">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>torrent downloader</h3>
	   <p>This app help to download movies using links you get from moviebite app</p>
	   <a href="https://play.google.com/store/apps/details?id=com.utorrent.client&hl=en&gl=US&referrer=utm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_term%3Dtorrent+downloader+apk&pcampaignid=APPU_1_OvMxYeyALs_zgAbd06q4Bg"><button class="dapp-1">download</button></a>
	  </div>
	</div>
   </div> 
  </div>
	
  </div>
<script>
// Get the modal
var modal = document.getElementById("downTab");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-2")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
<section style="margin-top: 90px;">
 <div class="i-row">
<!-- search resulst or movie with specific genre-->
 <p class="r-heading" style="color:#fff;font-weight:bold;margin-left:5px;width:100%;float: left;color:#fff;padding:10px;text-align:left;">
 <?php echo $query; ?> Movies</p>
 <!--back word seeMore-->
 <div name="older" class="dropdown"><button class="dropbtn" style="border-bottom:2px solid #000;border-radius: 0px !important;margin-left:10px !important;"><span style="color:#77052a;font-weight:bold">Sort by</span></button>
   <div class="dropdown-content" style="background-color:#77052a">

<a href="?sort=year/desc&cat=<?php echo $query; ?>">
   <span style="text-align:left">Year   </span>
   <span style="text-align:right">desc</span>
</a>
<a href="?sort=year/asc&cat=<?php echo $query; ?>">
   <span style="text-align:left">Year   </span>
   <span style="text-align:right">asc</span>
</a>
<a href="?sort=rating/asc&cat=<?php echo $query; ?>">
   <span style="text-align:left">rating   </span>
   <span style="text-align:right">asc</span>
</a>
<a href="?sort=rating/desc&cat=<?php echo $query; ?>">
   <span style="text-align:left">Ratings   </span>
   <span style="text-align:right">desc</span>
</a>
</div>
</div>
 <div class="i-Holder-2 catMovieHolder" id="catMovieHolder">
  <?php
    $link ="https://yts.mx/api/v2/list_movies.json?limit=10&genre=".$query."&sort_by=".$sort."&order_by=".$order."";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 if($total_count >0){
		 $movies = $movie['data']['movies'];
            ?>
            <input type="hidden" name="total_count" id="total_count"
            value="<?php echo $total_count; ?>" />
			<input type="hidden" name="cat" id="cat"
            value="<?php echo $query; ?>" />

            <?php
            foreach($movies as $moviedata) {
                ?>
   <a href="?watch=<?php echo base64_encode($moviedata['id']); ?>">
   <div class="item-3 catMoviePost" id="<?php echo $page; ?>" style="background-image: url(<?php echo $moviedata['large_cover_image']; ?>);">
	 <h3 style=""><?php echo $moviedata['title']; ?><br>
      <span style="margin-right: 10px;background-color:#000;color:#fff;border-radius: 10px;padding: 3px;font-size: 12px;"><?php echo $moviedata['year']; ?></span>
      <span style="float:right"><span class="px-2 mbr-iconfont mbr-iconfont-social mbri-star" style="color: rgb(247, 237, 74); fill: rgb(247, 237, 74);"> <?php echo $moviedata['rating']; ?></span>
	  </span>
	 </h3>
   </div>
   </a>
<?php
		 }
		 ?>
	</div>
  <!-- see more button-->
  <button class="seeMore" id="seeMoreM">see more <span class="px-2 mbr-iconfont mbr-iconfont-social mbrib-arrow-down"></span></button>
  <div class="l-s-m-190 seeMoreCat">
   <img src="images/loaderb.gif">
   <p>loading more...</p>
   </div>
		 <?php
		 }else{
		 echo "no movies found";
	 }
	 }else{
		 echo "no data";
	 }
 }else{
	 echo $movie['status_message'];
 }
?>
<?php echo '<script type="text/javascript">'; ?>
$(document).ready(function(){
       $("#seeMoreM").on("click", function(e){if($(".catMoviePost").length < $("#total_count").val()) {
                var lastId = $(".catMoviePost:last").attr("id");
				var category = "<?php echo $query ?>";
                //getMoreData(lastId);
				$.ajax({
        url: 'getMoreData.php?only=true&page=' + lastId + '&cat=' + category + '&sortBy=<?php echo $sort; ?>&orderBy=<?php echo $order; ?>',
        type: "get",
        beforeSend: function ()
        {
            $('.seeMoreCat').attr("style","display:block !important;");
			$('.seeMore').attr("style","display:none !important;");
        },
        success: function (data) {
        	   setTimeout(function() {
                $('.seeMoreCat').attr("style","display:none !important;");
				$('.seeMore').attr("style","display:flex !important;");
            $("#catMovieHolder").append(data);
            windowOnScroll();
        	   }, 1000);
        }
   });
            }
    });
});
</script>
</section>

<!--footer--->
<div id="devedTab" class="dev-tab">
 <div class="content-dev-tab">
  <span onclick="closeDevTap()" class="close-dev-tab-bt">
   <i class="fas fa-times"></i>
  </span>
  <iframe class="dev-tab-src-frame" src="dev.html"></iframe>
 </div>
</div>
<section class="footer-09">
 <div class="globe-ff-flex">
 <div class="globe-footer432">
  <div class="footer-cont-nt">
   <span onclick="openDevTap()" class="dev-tab-open">
    Developer
   </span>
   <a href="mailto:niyonizerasamson100@gmail.com"><span onclick="" class="contact-pisc">
    contact
   </span></a>
  </div>
  <span class="foot-txt">Moviebite 2022 Nioza project</span>
  </div>
 </div>
 <script>
 function openDevTap(){
  $('#devedTab').css("display","grid");
  $('#devedTab').css("animation","openDevTab 1s");
 }
 function closeDevTap(){
  $('#devedTab').css("display","none");
 }
 </script>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
<?php
 }elseif(isset($_GET['watch']) && $_GET['watch'] !== null){
?>
<?php
	 $id = base64_decode($_GET['watch']);
	$link ="https://yts.mx/api/v2/movie_details.json?movie_id=".$id."";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
		 if($movie['data']['movie'] !== null){
			 $magnet = "magnet:?xt=urn:btih:".$movie['data']['movie']['torrents'][0]['hash']."&dn=".urlencode($movie['data']['movie']['title'])."&tr=udp://tracker.openbittorrent.com:80&tr=udp://open.demonii.com:1337/announce&tr=udp://tracker.opentrackr.org:1337/announce";
			 $moviedata = $movie['data']['movie'];
?>
<!DOCTYPE html>
<html  >
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/001.png" type="image/x-icon">
  <link rel="shortcut icon" href="images/001.png" type="image/png">
  <link rel="icon" href="images/001.png" type="image/png">
  <link rel="apple-touch-icon" href="images/001.png" type="image/png">
  <meta name="description" content="<?php echo substr($moviedata['description_full'], 0, 130); ?>...">
  <meta name="robots" content="index, follow"> 
  <meta name="theme-color" content="#000">
  <meta property="og:title" content="Watch and Download <?php echo $moviedata['title']; ?> ON Moviebite"/>
  <meta property="og:type" content="movie"/>
  <meta property="og:description" content="<?php echo substr($moviedata['description_full'], 0, 130); ?>..."/>
  <meta property="og:image" content="images/001.png"/>
  <meta property="og:site_name" content="Moviebite" />
  
  <title>Watch and Download <?php echo $moviedata['title']; ?> ON Moviebite</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<link rel="stylesheet" href="dist/needsharebutton.min.css">
	<link rel="stylesheet" href="style2.css">
  <script src="jquery-3.2.1.min.js"></script>
  <style>

.loader1  {
  border: 10px solid #f3f3f3;
  border-radius: 50%;
  border-top: 10px solid blue;
  border-bottom: 10px solid blue;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear
  infinite;

  animation: spin 2s linear infinite;
}

.loader-Multicolor {
  border: 7px solid #f3f3f3;
  border-radius: 50%;
  border-top: 7px solid rgba(250, 250, 250);
  border-right: 7px solid rgb( 250,250,250);
  border-bottom: 7px solid rgba(250, 250, 250, 0.6);
  border-left: 7px solid rgb( 250,250,250);
  width: 70px;
  height: 70px;
  -webkit-animation: spin 1s linear
  infinite;
  animation: spin 1s linear infinite;
  align-self: center;
}

@-webkit-keyframes spin {

0% {-webkit-transform:rotate(0deg);}
100% { -webkit-transform:
rotate(360deg); }

}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.movieImageCont div{
    width: 180px;
    height: 220px;
    background-color: #fff;
    display: inline-table;
    margin-left: 3px;
    margin-right: 3px;
    background-position: top;
    background-size: 100%;
    background-repeat: no-repeat;
    position: relative;
    transition: 0.3s ease;
}
.movieImageCont div img {
    width: 170px;
    margin: auto;
}
.movieImageCont  {
    background-color: #fff;
    width: 100%;
    height: 260px;
    overflow-x: auto;
    overflow-y: hidden;
    width: 100%;
    display: flex;
	margin-bottom: 10px;
}
</style>
  
</head>
<body>
<nav class="menu">

 <div class="menuItem">
  <span class="menu-09-i"  >
   <span onclick="openBigMenu()" class="sub-men-bu-ca"> 
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-menu" ></i>
   </span>
  </span>
  <span class="menu-09-i"   >
   <span class="search-but-99" onclick="showSearch()" id="search-b" >
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-search"></i>
   </span>
  </span>
 </div>
 <script>
 function openSearchTab(){
  $('#searchTab').css("display","grid");
 }
 function closeSearchTab(){
  $('#searchTab').css("display","none");
 }
 </script>
 <script>
	   function showSearch(){
		   document.getElementById('searchBar').style.animation='dropS130down 1s';
		   document.getElementById('searchBar').style.display='block';
		   document.getElementById('searchBar').style.height='124px';
		   document.getElementById('search-b').style.background='#000';
	   }
	   
	   function hideSearch(){
		   document.getElementById('searchBar').style.animation='dropS130up 1s';
		   document.getElementById('searchBar').style.height='0px';
		   document.getElementById('search-b').style.background='inherit';
	   }
</script>
<div id="searchBar" class="searchBar" style="background-color:rgba(0, 0, 0, .5);">
 <div class="s130">
      <form method="get" action="">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" name="q" type="text" placeholder="Which movie are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <button type="submit" class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
	<script src="js/extention/choices.js"></script>
 <span class="s-bar-hid" onclick="hideSearch()">&times;</span>
</div>
<?php
echo '<script>';
?>
        window.webtor = window.webtor || [];
        window.webtor.push({
            id: 'player',
			width: '100%',
			title: '<?php echo $moviedata['title']; ?>',
            magnet: '<?php echo $magnet; ?> ',
            on: function(e) {
                if (e.name == window.webtor.TORRENT_FETCHED) {
                    console.log('Torrent fetched!', e.data);
                }
                if (e.name == window.webtor.TORRENT_ERROR) {
                    console.log('Torrent error!');
                }
            },
            poster: '<?php echo $moviedata['large_cover_image']; ?>',
            subtitles: [
                {
                    srclang: 'en',
                    label: 'test',
                    src: '',
                    autoselect: true,
                }
            ],
            lang: 'en',
            i18n: {
                en: {
                    common: {
                        "prepare to play": '<div style="display: flex;justify-content: center;background-color:#000;width:100%;min-height:150px"><img src="http://moviebite.ga/i/mages/loader2.gif" style="align-self: center;height: 100%;border-radius: 50%;margin: 5px;"></div>',
                    },
                    stat: {
                        "seeding": "",
                        "waiting": "",
                        "waiting for peers": "",
                        "from": "",
                    },
                },
            },
        });
    </script>
<div id="player" style="box-shadow: 0px 1px 2px 0px #bfbfbf;min-height:150px;background-color:#000;">
</div>
</nav>
<!--big menu-->
<div id="bigMenu" style="display:none" class="menu-big-background">
 <div id="bigMenuContent" class="menu-big-cont">
  <div class="big-mn-clos-container">
   <span onclick="closeBigMenu()" class="big-mn-close">
    <i class="fas fa-times"></i>
   </span>
   <div class="u-mn-cont-74">
    <span class="mn-con-sec">
	 <span class="mn-con-sec-ttle"></span>
	</span>
	<span class="mn-con-sec">
	 <a href="index.php"><span class="mn-con-sec-ttle">
	  <i class="fas fa-home"></i> Home
	 </span></a>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  <i class="fas fa-video"></i> Movies
	 </span>
	 <span class="mn-con-sec-cont">
	  <a class="mn-con-sec-cont-i"  href="index.php?cat=comedy">Comedy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=sci-fi">Sci-fi</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=horror">Horror</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=adventure">Adventure</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=animation">Animation</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=mystery">Mystery</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=romance">Romance</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=action">Action</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=thriller">Thriller</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=crime">Crime</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=fantasy">Fantasy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=superhero">Superhero</a>
	 </span>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  Follow Us
	 </span>
	 <span  class="menu-ssc-link">
	  <a href="https://fb.me/moviebiteOn" target="_blank"  class="mn-ssc-link-i">
	   <i  class="fab fa-facebook"></i>
	  </a>
	  <a href="https://instagram.com/moviebitetv" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-instagram"></i>
	  </a>
	  <a href="https://tiktok.com/@moviebite" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-tiktok"></i>
	  </a>
	 </span>
	</span>
   </div>
  </div>
 </div>
</div>
<script>
 function closeBigMenu() {
  var bigMenu = document.getElementById("bigMenu");
  $("#bigMenu").css("animation","closeBigMenu");
  $("#bigMenu").css("display","none");
  $("#bigMenuContent").css("animation-duration","1s");
 }
 function openBigMenu(){
  $("#bigMenu").css("display","block");
  $("#bigMenuContent").css("animation","openBigMenu");
  $("#bigMenuContent").css("animation-duration","1s");
 }
</script>

<section style="margin-top: calc( 30% + 150px);background-color:#000;">
 <div class="i-row" style="margin:5px !important;border-radius:12px;">
  <h4 style="color:#970534;"><?php echo $moviedata['title']; ?></h4>
   <div style="padding:5px;">
    <?php
 foreach($moviedata['genres'] as $genres){
 ?>
    <span style="display:inline-block;background-color:rgb(0,0,0,.5);border-radius:20px;padding:2px;margin:2px"><?php echo $genres; ?></span>
<?php
 }
?>   </div>
   <p><span style="color:#fff;font-weight:bold;margin-left:5px">ratings</span> : <?php echo $moviedata['rating']; ?><span class="px-2 mbr-iconfont mbr-iconfont-social mbri-star" style="color: yellow; fill: yellow;"></span></p>
   <p style="margin:5px;font-size:12px;background-color:
#424242;border-radius: 15px;padding: 5px;">
     <?php echo $moviedata['description_full']; ?>
   </p>
   <div class="d_button">
   <button id="myBtn"><span class="px-2 mbr-iconfont mbr-iconfont-social mobi-mbri-download mobi-mbri"></span> download</button>
   <div id="share-button-1" class="need-share-button-default" data-share-position="topCenter">
   <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-sharethis socicon"></span>
   </div>
   </div>
<!-- The Modal -->
<div id="downTab" class="modal">

  <!-- Modal content -->
  <div class="downTab-content">
    <span class="close-2">&times;</span>
    <h6 class="hd-1">Download Moviebite apps to be able to download our movies</h6>
	<div class="dtab-1">
     <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/002.jpg">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>Moviebite</h3>
	   <p>Its moviebite official app where you watch online and get download links of movies</p>
	   <a href="1.0.0/moviebite.apk"><button class="dapp-1">download</button></a>
	  </div>
	 </div>
	 <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/unnamed.webp">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>torrent downloader</h3>
	   <p>This app help to download movies using links you get from moviebite app</p>
	   <a href="https://play.google.com/store/apps/details?id=com.utorrent.client&hl=en&gl=US&referrer=utm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_term%3Dtorrent+downloader+apk&pcampaignid=APPU_1_OvMxYeyALs_zgAbd06q4Bg"><button class="dapp-1">download</button></a>
	  </div>
	</div>
	 
	
  </div>

</div>
   <script>
// Get the modal
var modal = document.getElementById("downTab");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-2")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 </div>
 <div class="i-row">
 <h5 class="r-heading" style="width:100%;float: left;text-align:left;color:#c80404;padding:10px;">Related movies</h5>
 <?php 
 foreach($moviedata['genres'] as $genre){
  if($genre == "Sci-fi" || $genre == "Sci-Fi" || $genre == "sci-fi"){
   $genres = "scifi";
  }else{
   $genres = $genre;
  }
 ?>
  <p style="color:#fff;font-weight:bold;margin-left:5px">Other <?php echo $genre ; ?></p>
  <div class="i-Holder-4">
   <div id="<?php echo $genres; ?>Holder" style="display: inherit;">
<?php
    $link ="https://yts.mx/api/v2/list_movies.json?page=3&limit=6&genre=".$genre."&sort_by=year&order_by=desc";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 $movies = $movie['data']['movies'];
            ?>
            <input type="hidden" name="total_<?php echo $genres; ?>_count" id="total_<?php echo $genres; ?>_count"
            value="<?php echo $total_count; ?>" />

            <?php
            foreach($movies as $moviedata) {
                ?>
   <a href="?watch=<?php echo base64_encode($moviedata['id']); ?>">
   <div class="item-2 <?php echo $genres; ?>MoviePost" id="<?php echo $page; ?>" style="background-image: url(<?php echo $moviedata['large_cover_image']; ?>);">
	 <h3 style=""><?php echo $moviedata['title']; ?><br>
      <span style="margin-right: 10px;background-color:#000;color:#fff;border-radius: 10px;padding: 3px;font-size: 12px;"><?php echo $moviedata['year']; ?></span>
      <span style="float:right"><span class="px-2 mbr-iconfont mbr-iconfont-social mbri-star" style="color: rgb(247, 237, 74); fill: rgb(247, 237, 74);"> <?php echo $moviedata['rating']; ?></span>
	  </span>
	 </h3>
   </div>
   </a>
<?php
		 }
		 ?>
	</div>
    <!--div for see more on x scroll-->
   <div class="item-2 <?php echo $genres; ?>FetchingNext" style="box-shadow: 0px 0px 8px 2px
#444444;margin-top: 20px;">
      <button id="other<?php echo $genres; ?>" class="seeMore-2">
	  <span class="px-2 mbr-iconfont mbr-iconfont-social mbrib-arrow-next"></span><br>
	  Next
	  </button>
   </div>
   <div  class="<?php echo $genres; ?>FetchingLoader item-2" style="box-shadow: 0px 0px 8px 2px
#444444;margin-top: 20px;display:none !important;">
      <img class="lder-img" src="images/loader.gif">
	  <p class="lder-34-p">loading more...</p>
   </div>
		 <?php
	 }else{
		 echo "no data";
	 }
 }else{
	 echo $movie['status_message'];
 }
?>
  </div>
<?php
 echo '<script type="text/javascript">';
 ?>
$(document).ready(function(){
       $("#other<?php echo $genres; ?>").on("click", function(e){if($(".<?php echo $genres; ?>MoviePost").length < $("#total_<?php echo $genres; ?>_count").val()) {
                var last<?php echo $genres; ?>Id = $(".<?php echo $genres; ?>MoviePost:last").attr("id");
                //getMoreData(lastId);
				$.ajax({
        url: 'getMoreData.php?cat=<?php echo $genre; ?>&page=' + last<?php echo $genres; ?>Id,
        type: "get",
        beforeSend: function ()
        {
            $('.<?php echo $genres; ?>FetchingLoader').attr("style","display:inline-table !important;");
			 $('.<?php echo $genres; ?>FetchingNext').attr("style","display:none !important;");
        },
        success: function (data) {
        	   setTimeout(function() {
                $('.<?php echo $genres; ?>FetchingLoader').attr("style","display:none !important;");
				$('.<?php echo $genres; ?>FetchingNext').attr("style","display:inline-table !important;");
            $("#<?php echo $genres; ?>Holder").append(data);
            windowOnScroll();
        	   }, 1000);
        }
   });
            }
    });
});
</script>
<?php
}
?>
 </div>
 
</section>
<!--footer--->
<div id="devedTab" class="dev-tab">
 <div class="content-dev-tab">
  <span onclick="closeDevTap()" class="close-dev-tab-bt">
   <i class="fas fa-times"></i>
  </span>
  <iframe class="dev-tab-src-frame" src="../dev.html"></iframe>
 </div>
</div>
<section class="footer-09">
 <div class="globe-ff-flex">
 <div class="globe-footer432">
  <div class="footer-cont-nt">
   <span onclick="openDevTap()" class="dev-tab-open">
    Developer
   </span>
   <a href="mailto:niyonizerasamson100@gmail.com"><span onclick="" class="contact-pisc">
    contact
   </span></a>
  </div>
  <span class="foot-txt">Moviebite 2022 Nioza project</span>
  </div>
 </div>
 <script>
 function openDevTap(){
  $('#devedTab').css("display","grid");
  $('#devedTab').css("animation","openDevTab 1s");
 }
 function closeDevTap(){
  $('#devedTab').css("display","none");
 }
 </script>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="dist/needsharebutton.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@webtor/player-sdk-js/dist/index.min.js" charset="utf-8"></script>
  <script>  
			new needShareDropdown(document.getElementById('share-button-1'));
			new needShareDropdown(document.getElementById('share-button-2'));
			new needShareDropdown(document.getElementById('share-button-3'));
			new needShareDropdown(document.getElementById('share-button-4'));
			new needShareDropdown(document.getElementById('share-button-5'));
  </script>
  
</body>
</html>
<?php
		 }else{
			 echo "no movie data";
		 }
	 }else{
		 echo "something goes wrong   ".$movie['status_message']; 
	 }
?>
<?php
 }else{
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/001.png" type="image/x-icon">
  <link rel="shortcut icon" href="images/001.png" type="image/png">
  <link rel="icon" href="images/001.png" type="image/png">
  <link rel="apple-touch-icon" href="images/001.png" type="image/png">
  <meta name="description" content="Watch and Download Free unlimited movies">
  <meta name="robots" content="index, follow"> 
  <meta name="theme-color" content="#000">
  <meta property="og:title" content="Moviebite Free movies"/>
  <meta property="og:type" content=""/>
  <meta property="og:description" content="Watch and Download Free unlimited movies ON Moviebite"/>
  <meta property="og:image" content="images/001.png"/>
  <meta property="og:site_name" content="Moviebite" />
  
  <title>Moviebite Free movies</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/style.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<link rel="stylesheet" href="style2.css">
  <script src="jquery-3.2.1.min.js"></script>
  
</head>
<body>
<nav class="menu">
 <div class="menubarM">
  <span class="top-mn-img">
   <img class="" src="images/002.jpg" alt="Watch and download free movies on Moviebite" title="Watch and download free movies on Moviebite" />
  </span>
   <span class="top-mn-brand-name" >Moviebite</span>
   <button class="menuButtonM" id="myBtn">Get app</button>
   
 </div>
 <div class="menuItem">
  <span class="menu-09-i"  >
   <span onclick="openBigMenu()" class="sub-men-bu-ca"> 
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-menu" ></i>
   </span>
  </span>
  <span class="menu-09-i"   >
   <span class="search-but-99" onclick="showSearch()" id="search-b" >
    <i class="px-2 mbr-iconfont mbr-iconfont-social mbrib-search"></i>
   </span>
  </span>
 </div>
 <script>
 function openSearchTab(){
  $('#searchTab').css("display","grid");
 }
 function closeSearchTab(){
  $('#searchTab').css("display","none");
 }
 </script>
 <script>
	   function showSearch(){
		   document.getElementById('searchBar').style.animation='dropS130down 1s';
		   document.getElementById('searchBar').style.display='block';
		   document.getElementById('searchBar').style.height='124px';
		   document.getElementById('search-b').style.background='#000';
	   }
	   
	   function hideSearch(){
		   document.getElementById('searchBar').style.animation='dropS130up 1s';
		   document.getElementById('searchBar').style.height='0px';
		   document.getElementById('search-b').style.background='inherit';
	   }
</script>
<div id="searchBar" class="searchBar" style="background-color:rgba(0, 0, 0, .5);">
 <div class="s130">
      <form method="get" action="">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" name="q" type="text" placeholder="Which movie are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <button type="submit" class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
	<script src="js/extention/choices.js"></script>
 <span class="s-bar-hid" onclick="hideSearch()">&times;</span>
</div>
</nav>
<!--big menu-->
<div id="bigMenu" style="display:none" class="menu-big-background">
 <div id="bigMenuContent" class="menu-big-cont">
  <div class="big-mn-clos-container">
   <span onclick="closeBigMenu()" class="big-mn-close">
    <i class="fas fa-times"></i>
   </span>
   <div class="u-mn-cont-74">
    <span class="mn-con-sec">
	 <span class="mn-con-sec-ttle"></span>
	</span>
	<span class="mn-con-sec">
	 <a href="index.php"><span class="mn-con-sec-ttle">
	  <i class="fas fa-home"></i> Home
	 </span></a>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  <i class="fas fa-video"></i> Movies
	 </span>
	 <span class="mn-con-sec-cont">
	  <a class="mn-con-sec-cont-i"  href="index.php?cat=comedy">Comedy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=sci-fi">Sci-fi</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=horror">Horror</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=adventure">Adventure</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=animation">Animation</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=mystery">Mystery</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=romance">Romance</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=action">Action</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=thriller">Thriller</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=crime">Crime</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=fantasy">Fantasy</a>
	  <a class="mn-con-sec-cont-i" href="index.php?cat=superhero">Superhero</a>
	 </span>
	</span>
	<span class="mn-con-sec">
	 <span class="mn-con-sec-ttle">
	  Follow Us
	 </span>
	 <span  class="menu-ssc-link">
	  <a href="https://fb.me/moviebiteOn" target="_blank"  class="mn-ssc-link-i">
	   <i  class="fab fa-facebook"></i>
	  </a>
	  <a href="https://instagram.com/moviebitetv" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-instagram"></i>
	  </a>
	  <a href="https://tiktok.com/@moviebite" target="_blank" class="mn-ssc-link-i">
	   <i class="fab fa-tiktok"></i>
	  </a>
	 </span>
	</span>
   </div>
  </div>
 </div>
</div>
<script>
 function closeBigMenu() {
  var bigMenu = document.getElementById("bigMenu");
  $("#bigMenu").css("animation","closeBigMenu");
  $("#bigMenu").css("display","none");
  $("#bigMenuContent").css("animation-duration","1s");
 }
 function openBigMenu(){
  $("#bigMenu").css("display","block");
  $("#bigMenuContent").css("animation","openBigMenu");
  $("#bigMenuContent").css("animation-duration","1s");
 }
</script>
<div id="downTab" class="modal">

  <!-- Modal content -->
  <div class="downTab-content">
    <span class="close-2">&times;</span>
    <h6 class="hd-1">Download Moviebite apps to be able to download our movies</h6>
	<div class="dtab-1">
     <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/002.jpg">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>Moviebite</h3>
	   <p>Its moviebite official app where you watch online and get download links of movies</p>
	   <a href="1.0.0/moviebite.apk"><button class="dapp-1">download</button></a>
	  </div>
	 </div>
	 <div class="dlist-1">
	  <div class="dsub-1 small-11" >
	   <img src="images/unnamed.webp">
	  </div>
	  <div class="dsub-1 big-11">
	   <h3>torrent downloader</h3>
	   <p>This app help to download movies using links you get from moviebite app</p>
	   <a href="https://play.google.com/store/apps/details?id=com.utorrent.client&hl=en&gl=US&referrer=utm_source%3Dgoogle%26utm_medium%3Dorganic%26utm_term%3Dtorrent+downloader+apk&pcampaignid=APPU_1_OvMxYeyALs_zgAbd06q4Bg"><button class="dapp-1">download</button></a>
	  </div>
	</div>
	 
   </div> 
  </div>
<script>
// Get the modal
var modal = document.getElementById("downTab");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-2")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
<section style="margin-top: 90px;">
 <div class="i-row">
 
 
 <?php 
 $genrelist = array("Action" ,"Adventure" ,"Animation" ,"Sci-fi" ,"Romance" ,"Thriller");
 foreach($genrelist as $genre){
  if($genre == "Sci-fi" || $genre == "Sci-Fi" || $genre == "sci-fi"){
   $genres = "scifi";
  }else{
   $genres = $genre;
  }
 ?>
  <h5 class="r-heading" style="width:50%;float: left;text-align:left;color:#c80404;padding:10px;"><?php echo $genre ; ?></h5>
  <div class="i-Holder-4">
   <div id="<?php echo $genres; ?>Holder" style="display: inherit;">
<?php
    $link ="https://yts.mx/api/v2/list_movies.json?page=3&limit=6&genre=".$genre."&sort_by=year&order_by=desc";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 $movies = $movie['data']['movies'];
            ?>
            <input type="hidden" name="total_<?php echo $genres; ?>_count" id="total_<?php echo $genres; ?>_count"
            value="<?php echo $total_count; ?>" />

            <?php
            foreach($movies as $moviedata) {
                ?>
   <a href="?watch=<?php echo base64_encode($moviedata['id']); ?>">
   <div class="item-2 <?php echo $genres; ?>MoviePost" id="<?php echo $page; ?>" style="background-image: url(<?php echo $moviedata['large_cover_image']; ?>);">
	 <h3 style=""><?php echo $moviedata['title']; ?><br>
      <span style="margin-right: 10px;background-color:#000;color:#fff;border-radius: 10px;padding: 3px;font-size: 12px;"><?php echo $moviedata['year']; ?></span>
      <span style="float:right"><span class="px-2 mbr-iconfont mbr-iconfont-social mbri-star" style="color: rgb(247, 237, 74); fill: rgb(247, 237, 74);"> <?php echo $moviedata['rating']; ?></span>
	  </span>
	 </h3>
   </div>
   </a>
<?php
		 }
		 ?>
	</div>
    <!--div for see more on x scroll-->
   <div class="item-2 <?php echo $genres; ?>FetchingNext" style="box-shadow: 0px 0px 8px 2px
#444444;margin-top: 20px;">
      <button id="other<?php echo $genres; ?>" class="seeMore-2">
	  <span class="px-2 mbr-iconfont mbr-iconfont-social mbrib-arrow-next"></span><br>
	  Next
	  </button>
   </div>
   <div  class="<?php echo $genres; ?>FetchingLoader item-2" style="box-shadow: 0px 0px 8px 2px
#444444;margin-top: 20px;display:none !important;">
      <img class="lder-img" src="images/loader.gif">
	  <p class="lder-34-p">loading more...</p>
   </div>
		 <?php
	 }else{
		 echo "no data";
	 }
 }else{
	 echo $movie['status_message'];
 }
?>
  </div>
<?php
 echo '<script type="text/javascript">';
 ?>
$(document).ready(function(){
       $("#other<?php echo $genres; ?>").on("click", function(e){if($(".<?php echo $genres; ?>MoviePost").length < $("#total_<?php echo $genres; ?>_count").val()) {
                var last<?php echo $genres; ?>Id = $(".<?php echo $genres; ?>MoviePost:last").attr("id");
                //getMoreData(lastId);
				$.ajax({
        url: 'getMoreData.php?cat=<?php echo $genre; ?>&page=' + last<?php echo $genres; ?>Id,
        type: "get",
        beforeSend: function ()
        {
            $('.<?php echo $genres; ?>FetchingLoader').attr("style","display:inline-table !important;");
			 $('.<?php echo $genres; ?>FetchingNext').attr("style","display:none !important;");
        },
        success: function (data) {
        	   setTimeout(function() {
                $('.<?php echo $genres; ?>FetchingLoader').attr("style","display:none !important;");
				$('.<?php echo $genres; ?>FetchingNext').attr("style","display:inline-table !important;");
            $("#<?php echo $genres; ?>Holder").append(data);
            windowOnScroll();
        	   }, 1000);
        }
   });
            }
    });
});
</script>
<?php
}
?>
</section>
<div id="devedTab" class="dev-tab">
 <div class="content-dev-tab">
  <span onclick="closeDevTap()" class="close-dev-tab-bt">
   <i class="fas fa-times"></i>
  </span>
  <iframe class="dev-tab-src-frame" src="../dev.html"></iframe>
 </div>
</div>
<section class="footer-09">
 <div class="globe-ff-flex">
 <div class="globe-footer432">
  <div class="footer-cont-nt">
   <span onclick="openDevTap()" class="dev-tab-open">
    Developer
   </span>
   <a href="mailto:niyonizerasamson100@gmail.com"><span onclick="" class="contact-pisc">
    contact
   </span></a>
  </div>
  <span class="foot-txt">Moviebite 2022 Nioza project</span>
  </div>
 </div>
 <script>
 function openDevTap(){
  $('#devedTab').css("display","grid");
  $('#devedTab').css("animation","openDevTab 1s");
 }
 function closeDevTap(){
  $('#devedTab').css("display","none");
 }
 </script>
</section>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
<?php
}

 ?>