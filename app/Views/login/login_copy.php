<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard ThemePurchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
<!--begin::Head-->

<head>
	<meta charset="utf-8" />
	<title>Login | Sistem Informasi Manajemen Aset PT. INTENS</title>
	<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
	<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="/11.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-light" style="overflow: hidden;">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative bg-primary">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px">
					<!--begin::Content-->
					<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
						<!--begin::Logo-->
						<a href="/login" class="py-9">
							<img alt="Logo" src="assets/images/intens.png" class="h-70px" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h1 class="fw-bolder fs-2qx pb-5 pb-md-10 text-light">Selamat Datang di <br>Sistem Informasi Manajemen Aset</h1>
						<!--end::Title-->
					</div>
					<!--end::Content-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-top min-h-120px min-h-lg-300px" style="background-image: url(assets/media/illustrations/statistics.png)"></div>
					<!--end::Illustration-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->

						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post" action="<?= url_to('login') ?>">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3"><?= lang('Auth.loginTitle') ?></h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
							<?= view('Myth\Auth\Views\_message_block') ?>
							<!--begin::Input group-->
							<?php if ($config->validFields === ['email']) : ?>
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label fs-6 fw-bolder text-dark"><?= lang('Auth.email') ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" />
									<div class="invalid-feedback">
										<?= session('errors.login') ?>
									</div>
									<!--end::Input-->
								</div>
							<?php else : ?>
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label fs-6 fw-bolder text-dark"><?= lang('Auth.emailOrUsername') ?></label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" />
									<!--end::Input-->
									<div class="invalid-feedback">
										<?= session('errors.login') ?>
									</div>
								</div>
							<?php endif; ?>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0"><?= lang('Auth.password') ?></label>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
								<div class="invalid-feedback">
									<?= session('errors.password') ?>
								</div>
								<!--end::Input-->
							</div>
							<?php if ($config->allowRemembering) : ?>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-check-input mb-5" <?php if (old('remember')) : ?> checked <?php endif ?>>
										<?= lang('Auth.rememberMe') ?>
									</label>
								</div>

							<?php endif; ?>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-primary w-100 btn-block"><?= lang('Auth.loginAction') ?></button>
								<!--end::Submit button-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
					<!--begin::Links-->
					<div class="d-flex flex-center fw-bold fs-6">
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted fw-bold me-1">2023©</span>
							<a href="https://www.intens.co.id/" target="_blank" class="text-gray-800 text-hover-primary">PT. Inti Konten Indonesia</a>
						</div>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>