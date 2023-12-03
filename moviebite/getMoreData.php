<?php
if($_GET['only'] == "true"){
$sort= $_GET['sortBy'];
$order= $_GET['orderBy'];
$genres = $_GET['cat'];
$pag = $_GET['page'];
$page = $pag + 1;
 $link ="https://yts.mx/api/v2/list_movies.json?page=".$page."&limit=10&genre=".$genres."&sort_by=".$sort."&order_by=".$order."";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 $movies = $movie['data']['movies'];
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
	  }
	 }
}elseif($_GET['q'] !== null){
$sort= $_GET['sortBy'];
$order= $_GET['orderBy'];
$query = $_GET['q'];
$pag = $_GET['page'];
$page = $pag + 1;
 $link ="https://yts.mx/api/v2/list_movies.json?page=".$page."&limit=10&query_term=".urlencode($query)."&sort_by=".$sort."&order_by=".$order."";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 $movies = $movie['data']['movies'];
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
	  }
	 }
}else{
$genres = $_GET['cat'];
$pag = $_GET['page'];
$page = $pag + 1;
 $link ="https://yts.mx/api/v2/list_movies.json?page=".$page."&limit=6&genre=".$genres."&sort_by=year&order_by=desc";
	$json_file =file_get_contents($link);
	$movie = json_decode($json_file, true);
     if($movie['status'] =='ok'){
	  if($movie['data'] !== null){
		  $page = $movie['data']['page_number'];
		 $total_count = $movie['data']['movie_count'];
		 $movies = $movie['data']['movies'];
            foreach($movies as $moviedata) {
			if($genres == "Sci-fi" || $genres == "Sci-Fi" || $genres == "sci-fi"){
   $genre = "scifi";
  }else{
   $genre = $genres;
  }
                ?>
   <a href="?watch=<?php echo base64_encode($moviedata['id']); ?>">
   <div class="item-2 <?php echo $genre; ?>MoviePost" id="<?php echo $page; ?>" style="background-image: url(<?php echo $moviedata['large_cover_image']; ?>);">
	 <h3 style=""><?php echo $moviedata['title']; ?><br>
      <span style="margin-right: 10px;background-color:#000;color:#fff;border-radius: 10px;padding: 3px;font-size: 12px;"><?php echo $moviedata['year']; ?></span>
      <span style="float:right"><span class="px-2 mbr-iconfont mbr-iconfont-social mbri-star" style="color: rgb(247, 237, 74); fill: rgb(247, 237, 74);"> <?php echo $moviedata['rating']; ?></span>
	  </span>
	 </h3>
   </div>
   </a>
                <?php
                }
	  }
	 }
	 }
?>