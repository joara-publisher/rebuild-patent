// const AmbientLight = THREE.AmbientLight;
// const DirectionalLight = THREE.DirectionalLight;
// const Matrix4 = THREE.Matrix4;
// const PerspectiveCamera = THREE.PerspectiveCamera;
// const Scene = THREE.Scene;
// const WebGLRenderer = THREE.WebGLRenderer;

// let map;
// let overlayInitialized = false; // WebGL 오버레이가 이미 초기화되었는지 확인하기 위한 변수

// const mapOptions = {
// tilt: 0,
// heading: 0,
// zoom: 18,
// center: { lat: 37.504198, lng: 127.049295 },
// mapId: "",
// // disable interactions due to animation loop and moveCamera
// disableDefaultUI: true,
// gestureHandling: "none",
// keyboardShortcuts: false,
// };

// function initMap() {
// const mapDiv = document.getElementById("overlayMap");
// map = new google.maps.Map(mapDiv, mapOptions);
// overlayInitialized = true;
// // 회사 위치 마커
// const marker = new google.maps.Marker({
// 	position: { lat: 37.504198, lng: 127.049295 }, // 회사 좌표
// 	map: map,
// 	title: "특허법인 테헤란 서울본사",
// });
// // 회사 정보 내용 (HTML 형식으로 작성 가능)
// const companyInfo = `
// 	<div style="font-size: 14px;">
// 		<h3 style="font-weight:700">특허법인 테헤란 서울본사</h3>
// 		<p>주소: 서울특별시 강남구 테헤란로 420, 9층 (KT 선릉타워 West)</p>
// 		<p>전화: 1800-8230</p>
// 	</div>
// `;

// // InfoWindow 생성 (마커 클릭 시 열릴 정보 창)
// const infoWindow = new google.maps.InfoWindow({
// 	content: companyInfo,
// });

// // 마커 클릭 이벤트 리스너
// marker.addListener('click', function () {
// 	infoWindow.open(map, marker); // 마커 클릭 시 정보 창 열기
// });
// }

// function initWebglOverlayView(map) {

// let scene, renderer, camera, loader;
// const webglOverlayView = new google.maps.WebGLOverlayView();

// webglOverlayView.onAdd = () => {
// 	// Set up the scene.
// 	scene = new Scene();
// 	camera = new PerspectiveCamera();
// 	const ambientLight = new AmbientLight(0xffffff, 0.75); // Soft white light.
// 	scene.add(ambientLight);

// 	const directionalLight = new DirectionalLight(0xffffff, 0.25);
// 	directionalLight.position.set(0.5, -1, 0.5);
// 	scene.add(directionalLight);

// 	// Load the model.
// 	loader = new THREE.GLTFLoader();
// 	const source = "https://raw.githubusercontent.com/googlemaps/js-samples/main/assets/pin.gltf";
// 	loader.load(source, (gltf) => {
// 		gltf.scene.scale.set(8, 8, 14);
// 		gltf.scene.rotation.x = Math.PI; // Rotations are in radians.
// 		scene.add(gltf.scene);
// 	});
// };

// webglOverlayView.onContextRestored = ({ gl }) => {
// 	// Create the js renderer, using the map's WebGL rendering context.
// 	renderer = new WebGLRenderer({
// 		canvas: gl.canvas,
// 		context: gl,
// 		...gl.getContextAttributes(),
// 	});
// 	renderer.autoClear = false;

// 	// Wait to move the camera until the 3D model loads.
// 	loader.manager.onLoad = () => {
// 		renderer.setAnimationLoop(() => {
// 			webglOverlayView.requestRedraw();
// 			const { tilt, heading, zoom } = mapOptions;
// 			map.moveCamera({ tilt, heading, zoom });

// 			// Rotate the map 360 degrees.
// 			if (mapOptions.tilt < 67.5) {
// 				mapOptions.tilt += 0.5;
// 			} else if (mapOptions.heading <= 360) {
// 				mapOptions.heading += 0.2;
// 				mapOptions.zoom -= 0.0005;
// 			} else {
// 				renderer.setAnimationLoop(null);
// 			}
// 		});
// 	};
// };

// webglOverlayView.onDraw = ({ gl, transformer }) => {
// 	const latLngAltitudeLiteral = {
// 		lat: mapOptions.center.lat,
// 		lng: mapOptions.center.lng,
// 		altitude: 100,
// 	};

// 	// Update camera matrix to ensure the model is georeferenced correctly on the map.
// 	const matrix = transformer.fromLatLngAltitude(latLngAltitudeLiteral);
// 	camera.projectionMatrix = new Matrix4().fromArray(matrix);

// 	webglOverlayView.requestRedraw();
// 	renderer.render(scene, camera);
// 	// Sometimes it is necessary to reset the GL state.
// 	renderer.resetState();
// };

// webglOverlayView.setMap(map);
// }
// window.initMap = initMap;

// $(function(){
// $(".mapArti .btnWrap .btn").click(function () {
// 	let target = $(this).index();
// 	$(".mapArti .btnWrap .btn").removeClass('active');
// 	$(".mapArti .mapView .view").removeClass('active');
// 	$(".mapArti .btnWrap .btn").eq(target).addClass('active');
// 	$(".mapArti .mapView .view").eq(target).addClass('active');
	
// 	if (target == 1) {
// 		// WebGL 오버레이를 추가할 때 map을 전달
// 	if (map) {
// 		initWebglOverlayView(map);
// 	} else {
// 		location.reload();
// 		console.error('none');
// 	}
// 	}
// });
// })