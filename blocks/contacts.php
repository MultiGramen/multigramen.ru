<div class="content">
    <div class="contacts">
        <h2>Связаться с Андреем</h2>
        <form action="#" id="feedBackForm" method="POST">
            <label>
                <input class="form" type="text" pattern="^[a-zA-Z-А-Яа-яЁё\s]+$" name="name" id="name" placeholder="Ваше имя" maxlength="20" required oninvalid="this.setCustomValidity('Введите Ваше имя')" oninput="setCustomValidity('')" />
            </label>
            <label>
                <input class="form" type="email" name="email" placeholder="E-Mail" maxlength="50" required oninvalid="this.setCustomValidity('Введите Ваш E-Mail')" oninput="setCustomValidity('')" />
            </label>
            <label>
                <textarea class="form" name="message" placeholder="Сообщение" cols="30" rows="10" style="height:25vh" maxlength="300" required oninvalid="this.setCustomValidity('Напишите сообщение')" oninput="setCustomValidity('')"></textarea>
            </label>
            <label for="">
                <input type="hidden" id="token" name="token">
            </label>

            <button type="submit" class="button" name="post">Отправить</button>
        </form>
        <script src="https://www.google.com/recaptcha/api.js?render=6LcMTV0gAAAAAEeRmoUq97WiGahQEmRjwMTjwvwk"></script>

        <script>
            document.querySelector('form').addEventListener('submit', (e) => {
                e.preventDefault();
                let tk = '';
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LcMTV0gAAAAAEeRmoUq97WiGahQEmRjwMTjwvwk', {action: 'homepage'}).then(function(token) {
                        tk = token;
                        document.getElementById('token').value = token;
                        const data = new URLSearchParams();
                        for (const pair of new FormData(document.querySelector('form'))) {
                            data.append(pair[0], pair[1]);
                        }
                        fetch('../action.php', {
                            method: 'post',
                            body: data,
                        })
                            .then(response => response.json())
                            .then(result => {
                                if (result['om_score'] >= 0.5) {

                                } else {

                                }
                            });
                    });
                });
            });
        </script>

        <?php
        session_start();

        if($_SESSION['status'] === 'success'):
            echo '<p class="notification">Сообщение отправлено!</p>';
        endif;

        session_unset();
        ?>
    </div>
</div>