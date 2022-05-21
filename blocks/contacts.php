<div class="content">
    <div class="contacts">
        <h2>Связаться с Андреем</h2>
        <form action="../action.php" id="entry" method="POST">
            <label>
                <input class="form" type="text" pattern="^[a-zA-Z-А-Яа-яЁё\s]+$" name="name" id="name" placeholder="Ваше имя" maxlength="20" required oninvalid="this.setCustomValidity('Введите Ваше имя')" oninput="setCustomValidity('')" />
            </label>
            <label>
                <input class="form" type="email" name="email" placeholder="E-Mail" maxlength="50" required oninvalid="this.setCustomValidity('Введите Ваш E-Mail')" oninput="setCustomValidity('')" />
            </label>
            <label>
                <textarea class="form" name="message" placeholder="Сообщение" cols="30" rows="10" style="height:25vh" maxlength="300" required oninvalid="this.setCustomValidity('Напишите сообщение')" oninput="setCustomValidity('')"></textarea>
            </label>
            <input class="form" style="background-color: #3f93ff;" type="submit" value="Отправить" />
        </form>
        <?php
        session_start();

        if($_SESSION['status'] === 'success'):
            echo '<p class="notification">Сообщение отправлено!</p>';
        endif;

        session_unset();
        ?>
    </div>
</div>