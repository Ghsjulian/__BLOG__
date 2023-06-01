<?php
require('public/__database__/__DB__.php');
$__DB__ = new __database__();
function __SHOW__($id, $tbl) {
  $sql = "SELECT * FROM '$tbl' WHERE post_id = '$id'";
  //$data = $__DB__->__SELECT__($sql);
  ?>

  <div class="main">
    <div class="blog">
      <h2>
        <?php echo $sql; ?>
      </h2>
      <img src="public/__images__/github.jpg" />
    <p>
      <?php echo $sql; ?>
    </p>
    <div class="footer">
      <h2>Write A Comment</h2>
      <div class="comment-area">
        <textarea id="message" placeholder="Write Comment"></textarea>
        <button type="button" id="contact_btn">Comment</button>
      </div>
      <h3>Share On Social Platform</h3>
      <div class="social">
        <a href="#">f</a>
        <a href="#">g+</a>
        <a href="#">t</a>
      </div>
    </div>
  </div>
</div>
<?php
} ?>