<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>

<script>
am4core.ready(function () {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create('kt_amcharts_1', am4charts.XYChart)
chart.colors.step = 2;

chart.legend = new am4charts.Legend()
chart.legend.position = 'top'
chart.legend.paddingBottom = 20
chart.legend.labels.template.maxWidth = 75

var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
xAxis.dataFields.category = 'category'
xAxis.renderer.cellStartLocation = 0.1
xAxis.renderer.cellEndLocation = 0.9
xAxis.renderer.grid.template.location = 0;

var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
yAxis.min = 0;

function createSeries(value, name) {
	var series = chart.series.push(new am4charts.ColumnSeries())
	series.dataFields.valueY = value
	series.dataFields.categoryX = 'category'
	series.name = name

	series.events.on('hidden', arrangeColumns);
	series.events.on('shown', arrangeColumns);

	var bullet = series.bullets.push(new am4charts.LabelBullet())
	bullet.interactionsEnabled = false
	bullet.dy = 30;
	bullet.label.text = '{valueY}'
	bullet.label.fill = am4core.color('#ffffff')

	return series;
}

chart.data = [
	{
		category: 'Sangat Baik',
		first: 40,
		second: <?= count($asetsgtbaik);?>,
		third: 60
	},
	{
		category: 'Baik',
		first: 30,
		second: <?= count($asetbaik);?>,
		third: 69
	},
	{
		category: 'Kurang Baik',
		first: 27,
		second: <?= count($asetkrgbaik);?>,
		third: 45
	},
	{
		category: 'Rusak',
		first: 50,
		second: <?= count($asetrusak);?>,
		third: 22
	}
]


// createSeries('first', 'The First');
createSeries('second', 'Jumlah Aset');
// createSeries('third', 'The Third');

function arrangeColumns() {

	var series = chart.series.getIndex(0);

	var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
	if (series.dataItems.length > 1) {
		var x0 = xAxis.getX(series.dataItems.getIndex(0), 'categoryX');
		var x1 = xAxis.getX(series.dataItems.getIndex(1), 'categoryX');
		var delta = ((x1 - x0) / chart.series.length) * w;
		if (am4core.isNumber(delta)) {
			var middle = chart.series.length / 2;

			var newIndex = 0;
			chart.series.each(function (series) {
				if (!series.isHidden && !series.isHiding) {
					series.dummyData = newIndex;
					newIndex++;
				}
				else {
					series.dummyData = chart.series.indexOf(series);
				}
			})
			var visibleCount = newIndex;
			var newMiddle = visibleCount / 2;

			chart.series.each(function (series) {
				var trueIndex = chart.series.indexOf(series);
				var newIndex = series.dummyData;

				var dx = (newIndex - trueIndex + middle - newMiddle) * delta

				series.animate({ property: 'dx', to: dx }, series.interpolationDuration, series.interpolationEasing);
				series.bulletsContainer.animate({ property: 'dx', to: dx }, series.interpolationDuration, series.interpolationEasing);
			})
		}
	}
}

}); // end am4core.ready()

</script>

<div class="card card-bordered" style="border-radius: 1em;">
    <div class="card-body">
        <div id="kt_amcharts_1" style="height: 500px;"></div>
    </div>
