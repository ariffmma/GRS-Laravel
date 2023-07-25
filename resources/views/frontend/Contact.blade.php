<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
	<head> @include('frontend.head')
		<link rel="stylesheet" href="{{asset('frontend/Contact.css')}}" media="screen">
		<link rel="stylesheet" href="{{asset('frontend/map-contact.css?ver=')}}{{ date('YmdHis')}}" media="screen">
		<link rel="stylesheet" href="{{asset('frontend/mapbox-gl.css?ver=')}}{{ date('YmdHis')}}" media="screen">
		<script src="{{asset('frontend/js/map/mapbox-gl.js')}}"></script>
		<script src="{{asset('frontend/js/map/popmotion.xl.min.js')}}"></script>
		{{-- <script src="{{asset('frontend/js/map/map-contact.js?ver=')}}{{ date('YmdHis')}}"></script> --}}
	</head>
	<body class="u-body u-overlap u-xl-mode" data-lang="en"> @include('frontend.header') <section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
		<section class="u-clearfix u-section-2" id="sec-a1d7">
			<div id="map"></div>
		</section>

		<section class="u-align-center u-clearfix u-section-4" id="sec-8cd8">
			<div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
				<h2 class="u-align-left u-custom-font u-text u-text-custom-color-3 u-text-1">Contact Us</h2>
				<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
					<div class="u-layout">
						<div class="u-layout-row">
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
								<div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
									@foreach($projects as $project)
										<div> [{{ $project->title}}]</div>
										<div>
											[{{ $project->latlong}}]
										</div>
									@endforeach
									<h6 class="u-custom-font u-text u-text-custom-color-4 u-text-2">GLOBAL RANCANG SELARAS</h6>
									<br>
									<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
										<a class="link" href="mailto:studio@globalrancangselaras.com" target="_blank">studio@globalrancangselaras.com</a>
										<br>
										<a class="link" href="https://www.google.com/maps/place/Global+Rancang+Selaras.+PT/@-7.7247442,110.4043961,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a59eb0214b69d:0x97b808be7f71a48b!8m2!3d-7.7247495!4d110.4069764!16s%2Fg%2F1pzqk_dwc?entry=ttu" target="_blank">Jl. Apel No. 111, Nglaban, Ngaglik <br>Sleman, Yogyakarta, Indonesia 55581 </a>
										<br>
										<i>whatsapp</i> : <a class="link" href="https://wa.me/6281125013111" target="_blank">+6281125013111</a>
										<br>+62 274 880637 <br>
										<!-- <br><a href="https://wa.me/6281125013111" target="_blank" style="display: flex; align-items: center; color: #1A1A1A;"><img src="{{asset('frontend/images/wa.png')}}" style="width: 168px; padding-right: 10px;" alt=""></a><br> -->
									</p>
								</div>
							</div>
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
								<div class="u-container-layout u-valign-top u-container-layout-2">
									<div class="u-expanded-width u-form u-form-1">
										<div class="login-wrap">
											<div class="login-html">
												<!-- <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab u-text-1">Business</label><input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab u-text-1">Firm</label> -->
												<div class="login-form">
													<div class="">
														<form action="{{ route('business.submit') }}" method="POST" enctype="multipart/form-data" role="form" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;"> @csrf <div class="u-form-group u-form-categori u-label-none">
																<label for="name-3b9a" class="u-label"></label>
																<select name="categori" onChange="cateChange(event)" class="u-custom-font u-input u-input-rectangle u-input-1">
																	<option value="enquiry">Enquiry</option>
																	<option value="press">Press</option>
																	<option value="jobs">Jobs</option>
																</select>
															</div>
															<div class="u-form-group u-form-name u-label-none">
																<label for="name-3b9a" class="u-label">Name</label>
																<input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required="">
															</div>
															<div class="u-form-email u-form-group u-label-none">
																<label for="email-3b9a" class="u-label">Email</label>
																<input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required="">
															</div>
															<div class="" id="enquiry" style="display:flex; width: 100%">
																<div class="u-form-group u-form-name u-label-none">
																	<label for="name-3b9a" class="u-label">Company</label>
																	<input type="text" placeholder="Enter your Company" id="name-3b9a" name="company" class="u-custom-font u-input u-input-rectangle u-input-1">
																</div>
																<div class="u-form-group u-form-name u-label-none">
																	<label for="name-3b9a" class="u-label">No Telp</label>
																	<input type="text" placeholder="Enter your No Telp" id="name-3b9a" name="no_hp" class="u-custom-font u-input u-input-rectangle u-input-1">
																</div>
															</div>
															<div class="u-form-group u-form-message u-label-none">
																<label for="message-3b9a" class="u-label">Message</label>
																<textarea placeholder="Enter your message" rows="4" cols="50" id="message-3b9a" name="message" class="u-custom-font u-input u-input-rectangle u-input-3" required=""></textarea>
															</div>
															<div class="u-align-left u-form-group u-form-submit">
																<button type="submit" class="u-border-none u-btn  u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</button>
															</div>
														</form>
													</div>
													<!-- <div class="sign-up-htm"><form action="{{ route('firm.submit') }}" method="POST" enctype="multipart/form-data" role="form" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;" >
                            @csrf
                              <div class="u-form-group u-form-name u-label-none"><label for="name-3b9a" class="u-label">Name</label><input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required=""></div><div class="u-form-email u-form-group u-label-none"><label for="email-3b9a" class="u-label">Email</label><input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required=""></div><div class="u-form-group u-form-message u-label-none"><label for="message-3b9a" class="u-label">Link Drive</label><textarea placeholder="Enter your G-drive link" rows="2" cols="50" id="message-3b9a" name="link" class="u-custom-font u-input u-input-rectangle u-input-3" required=""></textarea></div><div class="u-align-left u-form-group u-form-submit"><button type="submit" class="u-border-none u-btn u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</button></div></form></div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> @include('frontend.footer') 
