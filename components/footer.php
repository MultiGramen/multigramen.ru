<footer class="bg-dark text-center text-white footer">
    <div class="container p-3 pb-0">
        <section class="mb-1">
            <ul class="social-icons">
                <li>
                    <a href="https://vk.com/id57045147">
                        <picture>
                            <source type="image/webp" srcset="img/vk.webp">
                            <source type="image/png" srcset="img/vk.png">
                            <img src="img/vk.png" alt="ВКонтакте" width="70px">
                        </picture>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/MultiGramen/">
                        <picture>
                            <source type="image/webp" srcset="img/github.webp">
                            <source type="image/png" srcset="img/github.png">
                            <img src="img/github.png" alt="GitHub" width="70px">
                        </picture>
                    </a>
                </li>
            </ul>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: #212529;">
        <?php
        if (date('Y') == '2021') {
            echo "© А.Н. Пчелкин, 2021";
        } elseif (date('Y') != '2021') {
            echo ("© А.Н. Пчелкин, 2021-");
            echo date("Y");
        } ?>
    </div>
</footer>