</div>

				<div class="row g-6 g-xl-9">
									<div class="col-lg-6 col-xxl-4">
										<!--begin::Card-->
										<!--begin::Budget-->
										<div class="card h-100" style="border-radius: 1em;">
											<div class="card-body p-9">
												<div class="fs-2hx fw-bolder"><?= sprintf("%02d",count($totalaset));?></div>
												<div class="fs-4 fw-bold text-gray-400 mb-7">Total Aset</div>
												<div class="fs-6 d-flex justify-content-between mb-4">
													<div class="fw-bold"><span class="badge badge-light-primary">Aset dengan Kondisi Sangat Baik</span></div>
													<div class="d-flex fw-bolder"><?= count($asetsgtbaik);?></div>
												</div>
												<div class="separator separator-dashed"></div>
												<div class="fs-6 d-flex justify-content-between my-4">
													<div class="fw-bold"><span class="badge badge-light-success">Aset dengan Kondisi Baik</span></div>
													<div class="d-flex fw-bolder"><?= count($asetbaik);?></div>
												</div>
												<div class="separator separator-dashed"></div>
												<div class="fs-6 d-flex justify-content-between my-4">
													<div class="fw-bold"><span class="badge badge-light-warning">Aset dengan Kondisi Kurang Baik</span></div>
													<div class="d-flex fw-bolder"><?= count($asetkrgbaik);?></div>
												</div>
                                                <div class="separator separator-dashed"></div>
												<div class="fs-6 d-flex justify-content-between my-4">
													<div class="fw-bold"><span class="badge badge-light-danger">Aset dengan Kondisi Rusak</span></div>
													<div class="d-flex fw-bolder"><?= count($asetrusak);?></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-xxl-4">
										<!--begin::Budget-->
										<div class="card h-100" style="border-radius: 1em;">
											<div class="card-body p-9">
												<div class="fs-2hx fw-bolder">RP. <?php foreach($totalhargaaset as $tl):?><?= number_format($tl['harga']);?><?php endforeach;?></div>
												<div class="fs-4 fw-bold text-gray-400 mb-7">Total Harga Aset</div>
												<div class="fs-6 d-flex justify-content-between mb-4">
													<div class="fw-bold">Rata-Rata Harga Aset</div>
													<div class="d-flex fw-bolder">
													<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-right.svg-->
													<span class="svg-icon svg-icon-3 me-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.5" transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553)" x="10.6464466" y="5.85355339" width="2" height="14" rx="1" />
																<path d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->RP. <?php foreach($avgharga as $avg):?><?= number_format($avg['harga']);?><?php endforeach;?></div>
												</div>
												<div class="separator separator-dashed"></div>
												<div class="fs-6 d-flex justify-content-between my-4">
													<div class="fw-bold">Harga Aset Terendah</div>
													<div class="d-flex fw-bolder">
													<!--begin::Svg Icon | path: icons/duotone/Navigation/Down-left.svg-->
													<span class="svg-icon svg-icon-3 me-1 svg-icon-danger">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.5" transform="translate(12.353553, 12.146447) rotate(-135.000000) translate(-12.353553, -12.146447)" x="11.3535534" y="5.14644661" width="2" height="14" rx="1" />
																<path d="M15.8890873,16.0961941 C16.441372,16.0961941 16.8890873,16.5439093 16.8890873,17.0961941 C16.8890873,17.6484788 16.441372,18.0961941 15.8890873,18.0961941 L7.40380592,18.0961941 C6.86841446,18.0961941 6.42800568,17.6745174 6.40474976,17.1396313 L6.05119637,9.00790332 C6.02720666,8.45613984 6.45505183,7.98939965 7.00681531,7.96540994 C7.55857879,7.94142022 8.02531897,8.36926539 8.04930869,8.92102887 L8.36127239,16.0961941 L15.8890873,16.0961941 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->RP. <?php foreach($minharga as $min):?><?= number_format($min['harga']);?><?php endforeach;?></div>
												</div>
												<div class="separator separator-dashed"></div>
												<div class="fs-6 d-flex justify-content-between mt-4">
													<div class="fw-bold">Harga Aset Termahal</div>
													<div class="d-flex fw-bolder">
													<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-right.svg-->
													<span class="svg-icon svg-icon-3 me-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.5" transform="translate(11.646447, 12.853553) rotate(-315.000000) translate(-11.646447, -12.853553)" x="10.6464466" y="5.85355339" width="2" height="14" rx="1" />
																<path d="M8.1109127,8.90380592 C7.55862795,8.90380592 7.1109127,8.45609067 7.1109127,7.90380592 C7.1109127,7.35152117 7.55862795,6.90380592 8.1109127,6.90380592 L16.5961941,6.90380592 C17.1315855,6.90380592 17.5719943,7.32548256 17.5952502,7.8603687 L17.9488036,15.9920967 C17.9727933,16.5438602 17.5449482,17.0106003 16.9931847,17.0345901 C16.4414212,17.0585798 15.974681,16.6307346 15.9506913,16.0789711 L15.6387276,8.90380592 L8.1109127,8.90380592 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->RP. <?php foreach($maxharga as $max):?><?= number_format($max['harga']);?><?php endforeach;?></div>
												</div>
											</div>
										</div>
										<!--end::Budget-->
									</div>
									<div class="col-lg-6 col-xxl-4">
										<!--begin::Clients-->
										<div class="card h-100" style="border-radius: 1em;">
											<div class="card-body p-9">
												<!--begin::Heading-->
												<div class="fs-2hx fw-bolder"><?= sprintf("%02d",count($users));?></div>
												<div class="fs-4 fw-bold text-gray-400 mb-7">Users Intens</div>
												<!--end::Heading-->
												<!--begin::Users group-->
												<div class="symbol-group symbol-hover mb-9">
													<?php foreach($users as $user):?>
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="<?=$user['username'];?>">
														<span class="symbol-label bg-warning text-inverse-primary fw-bolder"><?= strtoupper(substr($user['username'], 0, 1)) ?></span>
													</div>
													<?php endforeach;?>
													<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+<?= count($users);?></span>
													</a>
												</div>
												<!--end::Users group-->
												<!--begin::Actions-->
												<?php if (in_groups('Admin')) : ?>
												<div class="d-flex">
													<a href="<?= base_url('/user'); ?>" class="btn btn-primary btn-sm me-3">Tampil Semua User</a>
													<a href="<?= base_url('/register'); ?>" class="btn btn-white btn-sm">Tambah User</a>
												</div>
												<?php endif;?>
												<!--end::Actions-->
											</div>
										</div>
										<!--end::Clients-->
									</div>
								</div>

<?= $this->endSection() ?>