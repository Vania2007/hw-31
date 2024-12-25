<?php
include "header.php";
?>
<div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Реєстрація</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="py-5">
<div class="container px-5">
    <!-- Contact form-->
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
            </div>
            <h2 class="fw-bolder">Реєстрація</h2>
            <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <?php
$user_form = '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" name="autoForm" onsubmit="return verify(this)">
<div class="mb-3 mt-3">
<label for="login" class="form-label">Ім\'я:</label>
<input type="text" name="login" id="login" placeholder="Введіть ім\'я" class="form-control" required>
</div>
<div class="mb-3">
<label for="pass" class="form-label">Пароль:</label>
<input type="password" name="pass" id="pass" placeholder="Введіть пароль" class="form-control" required>
</div>
<input type="submit" value="Зареєструватися" name="go" class="btn btn-primary">
</form>
<div id="massage"></div>';

if (!isset($_SESSION['authorized'])) {
    echo $user_form;
} else {
    echo "<p>" . "Ви зареєтсровані як " . htmlspecialchars($_SESSION['login']) . "</p>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['go'])) {
    $login = $_POST['login'];
    $password = $_POST['pass'];

    if (add_user($login, $password)) {
        $_SESSION['authorized'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['role'] = "user";
        header("Location: login.php");
        exit();
    } else {
        echo '<p class="text-danger">Ви не зареєстровані або ввели неправильні дані!</p>';
    }
}
?>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";