<?php 
get_header();
?>
<body>

    <h1>Вакансия веб-программист</h1>
    <p>Поставить в тексте на словосочетание «форму обратной связи» ссылку, при нажатии на которое откроется форма обратной связи в popup.</p>
    <a href="#" id="my-button">Форма обратной связи</a>
    <div id="my-popup">
            <form name="contactForm" id="contactForm" method="post" action="<?php echo admin_url('admin-ajax.php?action=send_mail')?>">
                <div class="top-popup">
                    <p class="formName">Обратный звонок<p>
                    <button id="close-button">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                </div>
                <div>
                    <label for="contactName"><p>Имя</p></label>
                    <input type='text' name='contactName' id="contactName" size="35" value="">
                </div>
                <div>
                    <label for="contactPhone"><p>Телефон</p></label>
                    <input type='text' name='contactPhone' id="contactPhone" value="" size="35" required>
                </div>
                <p id="success-message">Сообщение успешно отправлено</p>
                <p id="fail-message">Ошибка отправки сообщения</p>
                <div class="checkbox-content">
                    <input checked="checked" class="input-at" id="checkbox-at" type="checkbox" name="checkbox-at" />
                    <label for="checkbox-at">
                        <p>Согласиться на обработку персональных данных </p>
                    </label>
                </div>
                <input class="bot-send-mail" type='submit' value='Отправить'>
                
            </form>
            
    </div>

</body>
<?php 
get_footer();
?>
