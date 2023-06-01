<?php
include_once('public/__database__/__DB__.php');
$database = new __database__();
function __ShowPost__($post_category) {
  ?>
  <div class="main">
    <div class="blog">
      <div class="search-area">
        <input
        type="text"
        id="search"
        placeholder="Search Something..."
        value=""
        />
      <button type="button" id="search-btn">Search</button>
    </div>
    <li class="blog-list">
      <img src="public/__icons__/blog.png" />
    <a href="?post=12&category=web_world"
      ><?php echo $post_category; ?></a
    >
  </li>
  <li class="blog-list">
    <img src="public/__icons__/code.png" />
  <a href="#"><?php echo $post_category; ?></a>
</li>
</div>
</div>
<?php
}
?>