<script>
	const {
	svg,
	css,
	timeline,
	physics,
	chain,
	delay,
	tween,
	easing
	} = window.popmotionXL;
	const markers = [];

	function getComputedTranslateXY(obj) {
	const transArr = [];
	if (!window.getComputedStyle) return;
	const style = getComputedStyle(obj),
		transform = style.transform || style.webkitTransform || style.mozTransform;
	let mat = transform.match(/^matrix3d\((.+)\)$/);
	if (mat) return parseFloat(mat[1].split(', ')[13]);
	mat = transform.match(/^matrix\((.+)\)$/);
	mat ? transArr.push(parseFloat(mat[1].split(', ')[4])) : 0;
	mat ? transArr.push(parseFloat(mat[1].split(', ')[5])) : 0;
	return transArr;
	}
	// Get X and Y Width of window
	function getWindowXYSize() {
	const windowXY = [];
	const w = window;
	const d = document;
	const e = d.documentElement;
	const g = d.getElementsByTagName('body')[0];
	const x = w.innerWidth || e.clientWidth || g.clientWidth;
	const y = w.innerHeight || e.clientHeight || g.clientHeight;
	windowXY.push(x, y);
	return windowXY;
	}
	// 🏄 ICONS
	const iconCity = `<path class="e-marker__icon e-marker__icon--city" d="M41.1,68.7V58.5L36,53.4l-5.1,5.1v3.4H20.8v23.7h30.5V68.7H41.1z M27.5,82.2h-3.4v-3.4h3.4V82.2z M27.5,75.4h-3.4V72h3.4V75.4z M27.5,68.7h-3.4v-3.4h3.4V68.7z M37.7,82.2h-3.4v-3.4h3.4V82.2z M37.7,75.4h-3.4V72h3.4V75.4z M37.7,68.7h-3.4v-3.4h3.4V68.7z M37.7,61.9h-3.4v-3.4h3.4V61.9z M47.9,82.2h-3.4v-3.4h3.4V82.2z M47.9,75.4h-3.4V72h3.4V75.4z"/>`;
	// 💻 DATA

	const geojson = {
		"type": "FeatureCollection",
		"features": [
			@foreach($projects as $project)
				{
					"type": "Feature",
					"properties": {
					"title": " {{ $project->title }}",
					"imageUrl": "https://c1.staticflickr.com/5/4241/35467523155_346b08810f_q.jpg",
					"type": "city",
					"iconSize": [60, 60]
					},
					"geometry": {
					"type": "Point",
					"coordinates": [{{ $project->latlong}}]
					}
				}, 
			@endforeach
		]
	};
	// 🌎 CREATE GLORIOUS MARKERS
	function renderMarker(marker) {
	const {
		title,
		imageUrl,
		type
	} = marker.properties;
	const titleArr = title.split(' ');
	const titleLast = titleArr.slice(Math.ceil(titleArr.length / 2), titleArr.length);
	const titleFirst = titleArr.slice(0, Math.ceil(titleArr.length / 2));
	let currentIcon = '';
	switch (type) {
		case 'beach':
		currentIcon = iconBeach;
		break;
		case 'city':
		currentIcon = iconCity;
		break;
		case 'mountain':
		currentIcon = iconMountain;
		break;
		case 'jungle':
		currentIcon = iconJungle;
		break;
		default:
		currentIcon = '';
	};
	return `
	
	<div class="row" style="text-align:center">
			<div class="col-12">
				<svg class="e-marker" version="1.1" style="padding-bottom:3px"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 72 130.7" width="36">
					<defs>
						<clipPath id="circle">
						<path d="M36,97.4c15,0,27.3-12.2,27.3-27.3c0-15-12.2-27.3-27.3-27.3S8.7,55.1,8.7,70.2S21,97.4,36,97.4z"/>
						</clipPath>
					</defs>
					<path class="e-marker__marker" d="M60.7,45.4C54.1,38.8,45.3,35.2,36,35.2c-9.3,0-18.1,3.6-24.7,10.3C4.6,52,1,60.8,1,70.2c0,6.3,1.5,11.6,4.6,16.7C8.4,91.3,12.1,95,16,98.9c7.3,7.2,15.5,15.4,19,30.5c0.1,0.5,0.5,0.8,1,0.8s0.9-0.3,1-0.8c3.5-15.1,11.7-23.3,19-30.5c3.9-3.9,7.6-7.6,10.4-12.1c3.1-5.1,4.6-10.3,4.6-16.7C71,60.8,67.4,52,60.7,45.4z M36,97.4c-15,0-27.3-12.2-27.3-27.3S21,42.9,36,42.9c15,0,27.3,12.2,27.3,27.3C63.3,85.2,51,97.4,36,97.4z"/>
					<path class="e-marker__circle" d="M36,97.4c15,0,27.3-12.2,27.3-27.3c0-15-12.2-27.3-27.3-27.3S8.7,55.1,8.7,70.2S21,97.4,36,97.4z"/>
					${currentIcon}
					<image class="e-marker__image" width="100%" height="100%" clip-path="url(#circle)" xlink:href="${imageUrl}" />
				</svg>
			</div>
			<div class="col-12">
				<text class="e-marker__text" transform="matrix(1 0 0 1 0 13.9998)">
					<tspan x="50%" y="30%" >${title}</tspan>
				</text>
			</div>
		</div>
	`;
	}
	// ➡️ Offset the map when a marker is too close to the edge for all sides but the bottom
	function offSetMarker(marker, markerGrowSize, map) {
	// Set the max width and height of the marker and shrink it a bit by multiplying with 0.x. This is to compensate for padding around the marker
	const markerMaxWidth = marker.offsetWidth * markerGrowSize * 0.55;
	const markerMaxHeight = marker.offsetHeight * markerGrowSize * 0.7;
	const markerOffSetX = getComputedTranslateXY(marker)[0];
	const markerOffSetY = getComputedTranslateXY(marker)[1];
	if (markerOffSetY < markerMaxHeight || markerOffSetX < markerMaxWidth || getWindowXYSize()[0] - markerOffSetX < markerMaxWidth + marker.offsetWidth) {
		let offSetY = 0;
		let offSetX = 0;
		if (markerOffSetY < markerMaxHeight) {
		offSetY = markerOffSetY - markerMaxHeight;
		}
		if (markerOffSetX < markerMaxWidth) {
		offSetX = markerOffSetX - markerMaxWidth;
		}
		// Add `marker.offsetWidth` to this calculation because the position is calculated from top-left
		if (getWindowXYSize()[0] - markerOffSetX < markerMaxWidth + marker.offsetWidth) {
		offSetX = markerMaxWidth + marker.offsetWidth - (getWindowXYSize()[0] - markerOffSetX);
		}
		map.panBy([offSetX, offSetY]);
	}
	}
	// 🌎 MAP
	function initMap(map) {
	const bounds = new mapboxgl.LngLatBounds();
	// ADD MARKERS TO MAP
	geojson.features.forEach(marker => {
		const svgMarker = renderMarker(marker);
		// To get an actual DOM node instead of a string we append our marker to a dummy element and query it again with 'firstchild'. This way we retrieve a normal DOM node
		const placeholder = document.createElement('div');
		placeholder.innerHTML = svgMarker;
		const el = placeholder.firstChild;
		el.nextSibling.addEventListener('click', () => {
		map.flyTo({
			center: marker.geometry.coordinates,
			zoom: 11
		});
		});
		// Extend bounds with marker coordinates
		bounds.extend(marker.geometry.coordinates);
		markers.push(el.nextSibling);
		new mapboxgl.Marker(el.nextSibling, {
		offset: [0, -30]
		}).
		setLngLat(marker.geometry.coordinates).
		addTo(map);
	});
	map.on('load', e => {
		setTimeout(() => {
		map.fitBounds(bounds, {
			padding: {
			top: 50,
			bottom: 50,
			left: 50,
			right: 50
			},
			easing(t) {
			return t * (2 - t);
			}
		});
		}, 300);
	});
	markers.forEach(marker => {
		const markerSVG = marker.querySelector('svg');
		const markerIcon = marker.querySelector('.e-marker__icon');
		const markerImage = marker.querySelector('.e-marker__image');
		const markerText = marker.querySelector('.e-marker__text');
		const markerRenderer = css(markerSVG, {
		enableHardwareAcceleration: false
		});
		const iconRenderer = svg(markerIcon);
		const imageRenderer = css(markerImage);
		const textRenderer = css(markerText);
		const markerGrowSize = 3;
		const markerScale = physics({
		from: 1,
		to: markerGrowSize,
		velocity: 20,
		spring: 300,
		friction: 0.8,
		onUpdate: x => markerRenderer.set('scale', x)
		});
		const iconScale = tween({
		from: 1,
		to: 0,
		duration: 300,
		ease: easing.backIn,
		onUpdate: x => iconRenderer.set('scale', x)
		});
		const imageScale = tween({
		from: 0,
		to: 1,
		duration: 300,
		ease: easing.backOut,
		onUpdate: x => imageRenderer.set('scale', x)
		});
		const textToggle = tween({
		from: 0,
		to: 1,
		duration: 300,
		ease: easing.backOut,
		onUpdate: x => textRenderer.set('opacity', x)
		});
		const hoverTimeline = timeline([
		iconScale, '0',
		imageScale, '-100',
		textToggle
		]);
		marker.addEventListener('mouseenter', () => {
		offSetMarker(marker, markerGrowSize, map);
		markerScale.props.from = 1;
		markerScale.props.to = markerGrowSize;
		imageScale.props.playDirection = 1;
		iconScale.props.playDirection = 1;
		hoverTimeline.props.playDirection = 1;
		textToggle.props.playDirection = 1;
		markerScale.start();
		hoverTimeline.start();
		});
		marker.addEventListener('mouseleave', () => {
		markerScale.props.from = markerGrowSize;
		markerScale.props.to = 1;
		hoverTimeline.reverse();
		hoverTimeline.start();
		markerScale.start();
		});
	});
	}
	// 👉🏼 Fetch Map Style data - Vector tiles hosted by OpenMapTiles.com
	// If you fork or copy this mapbox, pretty pleae create your own *FREE* API key on maptiler.com
	const initMapbox = async () => {
	const response = await fetch('https://api.maptiler.com/maps/hybrid/style.json?key=SlErNwiU08MKXckwr5a2');
	try {
		if (!response.ok) throw Error(response.statusText);
		const style = await response.json();
		const map = new mapboxgl.Map({
		container: 'map',
		style: style,
		zoom: 2,
		center: [117.59332822794994, -1.5688676259254541]
		});
		initMap(map);
	} catch (error) {
		console.error({
		error
		});
		const errorWrap = document.createElement("div");
		errorWrap.innerHTML = " < h1 > Uh Oh, we 've exceeded the Maptiler API limits again 😭</h1>";
		document.body.appendChild(errorWrap);
	}
	};
	initMapbox();
</script>
	</body>
</html>