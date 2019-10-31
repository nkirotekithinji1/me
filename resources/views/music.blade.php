<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Musicians</h2>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://127.0.0.1:8000/nina">
      <img src="photo.jpg" width="600" height="400">
    </a>
    <div class="desc">Nina Simmone</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="nina.blade.php"><a href="https://soundcloud.com/nyamubeats"></a>
      <img src="photo.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Nyamu beats</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="photo.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Glen Miller</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="photo.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Tamia</div>
  </div>
</div>

<div class="clearfix"></div>


</body>
</html>
