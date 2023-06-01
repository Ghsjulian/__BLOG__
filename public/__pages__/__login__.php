<div id="Dashboard" class="main">
  <div class="blog">
    <div id="login" class="login">
      <center>
        <h1>
          Admin
          <span>Login</span>
        </h1>
        <!--<img src="svg/profile-circle.svg" />--->
        <form id="myfrm" method="POST">
          <p style="display: none" class="_error"></p>
          <p style="display: none" class="_success"></p>
          <label for="username">
            <i class="fas fa-user"></i>
          </label>
          <input
          type="text"
          name="action"
          placeholder="Enter Name "
          value="Login"
          id="action"
          autocomplete="on"
          hidden="true"
          />
        <input
        type="text"
        name="user_name"
        placeholder="Enter Name "
        id="name"
        autocomplete="on"
        onfocus="true"
        />

      <input
      type="password"
      name="user_password"
      placeholder="Enter Password"
      id="password"
      autocomplete="on"
      onfocus="true"
      />
    <button class="login__" type="submit" id="__btn">Login</button>
  </form>
  <strong id="info"
    ><a href="index.php?page=__registration__">Don't Have An Account?</a></strong
  >
</center>
</div>
</div>
</div>
<script src="public/__js__/validation.js"></script>
</body></html>