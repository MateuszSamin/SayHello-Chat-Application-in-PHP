<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>
        Say<span class="name">Hello</span>!
        <img src="undraw_mobile_messages.svg" class="svg" alt="">
    </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Adres E-mail</label>
          <input type="text" name="email" placeholder="Podaj swój adres E-mail" required>
        </div>
        <div class="field input">
          <label>Hasło</label>
          <input type="password" name="password" placeholder="Podaj hasło" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Zaloguj">
        </div>
      </form>
      <div class="link">Nie masz jeszcze konta? <a href="index.php">Zajerestruj się</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
