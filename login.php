<?php
session_start();
include "action.php";
include "header.php";

$autorized = isset($_SESSION['authorized']) && $_SESSION['authorized'];
?>
<div class="hero hero-inner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto text-center">
                <div class="intro-wrap">
                    <h1 class="mb-0">Вхід</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <h2 class="fw-bolder">Увійти</h2>
                <p class="lead fw-normal text-muted mb-0">Ми раді Вас бачити знову!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <?php
                    if (!$autorized) {
                        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" class="mb-4">
                                <div class="mb-3 mt-3">
                                    <label for="login" class="form-label">Ім\'я:</label>
                                    <input type="text" name="login" id="login" placeholder="Введіть ім\'я" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Пароль:</label>
                                    <input type="password" name="pass" id="pass" placeholder="Введіть пароль" class="form-control" required>
                                </div>
                                <input type="submit" value="Увійти" name="go" class="btn btn-primary">
                            </form>
                            <a href="registration.php" class="regist">Не маєте акаунту? Зареєструйтеся!</a>';
                    } 
                    else {
                        $login = $_SESSION['login'];
                        echo "<p>Привіт, $login!</p>";
                        echo '<a href="index.php">Перейти на головну</a><br>';
                        if ($_SESSION['role'] === 'admin') {
                            echo "<a href='hello.php'>Перегляд звіту</a>";
                        }
                        echo '<br><a href="logout.php" class="logout">Вийти</a>';
                    }

                    if (isset($_POST['go'])) {
                        $login = $_POST['login'];
                        $password = $_POST['pass'];
                        if (check_authorize($login, $password)) {
                            $_SESSION['authorized'] = true;
                            $_SESSION['login'] = $login;
                            $_SESSION['role'] = check_role($login, $password);
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit();
                        } else {
                            echo '<p class="text-danger">Ви не зареєстровані або ввели неправильні дані!</p>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";