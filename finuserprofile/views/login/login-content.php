<!-- Login Page -->
<header class="header">
    <h1 class="header__title">Welcome!</h1>
</header>


<main>
    <div class="form-container">
        <h3 class="form-container__title">Investor Login</h3>
        <?php if (isset($_SESSION["message"])): ?>
            <div id="form-container__error" class="flash flash--red">
            <?php
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            ?>
        </div>
        <?php endif ?>

        <?php if (isset($_SESSION["message_success"])): ?>
            <div id="form-container__error" class="flash flash--green">
            <?php
                echo $_SESSION["message_success"];
                unset($_SESSION["message_success"]);
            ?>
        </div>
        <?php endif ?>
        <form action="login.php" method="POST" class="form-container__form">
            <div class="form-container__form-input">
                <input type="email" name="email" placeholder="Email" class="form-container__input" required>
                <svg class="form-container__form-input-icon">
                    <use xlink:href="icons/sprites.svg#icon-envelop"></use>
                </svg>
            </div>

            <div class="form-container__form-input">
                <input type="password" name="password" placeholder="Password" id="password-input" class="form-container__input" required>
                <svg id="password-field" class="form-container__form-input-icon">
                    <use xlink:href="icons/sprites.svg#icon-eye"></use>
                </svg>
            </div>
            <input type="submit" class="form-container__btn form-container__btn--submit" name="login" value="Login">
        </form>
    </div>
</main>