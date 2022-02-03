<section class="wrapper">
			<h2 class="tweet-form__title"><?=$title; ?></h2>
			<?php if ($error) { ?>	
			<div class="tweet-form__error">Что-то пошло не так</div>
			<?php } ?>
			<form class="tweet-form" action="<?=get_url('includes/sign_up.php'); ?>" method="POST" >
				<div class="tweet-form__wrapper_inputs">
					<input type="text" class="tweet-form__input" placeholder="Логин" name="login" required>
					<input type="password" class="tweet-form__input" name="pass" placeholder="Пароль" required>
					<input type="password" class="tweet-form__input" placeholder="Пароль повторно" name="pass2" required>
				</div>
				<div class="tweet-form__btns_center">
					<button class="tweet-form__btn_center" type="submit">Зарегистрироваться</button>
				</div>
			</form>
		</section>