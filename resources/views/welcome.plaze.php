<@extends('layouts.app')

<@section('title', __('view.welcomeTo').config('app.name'))

<@section('content')
	<header>
		<div class="container">
			<div class="brand">
				<svg width="40" height="40" viewBox="0 0 163 161" fill="none" xmlns="http://www.w3.org/2000/svg">
					<mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="0.730469" y="-3.05176e-05" width="163" height="161" fill="black">
						<rect fill="white" x="0.730469" y="-3.05176e-05" width="163" height="161"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M97.8718 11.7203C97.8718 16.0316 94.216 19.7486 88.9446 21.4507V27.2391C129.748 30.5387 158.57 67.3875 161.267 100.558C166.838 169.084 139.697 162.732 110.266 155.845C101.093 153.699 91.6971 151.5 83 151.5C74.3817 151.5 64.9325 153.657 55.6219 155.783C25.3911 162.685 -3.37815 169.253 2.50003 100.558C5.32805 67.5091 35.3258 31.4014 75.5538 27.3714V21.3004C70.5235 19.5364 67.0728 15.9089 67.0728 11.7203C67.0728 5.79963 73.9674 0.999969 82.4723 0.999969C90.9772 0.999969 97.8718 5.79963 97.8718 11.7203Z"/>
					</mask>
					<g filter="url(#filter0_i)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M97.8718 11.7203C97.8718 16.0316 94.216 19.7486 88.9446 21.4507V27.2391C129.748 30.5387 158.57 67.3875 161.267 100.558C166.838 169.084 139.697 162.732 110.266 155.845C101.093 153.699 91.6971 151.5 83 151.5C74.3817 151.5 64.9325 153.657 55.6219 155.783C25.3911 162.685 -3.37815 169.253 2.50003 100.558C5.32805 67.5091 35.3258 31.4014 75.5538 27.3714V21.3004C70.5235 19.5364 67.0728 15.9089 67.0728 11.7203C67.0728 5.79963 73.9674 0.999969 82.4723 0.999969C90.9772 0.999969 97.8718 5.79963 97.8718 11.7203Z" fill="#E3E3E3"/>
					</g>
					<path d="M88.9446 21.4507L88.6374 20.499L87.9446 20.7227V21.4507H88.9446ZM88.9446 27.2391H87.9446V28.1615L88.864 28.2359L88.9446 27.2391ZM161.267 100.558L162.263 100.477L162.263 100.477L161.267 100.558ZM110.266 155.845L110.494 154.872L110.494 154.872L110.266 155.845ZM55.6219 155.783L55.3993 154.808L55.3993 154.808L55.6219 155.783ZM2.50003 100.558L3.49638 100.644L2.50003 100.558ZM75.5538 27.3714L75.6535 28.3665L76.5538 28.2763V27.3714H75.5538ZM75.5538 21.3004H76.5538V20.5914L75.8847 20.3568L75.5538 21.3004ZM89.2519 22.4023C94.7274 20.6343 98.8718 16.6507 98.8718 11.7203H96.8718C96.8718 15.4126 93.7046 18.8628 88.6374 20.499L89.2519 22.4023ZM89.9446 27.2391V21.4507H87.9446V27.2391H89.9446ZM88.864 28.2359C129.106 31.4901 157.606 67.8803 160.27 100.639L162.263 100.477C159.533 66.8946 130.39 29.5874 89.0252 26.2424L88.864 28.2359ZM160.27 100.639C161.659 117.722 161 130.051 158.816 138.833C156.637 147.598 152.962 152.753 148.361 155.634C143.737 158.53 138.009 159.237 131.509 158.751C125.006 158.265 117.871 156.598 110.494 154.872L110.038 156.819C117.376 158.536 124.671 160.246 131.36 160.746C138.052 161.246 144.28 160.55 149.423 157.329C154.589 154.093 158.495 148.417 160.757 139.316C163.016 130.232 163.66 117.657 162.263 100.477L160.27 100.639ZM110.494 154.872C101.348 152.731 91.8345 150.5 83 150.5V152.5C91.5598 152.5 100.837 154.666 110.038 156.819L110.494 154.872ZM83 150.5C74.2472 150.5 64.6818 152.689 55.3993 154.808L55.8445 156.758C65.1831 154.626 74.5162 152.5 83 152.5V150.5ZM55.3993 154.808C47.8232 156.538 40.434 158.222 33.6668 158.729C26.901 159.235 20.895 158.549 16.0309 155.659C11.1967 152.787 7.33215 147.641 5.03657 138.884C2.73511 130.106 2.03126 117.765 3.49638 100.644L1.50367 100.473C0.0297022 117.698 0.717693 130.297 3.10195 139.392C5.49208 148.509 9.60713 154.169 15.0093 157.379C20.3816 160.571 26.8687 161.243 33.816 160.723C40.7617 160.203 48.3052 158.479 55.8445 156.758L55.3993 154.808ZM3.49638 100.644C6.28669 68.0352 35.9421 32.3447 75.6535 28.3665L75.4541 26.3764C34.7096 30.4582 4.36941 66.9831 1.50367 100.473L3.49638 100.644ZM74.5538 21.3004V27.3714H76.5538V21.3004H74.5538ZM66.0728 11.7203C66.0728 16.5099 69.9883 20.4085 75.2229 22.2441L75.8847 20.3568C71.0586 18.6644 68.0728 15.3079 68.0728 11.7203H66.0728ZM82.4723 -3.05176e-05C78.041 -3.05176e-05 73.9861 1.24871 71.0119 3.31917C68.0413 5.38718 66.0728 8.34159 66.0728 11.7203H68.0728C68.0728 9.17836 69.5517 6.7726 72.1546 4.9606C74.7539 3.15106 78.3987 1.99997 82.4723 1.99997V-3.05176e-05ZM98.8718 11.7203C98.8718 8.34159 96.9034 5.38718 93.9327 3.31917C90.9586 1.24871 86.9036 -3.05176e-05 82.4723 -3.05176e-05V1.99997C86.5459 1.99997 90.1907 3.15106 92.7901 4.9606C95.3929 6.7726 96.8718 9.17836 96.8718 11.7203H98.8718Z" fill="#BBBBBB" mask="url(#path-1-outside-1)"/>
					<path d="M143.5 117.913C143.5 127.89 141.451 133.693 138.085 136.881C134.728 140.061 129.933 140.758 124.121 140.194C119.296 139.725 113.871 138.4 108.137 136.998C106.965 136.712 105.78 136.422 104.584 136.136C97.5659 134.457 90.2129 132.906 83.1499 132.906C76.0871 132.906 68.5901 134.477 61.358 136.18C60.206 136.451 59.0612 136.726 57.9259 136.998C51.9096 138.442 46.1613 139.82 41.0295 140.312C34.9266 140.896 29.8378 140.208 26.2642 137.005C22.6896 133.801 20.5 127.962 20.5 117.913C20.5 77.7167 47.9412 45.5 83.1499 45.5C100.784 45.5 115.856 52.5045 126.526 65.0361C137.202 77.5739 143.5 95.679 143.5 117.913Z" fill="#330F60" fill-opacity="0.9" stroke="#DADADA"/>
					<path d="M143.5 117.913C143.5 127.89 141.451 133.693 138.085 136.881C134.728 140.061 129.933 140.758 124.121 140.194C119.296 139.725 113.871 138.4 108.137 136.998C106.965 136.712 105.78 136.422 104.584 136.136C97.5659 134.457 90.2129 132.906 83.1499 132.906C76.0871 132.906 68.5901 134.477 61.358 136.18C60.206 136.451 59.0612 136.726 57.9259 136.998C51.9096 138.442 46.1613 139.82 41.0295 140.312C34.9266 140.896 29.8378 140.208 26.2642 137.005C22.6896 133.801 20.5 127.962 20.5 117.913C20.5 77.7167 47.9412 45.5 83.1499 45.5C100.784 45.5 115.856 52.5045 126.526 65.0361C137.202 77.5739 143.5 95.679 143.5 117.913Z" fill="#1B6C86" fill-opacity="0.22" stroke="#044879"/>
					<ellipse rx="10.325" ry="15" transform="matrix(0.999999 0.00156586 -0.00234002 0.999997 102.104 97.4144)" fill="#E9E9E9"/>
					<ellipse rx="10.323" ry="14.9991" transform="matrix(0.999982 -0.00594406 0.00675996 0.999977 62.4999 97.5972)" fill="#E9E9E9"/>
					<defs>
						<filter id="filter0_i" x="0.730469" y="-3.05176e-05" width="162.268" height="160.892" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
							<feOffset/>
							<feGaussianBlur stdDeviation="3"/>
							<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
							<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
							<feBlend mode="normal" in2="shape" result="effect1_innerShadow"/>
						</filter>
					</defs>
				</svg>
				<h1>{{ config('app.name') }}</h1>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="container">
			<div class="status">
				<h2 class="text-gradient">{{ __('view.welcomeTo') }} <span>{{ config('app.name') }}</span></h2>
				<code>
					<span class="check">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
						</svg>
					</span>
					<span>{{ basePath() }}</span>
				</code>
				<p class="status-message">
					{{ __('view.successfullyInstalled') }}
				</p>
			</div>
			<div class="resources">
				<div class="learn">
					<h3><i class="icon-books"></i>Learn</h3>
					<p>{!! __('view.userGuide') !!}</p>
				</div>
				<div class="discuss">
					<h3><i class="icon-embed"></i>Discuss</h3>
					<p>{!! __('view.discuss') !!}</p>
				</div>
				<div class="contribute">
					<h3><i class="icon-users"></i>Contribute</h3>
					<p>{!! __('view.contribute') !!}</p>
				</div>
			</div>
			<div class="footer">
				<div class="btnTheme">
					<i class="fas fa-sun"></i>
					<i class="indicator"></i>
					<i class="fas fa-moon"></i>
				</div>
				<p>Lenevor {{ version() }} (PHP v{{ PHP_VERSION }})</p>
			</div>
		</div>
	</div>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous" type="text/javascript"></script>
	<script type="text/javascript">
		<@php 
			echo preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(resourcePath('js/app.js')));
		<@endphp
	</script>
<@stop
