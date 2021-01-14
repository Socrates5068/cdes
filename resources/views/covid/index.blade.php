<!DOCTYPE html>
<html>
<head>

	<title>SEDES Potosi | covid-19 | Sars-Cov-2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="{{ asset('images/icono.ico') }}">
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="Informacion del Corona virus en el mundo, el virus que inicio en Wuhan, en la provincia de Hubei, en China y tiene al mundo entero preocupado" />
	<meta name="keywords" content="sedes, potosi Bolivia, sedes potosi, coronavirus, COVID-19, salud 2019, muertes por coronavirus, recuperados corona virus, Sars-Cov-2" />
	
	
    <meta property="og:title" content="SEDES POTOSI, SARS-CoV-2, Covid-19">
    <meta property="og:description" content="Informacion del Corona virus en el mundo, el virus que inicio en Wuhan, en la provincia de Hubei, en China y tiene al mundo entero preocupado">
    
    <meta property="og:url" content="{{route('covid.pais')}}">
    <meta property="og:image" content="{{asset('dist/mapa.jpg')}}">
    
    <meta name="twitter:site" content="@Shassain666" >
    <meta name="twitter:creator" content="@Shassain666" >
    <meta name="twitter:card" content="summary_large_image" >
    
    <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
    
	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

	<!-- Openlayers -->
    <link rel="stylesheet" href="https://openlayers.org/en/latest/css/ol.css" />
	<script type="text/javascript" src="https://openlayers.org/en/latest/build/ol.js"></script>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL,Object.assign"></script>
	

	<link rel="stylesheet" href="{{asset('dist/ol-ext.css')}}" />
	<script type="text/javascript" src="{{asset('dist/ol-ext.js')}}"></script>
	<script type="text/javascript" src="{{asset('dist/chart.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('dist/mycvidcss.css?v=uri7')}}"></script>
	    <style>
    .cajaf{
      position: fixed;
      bottom: 60px;
      right: 10px;
      width: 60px;
      height: 60px;
      z-index: 100000;
    }
    .cajaf:hover{
      height: 240px;
    }
    .cajaf:hover .caja1{
      visibility: visible;
      bottom: 70px;
    }
    .cajaf:hover .caja2{
      visibility: visible;
      bottom: 140px;
    }
    .cajaf:hover .caja3{
      visibility: visible;
      bottom: 210px;
    }
    .caja2:hover:before,.caja1:hover:before,.caja3:hover:before{
      visibility: visible;
      color:#000;
    }
    .btn_roundf{
      position: absolute;
      bottom:0 ;
      right: 0;
      border:1px solid #FF1700;
      background: #FF1700;
      color:#fff;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      z-index: 90090; 
      display: flex;
      align-content: center;
      justify-content: center;
      text-align: center;
      align-items: center;
      font-size: .8em;
    }
    .caja1{
      position: absolute;
      bottom: 0;
      right: 0;
      border:1px solid #1da1f2;
      background: #1da1f2;
      color: #fff;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      z-index: 90080; 
      display: flex;
      align-content: center;
      justify-content: center;
      text-align: center;
      align-items: center;
      -webkit-transition: all .3s;
      visibility: hidden;
    }
    .caja3{
      position: absolute;
      bottom: 0;
      right: 0;
      border:1px solid #283593;
      background: #283593;
      color:#fff;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      z-index: 9070; 
      display: flex;
      align-content: center;
      justify-content: center;
      text-align: center;
      align-items: center;
      visibility: hidden;
      -webkit-transition: all .6s;
    }
    .caja2{
      position: absolute;
      bottom: 0;
      right: 0;
      border:1px solid #f09433;
      background: #f09433; 
      background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
      background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
      background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
      color: #fff;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      z-index: 9050; 
      display: flex;
      align-content: center;
      justify-content: center;
      text-align: center;
      align-items: center;
      -webkit-transition: all .9s;
      visibility: hidden;
    }
    </style>
