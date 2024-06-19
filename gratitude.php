<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script type="text/javascript" src="loappdd/mknnjs/jquery-3.7.1.js"></script>

		<title>Twice Advice | Запит прийнято!</title>
		<meta property="og:title" content="Twice Advice | Запит прийнято!" />
		<meta property="og:image" content="corporate-logo.svg" />
		
		<meta property="og:description" content="Twice Advice | Запит прийнято!" />
		<meta name="description" content="Twice Advice | Запит прийнято!" />

		<link rel="stylesheet" href="loappdd/mkkcs/animate.css" />
		<link rel="stylesheet" href="loappdd/mkkcs/bootstrap.css" />
		<link rel="stylesheet" href="loappdd/mkkcs/buttons.css" />
		<link rel="stylesheet" href="loappdd/mkkcs/bootstrap-icons.css" />
		<link rel="stylesheet" href="loappdd/mkkcs/slick-theme.css" />
		<link rel="stylesheet" href="loappdd/mkkcs/slick.css" />
		<link rel="stylesheet" href="loappdd/mkkcs/jquery.fancybox.min.css" />

		<script type="text/javascript" src="loappdd/mknnjs/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="loappdd/mknnjs/slick.file.min.js"></script>
		<script type="text/javascript" src="loappdd/mknnjs/bootstrap.bundle.min.js"></script>	


		

		<link rel="shortcut icon" href="corporate-logo.svg" type="image/x-icon" />
		<link rel="stylesheet" href="master.css" />
	

		<style>
			
			
		</style>

		
	</head>

	<body>		
		<style>

    .privacyPopup {
        width: calc(100% - 60px);
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 25px;
        left: calc(50% - 15px);
        transform: translateX(-50%);
        max-width: 327px;
        border-radius: 12px;
        z-index: 3;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin: 0 15px;
    }

    .privacyPopup h1 {
        font-size: 20px;
    }

    .privacyPopup span {
        margin: 0;
        font-size: 16px;
        display: inline-block;
        word-wrap: break-word;
        max-width: 100%;
    }

    .button {
        border: none;
        cursor: pointer;
        padding: 10px 30px;
        margin: 10px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        background: #060606 !important;
        color: #fff;
        border-radius: 2px 25px 25px 2px;
    }

    .customizeButton {
        color: #060606;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    .customizeButton svg {
        width: 20px;
        height: 15px;
    }

    .agreeButton {
        color: white;
    }

    .optionsPanel {
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        position: fixed;
        bottom: 150px;
        left: calc(50% - 15px);
        transform: translateX(-50%);
        width: auto;
        padding: 20px;
        flex-direction: column;
        align-items: center;
        z-index: 4;
        border-radius: 10px;
        max-width: 300px;
        width: calc(100% - 60px);
        margin: 0 15px;
    }

    .optionsPanel .centerText {
        font-size: 19px;
        font-weight: 600;
    }

    .optionsPanel label {
        margin: 10px 0;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .optionsPanel label input[type="checkbox"] {
        display: none;
    }

    .optionsPanel label input[type="checkbox"] + .toggle {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
        background-color: #ccc;
        border-radius: 20px;
        cursor: pointer;
    }

    .optionsPanel label input[type="checkbox"] + .toggle:before {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        top: 50%;
        transform: translateY(-50%);
        background-color: white;
        border-radius: 50%;
        left: 4px;
        transition: all 0.3s ease;
    }

    .optionsPanel label input[type="checkbox"]:checked + .toggle {
        background-color: #060606;
    }

    .optionsPanel label input[type="checkbox"]:checked + .toggle:before {
        left: 20px;
    }

    .submitButton {
        color: white;
    }

    .hidden {
        display: none !important;
    }

    .centerText {
        text-align: center;
        margin-bottom: 35px;
    }

    .alignCenter {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media screen and (min-width: 320px) and (max-width: 420px) {
        .privacyPopup {
            max-height: 40vh;
            overflow: auto;
            padding: 8px;
            font-size: 13px;
        }

        .privacyPopup h1 {
            font-size: 18px;
        }

        .privacyPopup span, .optionsPanel label, .button, .customizeButton {
            font-size: 13px;
        }

        .button, .customizeButton svg {
            padding: 8px 20px;
            margin: 5px;
        }

        .optionsPanel {
            padding: 15px;
        }
    }
</style>

<div class="privacyPopup hidden">
    <h1>Чи можемо ми використовувати файли cookie?</h1>

    <span>Ми використовуємо <a target="_blank" href="trackingCookies.html" style="color: #571a9b;">файли cookie</a>, щоб з'ясувати, з чим у вас виникли проблеми з навігацією по нашому сайту, і вирішити ці проблеми для ваших майбутніх відвідувань.</span>

    <div>

        <button class="agreeButton button">Так</button>
        <button class="declineButton button">Ні</button>

        <div class="customizeButton">
            Налаштувати

            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg>
        </div>
    </div>
</div>
<div class="optionsPanel hidden">
    <div class="centerText">Налаштування файлів cookie</div>

    <label>
        <input type="checkbox" checked class="consentCheckbox" name="analytics">
        Аналітика

        <span class="toggle"></span>
    </label>
    <label>
        <input type="checkbox" checked class="consentCheckbox" name="preferences">
        Налаштування

        <span class="toggle"></span>
    </label>
    <label>
        <input type="checkbox" checked class="consentCheckbox" name="marketing">
        Маркетингу

        <span class="toggle"></span>
    </label>

    <div class="alignCenter">
        <button class="submitButton button">Рятувати</button>
    </div>
</div>

<script>
    const setCookie = (name, value, days) => {
        if (days) {
            const expires = `; expires=${new Date(Date.now() + days * 864e5).toUTCString()}`;
            document.cookie = `${name}=${value || ""}${expires}; path=/`;
        }
    }

    const getCookie = name => {
        const nameEQ = name + "=";
        return document.cookie.split(';').map(c => c.trim()).find(cookie => cookie.startsWith(nameEQ))?.substring(nameEQ.length) || null;
    }

    const popup = document.querySelector('.privacyPopup');
    const panel = document.querySelector('.optionsPanel');
    const togglePanel = () => panel.classList.toggle('hidden');
    const consentCheckboxes = document.querySelectorAll('.consentCheckbox');
    const customize = document.querySelector('.customizeButton');
    const agree = document.querySelector('.agreeButton');
    const submit = document.querySelector('.submitButton');
    const decline = document.querySelector('.declineButton');

    customize.addEventListener('click', togglePanel);
    submit.addEventListener('click', () => {
        togglePanel();
    });
    agree.addEventListener('click', () => {
        const consent = [...consentCheckboxes].filter(cb => cb.checked).map(cb => cb.name);
        setCookie("UserSession-16347", JSON.stringify(consent), 365);

        panel.classList.add('hidden');
        popup.classList.add('hidden');
    });
    decline.addEventListener('click', () => {
        setCookie("UserSession-16347", JSON.stringify([]), 365);
        panel.classList.add('hidden');
        popup.classList.add('hidden');
    });

    const cookieCheckboxes = document.querySelectorAll('.consentCheckbox')

    function saveCheckboxState() {
        const checkboxesState = {};
        cookieCheckboxes.forEach((input) => {
            checkboxesState[input.name] = input.checked;
        });
        localStorage.setItem('checkboxesState', JSON.stringify(checkboxesState));
    }

    cookieCheckboxes.forEach((input) => {
        input.addEventListener('change', e => {
            saveCheckboxState();
        });
    });

    function loadCheckboxState() {
        const checkboxesState = JSON.parse(localStorage.getItem('checkboxesState'));
        if (checkboxesState) {
            cookieCheckboxes.forEach((input) => {
                input.checked = checkboxesState[input.name] || false;
            });
        }
    }

    document.addEventListener('DOMContentLoaded', loadCheckboxState);

    const consent = getCookie("UserSession-16347");
    if (!consent) popup.classList.remove('hidden');
</script>


<header>
	<nav class="navbar navbar-expand-lg navbar-custom sticky">
		<div class="container">
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="offcanvas"
				data-bs-target="#offcanvasNavbar"
				aria-controls="offcanvasNavbar"
				aria-label="Toggle navigation"
			>
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="20"
					height="20"
					class="bi bi-justify"
					viewBox="0 0 16 16"
				>
					<path
						fill-rule="evenodd"
						d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
					/>
				</svg>
			</button>
			<a href="./" class="header__logo text-uppercase logo-menu">
				<img src="corporate-logo.svg " alt=" " />
			</a>
			<div
				class="offcanvas offcanvas-start"
				tabindex="-1"
				id="offcanvasNavbar"
				aria-labelledby="offcanvasNavbarLabel"
			>
				<div class="offcanvas-header">
					<a href="./" class="header__logo text-uppercase mob-logo">
						<span> Twice Advice</span>
					</a>
					<button
						type="button"
						class="btn-close"
						data-bs-dismiss="offcanvas"
						aria-label="Close"
					></button>
				</div>
				<div class="offcanvas-body">
					<a href="./" class="header__logo text-uppercase logo-inside">
						<img src="corporate-logo.svg" alt=" " />
					</a>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="./">Дім</a>
						</li>

						<li class="nav-item menu-togl">
							<a
								class="nav-link dropdown-toggle"
								href="#"
								role="button"
								data-bs-toggle="dropdown"
								aria-expanded="false">
								Послуги</a>
							<ul class="dropdown-menu">
								
								<li class="dropdown-item">
									<a href="choose-your-perfect-educational-path-with-twice-advice.html">Виберіть свій ідеальний освітній шлях із подвійною порадою</a>
								</li>
								 
								<li class="dropdown-item">
									<a href="ensure-quality-education-with-twice-advice-expert-assessment-and-inspection-services.html">Забезпечте якісну освіту за допомогою послуг експертної оцінки та інспекції Twice Advice</a>
								</li>
								 
								<li class="dropdown-item">
									<a href="smooth-your-path-to-university-with-twice-advice-admission-support-services.html">Згладьте свій шлях до університету за допомогою послуг підтримки при вступі від Twice Advice </a>
								</li>
								 
								<li class="dropdown-item">
									<a href="seamless-transition-with-twice-advice-comprehensive-information-support-and-adaptation-services.html">Плавний перехід з подвійними порадами: комплексна інформаційна підтримка та послуги з адаптації</a>
								</li>
								
							</ul>
							<ul class="menu-wrapper-lg">
								
								<li class="menu-lg">
									<a href="choose-your-perfect-educational-path-with-twice-advice.html" class="menu-img">
										<img src="6672972ea4b0e_5469560_portrait.jpg" alt="Відкрийте своє майбутнє за допомогою Twice Advice: виберіть правильний університет і спеціальність" />
									</a>
									<a href="choose-your-perfect-educational-path-with-twice-advice.html" class="menu-title">Виберіть свій ідеальний освітній шлях із подвійною порадою</a>
								</li>
								 
								<li class="menu-lg">
									<a href="ensure-quality-education-with-twice-advice-expert-assessment-and-inspection-services.html" class="menu-img">
										<img src="snapshot_66729730a548c_9369965.jpeg" alt="Виберіть свій ідеальний освітній шлях із подвійною порадою" />
									</a>
									<a href="ensure-quality-education-with-twice-advice-expert-assessment-and-inspection-services.html" class="menu-title">Забезпечте якісну освіту за допомогою послуг експертної оцінки та інспекції Twice Advice</a>
								</li>
								 
								<li class="menu-lg">
									<a href="smooth-your-path-to-university-with-twice-advice-admission-support-services.html" class="menu-img">
										<img src="66729732b3d98_3831758_vision.jpg" alt="Забезпечте якісну освіту за допомогою послуг експертної оцінки та інспекції Twice Advice" />
									</a>
									<a href="smooth-your-path-to-university-with-twice-advice-admission-support-services.html" class="menu-title">Згладьте свій шлях до університету за допомогою послуг підтримки при вступі від Twice Advice </a>
								</li>
								 
								<li class="menu-lg">
									<a href="seamless-transition-with-twice-advice-comprehensive-information-support-and-adaptation-services.html" class="menu-img">
										<img src="66729734adb81-930560-shot.jpg" alt="Згладьте свій шлях до університету за допомогою послуг підтримки при вступі від Twice Advice" />
									</a>
									<a href="seamless-transition-with-twice-advice-comprehensive-information-support-and-adaptation-services.html" class="menu-title">Плавний перехід з подвійними порадами: комплексна інформаційна підтримка та послуги з адаптації</a>
								</li>
								
							</ul>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="about-us.html">Хто ми</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ask-us.html">Контакт</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>




<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-footer__WCAfB__section{
		margin: 0px;
		padding: 0px;
		font-family: 'Alegreya Sans', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 259px 0px;
	}
	.bodyClass1-footer__WCAfB__section{
		background: #f9f3f3;
		color: #000000;
	}
	.bodyClass2-footer__WCAfB__section{
		background: #f9f7cf;
		color: #fff;
	}
	.bodyClass3-footer__WCAfB__section{
		background: #fff;
		color: #111;
	}
	.wrapage-block-footer__WCAfB__section{
		background-size: 100%;
		width: 100%;
	}
	.box_main-footer__WCAfB__section{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-footer__WCAfB__section h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-footer__WCAfB__section p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-footer__WCAfB__section{
		text-align: center;
	}
	.mainBlock-footer__WCAfB__section ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-footer__WCAfB__section ul>li span{
		font-weight: bold;
	}
	.mainBlock-footer__WCAfB__section{
		max-width: 764px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-footer__WCAfB__section .cBlock-footer__WCAfB__section{
		text-align: center;
	}

	.bodyClass3-footer__WCAfB__section .mainBlock-footer__WCAfB__section{
		background: none;
		border-top: 2px solid #f9f7cf;
		border-bottom: 2px solid #f9f7cf;
	}
	.bodyClass2-footer__WCAfB__section .mainBlock-footer__WCAfB__section{
		background: #2A2438;
		color: #fff !important;
		box-shadow: 0px 0px 15px #2A2438;
	}
	.bodyClass2-footer__WCAfB__section .mainBlock-footer__WCAfB__section p{
		color: #fff !important;
	}
	.bodyClass1-footer__WCAfB__section .mainBlock-footer__WCAfB__section{
		background: #F8A29A;
		color: #000000;
		border-left: 1px solid #151515;
	}
	.bodyClass1-footer__WCAfB__section .mainBlock-footer__WCAfB__section p{
		color: #000000 !important;
	}
	.order-footer__WCAfB__section{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-footer__WCAfB__section p{
			padding: 0px 15px;
		  }
		  .box_main-footer__WCAfB__section h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-footer__WCAfB__section{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-footer__WCAfB__section{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-footer__WCAfB__section" id="mainWrapp-footer__WCAfB__section">


	<div class="wrapage-block-footer__WCAfB__section">
		<div class="box_main-footer__WCAfB__section">
			<div class="mainBlock-footer__WCAfB__section">
				<p>Ми щиро вдячні за вашу підтримку та довіру, яку ви надали нам. Ваша підтримка дає можливість нашій відданій команді постійно підвищувати якість наших пропозицій.</p>
<p>Пам'ятайте, що ваші ідеї, відгуки та пропозиції є безцінними для нашого зростання та еволюції. Якщо у вас є щось на думці або вам потрібна допомога, будь ласка, не соромтеся звертатися. Наше зобов'язання полягає в тому, щоб бути готовими допомогти вам.</p>
<p class="cBlock-footer__WCAfB__section">З сердечною подякою та теплими побажаннями!</p>
			</div>
		</div>
	</div>


</div>



<footer class="footer wrapper__CoDjr__section">
	<div class="container">
		<div class="privacy-wrapper">
			<a class="privacy" href="privacyInfo.html"> Політика конфіденційності</a>
			<a class="privacy" href="membershipTerms.html"> Правила та умови</a>
			<a class="privacy" href="medical-disclaimer.html"> Застереження</a>
		</div>
		<div class="footer-button footer-hqJhB-element">
		 <span>&#169 2020</span> 
		 Спроектований і побудований з усією любов'ю світу!
	</div>
	</div>	
</footer>

<script>
	$(window).scroll(function () {
		let scroll = $(window).scrollTop();

		if (scroll >= 30) {
			$('.sticky').addClass('nav-sticky');
		} else {
			$('.sticky').removeClass('nav-sticky');
		}
	});
</script>
<script>
      document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('.animate-element');

        const observer = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
            }
          });
        });

        elements.forEach((element) => {
          observer.observe(element);
        });
      });
</script>


	

</body>
</html>