</head>
<body >
    <div class="cajaf">
      <a href="#" class="btn_roundf" title="COVID 19" alt="corona virus">COVID-19</a>
      
      
      <a class="caja1" href="{{route('covid.pais')}}" alt="covid pais" title="covid pais">Por Pais</a>
      
      <a class="caja2" target="_blank" href="https://sedespotosi.com" alt="sedes" title="sedes">SEDES Potosi</a>
    </div>
	<div class="head">
		<h1>Coronavirus COVID-19</h1>
	</div>
	<div class="main">
		<div class="derecho">
			<div class="card_300" id="sologradre">
				<div class="card_title">
					{{$t}}
				</div>
				<div class="card_content" >
					<div class="region_name" id="region_name">
						Seleccione una region/torta
					</div>
					<table class="table__shassain">
						<thead>
							<tr>
								<th>Descripcion</th>
								<th>Cantidad</th>
								<th>%</th>
							</tr>
						</thead>
						<tbody id="her"><tr style="color:#F00E0E"><td>Muertos</td><td>-</td><td>-%</td></tr><tr style="color:#24E301"><td>Recuperados</td><td>-</td><td>-%</td></tr><tr style="color:#EEA200"><td>Infectados Activos</td><td>-</td><td>-%</td></tr><tr><td>Total Infectados</td><td>-</td><td>-%</td></tr></tbody>
					</table>
				</div>
			</div>
			<br>
			<div class="card_460">
				<div class="card_title" id="Infectados">
					<div class="cant_title" id="cant_infectados">
						
					</div>
					<span>Infectados</span>
				</div>
				
				<div class="buscador">
					Buscar: <input id="search_infectados" type="text" placeholder="Region / Pais" onkeyup="buscarencolumna('card_infectados',this)">
				</div>
				<div class="container card_content_overflow" id="card_infectados">
					
				</div>
			</div>
		</div>
		<div class="central" style="padding-top: 10px">
			<div id="map" class="in_map"></div>	
			<div class="card_300" id="solopeque">
				<div class="card_title">
					{{$t}}
				</div>
				<div class="card_content">
					<div class="region_name" id="region_name2">
						Seleccione una grafica
					</div>
					<table class="table__shassain">
						<thead>
							<tr>
								<th>Descripcion</th>
								<th>Cantidad</th>
								<th>%</th>
							</tr>
						</thead>
						<tbody id="her2"><tr style="color:#F00E0E"><td>Muertos</td><td>-</td><td>-%</td></tr><tr style="color:#24E301"><td>Recuperados</td><td>-</td><td>-%</td></tr><tr style="color:#EEA200"><td>Infectados Vivos</td><td>-</td><td>-%</td></tr><tr><td>Total Infectados</td><td>-</td><td>-%</td></tr></tbody>
					</table>
				</div>
			</div>
			<!--div class="graficas">
			    
				<ul class="tabs" role="tablist">
				    <li>
				        <input type="radio" name="tabs" id="tab1" checked />
				        <label for="tab1" 
				               role="tab" 
				               aria-selected="true" 
				               aria-controls="panel1" 
				               tabindex="0">Evolucion
				               <span style="color:#F62C26">
                			        Sin actualizacion por el momento!!!
                			    </span>
				               </label>
				        <div id="tab-content1" 
				             class="tab-content" 
				             role="tabpanel" 
				             aria-labelledby="description" 
				             aria-hidden="false">
				          <canvas id="lineChart" style="height: 300px"></canvas>		
				        </div>
				    </li>
				  
				    <li>
				        <input type="radio" name="tabs" id="tab2" />
				        <label for="tab2"
				               role="tab" 
				               aria-selected="false" 
				               aria-controls="panel2" 
				               tabindex="0">Casos Diarios
				                <span style="color:#F62C26">
                			        Sin actualizacion por el momento!!!
                			    </span>
				               </label>
				        <div id="tab-content2" 
				             class="tab-content"
				             role="tabpanel" 
				             aria-labelledby="specification" 
				             aria-hidden="true">
				             <canvas id="mybarChart" style="height: 300px"></canvas>		
				            
				        </div>
				    </li>
				</ul>

				
			</div-->
			

		</div>
		<div class="derecho">
			<div class="card">
				<div class="card_title" id="Recuperados" style="color: #24E301;">
					<div class="cant_title" id="cant_recuperados">
						
					</div>
					<span>Recuperados</span>
				</div>
				<div class="buscador">
					Buscar: <input id="search_recuperados" type="text" placeholder="Region / Pais" onkeyup="buscarencolumna('card_recuperados',this)">
				</div>
				<div class="container card_content_overflow_small" id="card_recuperados">
					
				</div>
			</div>
			<br>
			<div class="card">
				<div class="card_title" id="Muertos" style="color: #F00E0E;">
					<div class="cant_title" id="cant_muertos">
						
					</div>
					<span>Muertos</span>
				</div>
				<div class="buscador">
					Buscar: <input id="search_muertos" type="text" placeholder="Region / Pais" onkeyup="buscarencolumna('card_muertos',this)">
				</div>
				<div class="container card_content_overflow_small" id="card_muertos">
					
				</div>
				
			</div>
		</div>
	</div>
	<div class="foot">
		<div class="derecho centrado" style="font-size: 15px;text-align: center">
			<b style="color: #113F63;font-size: 22px">Fuente oficial:</b>
			 <a target="_blank" href="https://gisanddata.maps.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6">Coronavirus COVID-19 Global Cases by Johns Hopkins CSSE</a>
			<div style="height: 180px;width: 180px">
				<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="ember11" class="ember-view" viewBox="1.3700000047683716 1 40.260005950927734 43.16999816894531"><g class="icon">
				  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="fill: rgb(255, 255, 255);" xml:space="preserve">

					.st0{clip-path:url(#SVGID_2_);fill:#FFFFFF;}

				<g>
					<defs>
						<rect id="SVGID_1_" width="43" height="46" vector-effect="non-scaling-stroke"></rect>
					</defs>
					<clipPath id="SVGID_2_">
						<use xlink:href="#SVGID_1_" style="overflow:visible;"></use>
					</clipPath>
					<path class="st0" d="M32.74,5.43c-0.03-0.06-1.96-1.01-1.96-1.01c-2.45-0.51-6.47-0.29-9.28,0.75H21.5
						c-2.81-1.03-6.83-1.26-9.28-0.75c0,0-1.92,0.95-1.95,1.01L7.28,12c-0.1,0.18,0.06,0.34,0.23,0.31c4.53-0.86,9.73-1.12,13.99-1.12h0
						c4.26,0,9.46,0.27,13.99,1.12c0.17,0.03,0.32-0.12,0.23-0.31L32.74,5.43z M20.8,10.16c-3.23-0.13-8.8-0.13-11.59,0.87l1.98-4.97
						l1.35-0.72L11.1,9.43c2.91-0.55,6.13-0.75,9.7,0.41L20.8,10.16z M22.16,10.16V9.85c3.57-1.17,6.79-0.96,9.7-0.41l-1.44-4.09
						l1.36,0.72l1.98,4.97C31.1,10.03,25.53,10.03,22.16,10.16" vector-effect="non-scaling-stroke"></path>
					<path class="st0" d="M39.97,2.97l-0.02-0.01l-0.13-0.03C33.82,1.65,27.66,1,21.5,1C15.34,1,9.16,1.65,3.16,2.94L3.1,2.95L3.04,2.97
						C2.08,3.2,1.37,4.11,1.37,5.15l0,3.27c0,23.54,14.57,33.1,19.04,35.46c0.36,0.19,0.73,0.29,1.1,0.29c0.37,0,0.74-0.1,1.09-0.29
						c4.45-2.36,19.03-11.92,19.03-35.46V5.15C41.62,4.13,40.94,3.24,39.97,2.97 M20.68,42.52C15.76,39.8,5.87,32.1,3.31,16.3l0.12-0.03
						c5.63-1.19,11.43-1.81,17.25-1.87V42.52z M36.26,27.38c0,0-0.01,0.01-0.01,0.02c-1.05,2.17-2.23,4.09-3.48,5.77c0,0,0,0,0,0
						c-1.13,1.53-2.31,2.88-3.48,4.04v-6.37l-3.48-2.32v11.71c-1.29,0.98-2.49,1.73-3.48,2.28V26.21l3.48,2.32v-8.11l3.48,2.32v-7.99
						c1.16,0.1,2.33,0.22,3.48,0.37v9.94L36.26,27.38l-0.01-11.73c1.11,0.19,2.22,0.39,3.32,0.63l0.12,0.03
						C39,20.56,37.77,24.23,36.26,27.38 M22.32,18.1v-3.7c1.16,0.01,2.32,0.04,3.48,0.1v5.92L22.32,18.1z M40.31,8.41
						c0,2.14-0.13,4.17-0.36,6.08c-12.08-2.55-24.79-2.55-36.89,0.01c-0.23-1.92-0.36-3.94-0.36-6.09l0-3.27C2.69,4.7,3,4.33,3.41,4.23
						l0.02-0.01C9.26,2.98,15.3,2.32,21.5,2.32c6.19,0,12.23,0.66,18.04,1.9l0.01,0c0.43,0.09,0.75,0.47,0.75,0.92L40.31,8.41z" vector-effect="non-scaling-stroke"></path>
					<polygon class="st0" points="32.77,25.06 29.29,22.74 29.29,30.85 32.77,33.17 	" vector-effect="non-scaling-stroke"></polygon>
					<path class="st0" d="M13.23,30.17c3.51,0,6.37-2.86,6.37-6.37c0-3.51-2.86-6.37-6.37-6.37c-3.51,0-6.37,2.86-6.37,6.37
						C6.86,27.31,9.72,30.17,13.23,30.17 M14.39,29.24c0.49-0.53,1.08-1.31,1.52-2.31c0.61,0.13,1.14,0.3,1.57,0.46
						C16.7,28.31,15.62,28.98,14.39,29.24 M17.96,26.71c-0.47-0.19-1.06-0.39-1.77-0.55c0.19-0.59,0.32-1.25,0.35-1.97h2.23
						C18.71,25.11,18.42,25.97,17.96,26.71 M17.96,20.87c0.46,0.74,0.75,1.6,0.82,2.52h-2.23c-0.04-0.72-0.17-1.38-0.35-1.97
						C16.91,21.26,17.49,21.06,17.96,20.87 M17.48,20.2c-0.43,0.16-0.96,0.33-1.57,0.46c-0.44-1.01-1.03-1.78-1.52-2.31
						C15.62,18.61,16.7,19.28,17.48,20.2 M13.63,18.72c0.43,0.45,1.01,1.15,1.45,2.09c-0.45,0.06-0.93,0.11-1.45,0.12V18.72z
						 M13.63,21.73c0.63-0.02,1.23-0.07,1.76-0.16c0.18,0.54,0.31,1.15,0.35,1.82h-2.11V21.73z M13.63,24.19h2.11
						c-0.04,0.67-0.17,1.27-0.35,1.82c-0.53-0.09-1.12-0.14-1.76-0.16V24.19z M13.63,26.66c0.52,0.02,1,0.06,1.45,0.12
						c-0.44,0.93-1.02,1.64-1.45,2.08V26.66z M8.98,27.38c0.43-0.16,0.96-0.33,1.57-0.46c0.44,1.01,1.03,1.79,1.52,2.32
						C10.84,28.98,9.77,28.31,8.98,27.38 M12.83,28.86c-0.43-0.45-1-1.15-1.44-2.08c0.45-0.06,0.93-0.11,1.44-0.12V28.86z M12.83,25.85
						c-0.63,0.02-1.22,0.07-1.75,0.16c-0.19-0.55-0.31-1.15-0.35-1.82h2.1V25.85z M12.83,23.39h-2.1c0.04-0.67,0.17-1.27,0.35-1.82
						c0.53,0.09,1.12,0.14,1.75,0.16V23.39z M12.83,20.93c-0.52-0.02-1-0.06-1.44-0.12c0.44-0.93,1.01-1.63,1.44-2.08V20.93z
						 M12.08,18.35c-0.49,0.53-1.08,1.31-1.52,2.32c-0.61-0.13-1.14-0.3-1.57-0.46C9.77,19.27,10.85,18.61,12.08,18.35 M8.5,20.87
						c0.47,0.19,1.06,0.39,1.77,0.55c-0.19,0.59-0.32,1.25-0.35,1.97H7.68C7.75,22.47,8.04,21.62,8.5,20.87 M7.68,24.19h2.23
						c0.04,0.72,0.16,1.38,0.35,1.97c-0.71,0.16-1.3,0.36-1.77,0.55C8.04,25.97,7.75,25.11,7.68,24.19" vector-effect="non-scaling-stroke"></path>
				</g>
				</svg>
				</g></svg>
			</div>
			
		</div>
		<div class="central" style="text-align: center;font-size: 15px">
			<b style="color: #113F63;font-size: 22px">Referencias y Equipos de Trabajo</b>
			<div class="container" style="height: 220px;overflow-y:auto;">
				<ul class="footul">
					<li><a target="_blank" href="https://coronavirus.jhu.edu/">Johns Hopkins University Medicine</a></li>
					<li><a  target="_blank" href="https://www.jhuapl.edu">Johns Hopkins Applied Physics Laboratory</a></li>
					<li><a  target="_blank" href="https://www.thelancet.com/journals/laninf/article/PIIS1473-3099(20)30120-1/fulltext">The Lancet Infectious Diseases</a></li>
					<li><a  target="_blank" href="https://systems.jhu.edu/">The Center for Systems Science and Engineering (CSSE) at JHU</a></li>
					<li><a target="_blank"  href="https://systems.jhu.edu/research/public-health/ncov/">Mapping 2019-nCoV</a></li>
					<li><a  target="_blank" href="https://sedespotosi.com/">SEDES POTOSI</a></li>
					<li><a  target="_blank" href="https://github.com/Viglino/ol-ext">Viglino</a></li>
					
					
				</ul>
				
			</div>		
		</div>
		<div class="derecho centrado" style="font-size: 15px;text-align: center">
			<a  target="_blank" href="https://sedespotosi.com/"><img src="https://sedespotosi.com/assets/img/logo.svg" width="80%"></a>
			<br>
			<b>En colaboracion con:</b>
			<i>Juan Carlos Huallpa Q.</i>
			<div><a href="mailto:shassain5@gmail.com">shassain5@gmail.com</a></div>
			<div><a target="_blank" href="https://www.facebook.com/XxShassainxX">Facebook</a></div>
			<div><a target="_blank" href="https://twitter.com/Shassain666/">Twitter</a></div>
			


		</div>
	</div>


	<!-- DIV pour la carte -->
	

	<script type="text/javascript" src="{{asset('dist/urlsrus.js?v=uri6')}}"></script>
	<script type="text/javascript" >
		var URI_ATCVN=URL_COVID[Number("{{$tipot}}")];
	</script>
	<script type="text/javascript" src="{{asset('dist/mycvidjs.js?v=uri6')}}"></script>	
	
</body>
</html>