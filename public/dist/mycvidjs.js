var graf=null;
    async function allGraf(callback){
      let data=null;
          try{
            $.ajax({
              async:false,
              url:URI_ATCVN.url,
              method:"get",
              success:function(resp){
                callback(resp)
              }
            })
          }
          catch(error){
              console.log(error)
              $("#region_name").html("Error! servidor no disponible, intente actualizando la pagina o vuelva mas tarde")
              $("#region_name2").html("Error! servidor no disponible, intente actualizando la pagina o vuelva mas tarde")
              $("#card_infectados").html("Error! servidor no disponible, intente actualizando la pagina o vuelva mas tarde")
              $("#card_muertos").html("Error! servidor no disponible, intente actualizando la pagina o vuelva mas tarde")
              $("#card_recuperados").html("Error! servidor no disponible, intente actualizando la pagina o vuelva mas tarde")
          }
    }
    var layer = new ol.layer.Tile({
          source: new ol.source.OSM()
        })

      // The map
      var map = new ol.Map
      ({  target: 'map',
        view: new ol.View
        ({  zoom: 4,
          center: [-63.5887*111310,-16.2902*118210]
        }),
        layers: [layer]
      });
    function loadLayer(resp){
      
      var ext = map.getView().calculateExtent(map.getSize());
      var features=[];
      
      var grfica=JSON.parse(resp)
      var placemark=[];
      var total="<ul class='sns'>";
      var cant_total=0;
      var muertos="<ul class='sns'>";
      var cant_muertos=0;
      var recuperados="<ul class='sns'>";
      var cant_recuperados=0;
      for (var i=0; i<grfica.features.length; i++)
      { 
        var {Confirmed, Country_Region, Deaths, Last_Update, Lat, Long_, OBJECTID, Province_State, Recovered }=grfica.features[i].attributes;
        
        var data=[Deaths,Recovered,(Confirmed - Deaths - Recovered)];
        total+=`<li> <div class="div_region"> ${Province_State==null?Country_Region:Province_State} <span> ${Country_Region}</span> </div> <div class="cant_infectados"> ${new Intl.NumberFormat("de-DE").format(Confirmed)} cofirmados </div> <div class="cant_infectados_vivos"> ${new Intl.NumberFormat("de-DE").format((Confirmed - Deaths - Recovered))} activos </div> </li>`;
        cant_total+=Confirmed;
        if(Deaths!=0){
          muertos+=`<li> <div class="div_region"> ${Province_State==null?Country_Region:Province_State} <span> ${Country_Region}</span> </div> <div class="cant_infectados"> ${new Intl.NumberFormat("de-DE").format(Deaths)} muertos </div></li>`; 
          cant_muertos+=Deaths;
        }
        if(Recovered != 0){
          recuperados+=`<li> <div class="div_region"> ${Province_State==null?Country_Region:Province_State} <span> ${Country_Region}</span> </div> <div class="cant_recuperados"> ${new Intl.NumberFormat("de-DE").format(Recovered)} recuperados </div></li>`; 
          cant_recuperados+=Recovered;
        }
        
        features[i] = new ol.Feature(
          { geometry: new ol.geom.Point([Long_*111310,Lat*118210]),
            data: data,
            sum:Confirmed,
            country:Country_Region
          });
      }
      total+=`<ul>`;
      $("#card_infectados").html(total);
      $("#cant_infectados").html(new Intl.NumberFormat("de-DE").format(cant_total));
      $("#card_muertos").html(muertos);
      $("#cant_muertos").html(new Intl.NumberFormat("de-DE").format(cant_muertos));
      $("#card_recuperados").html(recuperados);
      $("#cant_recuperados").html(new Intl.NumberFormat("de-DE").format(cant_recuperados));
      
      
      var tbody="";
      tbody+=`<tr style="color:#F00E0E"><td>Muertos</td>`;
      
      tbody+=`<td>${cant_muertos}</td><td>${new Intl.NumberFormat("de-DE").format((cant_muertos/cant_total)*100)}%</td></tr>`;
      tbody+=`<tr style="color:#24E301"><td>Recuperados</td>`;
      tbody+=`<td>${cant_recuperados}</td><td>${new Intl.NumberFormat("de-DE").format((cant_recuperados/cant_total)*100)}%</td></tr>`;
      tbody+=`<tr style="color:#EEA200"><td>Infectados Activos</td>`;
      tbody+=`<td>${(cant_total - cant_muertos - cant_recuperados)}</td><td>${new Intl.NumberFormat("de-DE").format(((cant_total - cant_muertos - cant_recuperados)/cant_total)*100)}%</td></tr>`;
      tbody+=`<tr><td>Total Infectados</td>`;
      tbody+=`<td>${cant_total}</td><td>100%</td></tr>`;

      $("#her").html(tbody);
      $("#her2").html(tbody);
      var vector = new ol.layer.Vector(
      { name: 'Vecteur',
        source: new ol.source.Vector({ features: features }),
        // y ordering
        renderOrder: ol.ordering.yOrdering(),
        style: function(f) { return getFeatureStyle(f); }
      })


      map.addLayer(vector);

      // Control Select 
      
    }
    
    
  // Layers
  

  // Style function
  var styleCache={};
  
  function getFeatureStyle (feature, sel)
  { var k = $("#graph").val()+"-"+ $("#color").val()+"-"+(sel?"1-":"")+feature.get("data");
      var style = styleCache[k];
      
      var data = feature.get("data");
      var country = feature.get("country");
    if (!style) 
    { var radius = 15;
      // area proportional to data size: s=PI*r^2
      var lo=Number(feature.get("sum"))
    
      var r=100;
      var rr=[5000,10000,15000,20000,30000,40000,50000,80000,1000000000];
      var rr1=[50,80,100,150,250,380,800,1000,1700];
      for(var i=0; i< rr.length;i++){
        if(lo<rr[i]){
          r=rr1[i];
          break;
        }
      }

      radius = 2*Math.sqrt (r / Math.PI);
      
      radius *= (sel?1.2:1);
      
      style = [ new ol.style.Style(
        { image: new ol.style.Chart(
          { type: "pie", 
            radius: radius, 
            data: data, 
            rotateWithView: true,
            stroke: new ol.style.Stroke(
            { color: "#fcfcfc",
              width: 1
            }),
          })
        })];

      // Show values on select
      if (sel)
      { /*
        var sum = 0;
        for (var i=0; i<data.length; i++)
        { sum += data[i];
        }
        */
        var sum = feature.get("sum");
        
            
            $("#region_name").html(country)
            $("#region_name2").html(country)
        var s = 0;
        var tbody="";
        for (var i=0; i<data.length; i++)
        { 
          if(i==0){
            tbody+=`<tr style="color:#F00E0E"><td>Muertos</td>`;
          }
          if(i==1){
            tbody+=`<tr style="color:#24E301"><td>Recuperados</td>`;
          }
          if(i==2){
            tbody+=`<tr style="color:#EEA200"><td>Infectados Activos</td>`;
          }

          var d = data[i];
              var a = (2*s+d)/sum * Math.PI - Math.PI/2; 
          var v = Math.round(d/sum*1000);
          if (v>0)
              { style.push(new ol.style.Style(
            { text: new ol.style.Text(
              { text: (v/10)+"%", /* d.toString() */
                      offsetX: Math.cos(a)*(radius+3),
                      offsetY: Math.sin(a)*(radius+3),
                textAlign: (a < Math.PI/2 ? "left":"right"),
                textBaseline: "middle",
                stroke: new ol.style.Stroke({ color:"#000", width:1 }),
                fill: new ol.style.Fill({color:"#000"})
              })
            }));
                tbody+=`<td>${data[i]}</td><td>${(v/10)}%</td></tr>`;
          }else{
            tbody+=`<td>${data[i]}</td><td>${v}%</td></tr>`;
          }

          s += d;
        }
        tbody+=`<tr><td>Total</td><td>${sum}</td><td>100%</td></tr>`;
        
        $("#her").html(tbody);
        $("#her2").html(tbody);
      }
    }
    if (sel)
      { /*
        var sum = 0;
        for (var i=0; i<data.length; i++)
        { sum += data[i];
        }
        */
        var sum = feature.get("sum");
        
            
            $("#region_name").html(country)
            $("#region_name2").html(country)
        var s = 0;
        var tbody="";
        for (var i=0; i<data.length; i++)
        { 
          if(i==0){
            tbody+=`<tr style="color:#F00E0E"><td>Muertos</td>`;
          }
          if(i==1){
            tbody+=`<tr style="color:#24E301"><td>Recuperados</td>`;
          }
          if(i==2){
            tbody+=`<tr style="color:#EEA200"><td>Infectados Activos</td>`;
          }

          var d = data[i];
              var a = (2*s+d)/sum * Math.PI - Math.PI/2; 
          var v = Math.round(d/sum*1000);
          if (v>0)
              { 
                tbody+=`<td>${data[i]}</td><td>${(v/10)}%</td></tr>`;
          }else{
            tbody+=`<td>${data[i]}</td><td>${v}%</td></tr>`;
          }

          s += d;
        }
        tbody+=`<tr><td>Total Infectados</td><td>${sum}</td><td>100%</td></tr>`;
        
        $("#her").html(tbody);
        $("#her2").html(tbody);
      }
    styleCache[k] = style;
    return style;
  }

  // 30 random features with data: array of 4 values
  
allGraf(loadLayer);

var select = new ol.interaction.Select({
                style: function(f) { return getFeatureStyle(f, true); }
              });
      map.addInteraction(select);
function buscarencolumna (donde,este)
        {
            
            var tableReg = $(`#${donde}`).children("ul");
            var searchText =$(este).val().toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
            

            tableReg.children("li").each(function(i,e){
            	var compareWith=$(e).children("div:nth-child(1)").text().toLowerCase();
            	if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                {
                    $(e).css("display","");
                }else{
                	$(e).css("display","none");
                }
            });
        }
        
	    
    function allGraficas(callback){
    	let data=null;
        try{
        	$.ajax({
        		async:false,
        		url:URL_COVID[2].url,
        		method:"get",
        		success:function(resp){
        			callback(resp)
        		}
        	})
        }
        catch(error){
            
            document.getElementById("lineChart").html("error en la peticion de datos")
        }
    }
	function loadGraf(data){
      var g=JSON.parse(data)
        var china=[];
        var recuperados=[];
        var otros=[];
        var total=[];
        var confirmados=[];
        var drecuperados=[];
        var labels=[];
        for (var i = 0; i < g.features.length; i++) {
        	var {Delta_Confirmed, Delta_Recovered, Mainland_China, ObjectId, Other_Locations, Report_Date, Report_Date_String, Total_Confirmed, Total_Recovered} =g.features[i].attributes;

        	recuperados.push(Total_Recovered)
			otros.push(Other_Locations)
			china.push(Mainland_China)
			total.push(Total_Confirmed)
			labels.push(Report_Date_String)
			confirmados.push(Delta_Confirmed)
			drecuperados.push(Delta_Recovered)
			
        }
        var ctx = document.getElementById("lineChart");
	    var lineChart = new Chart(ctx, {
	      type: 'line',
	      data: {
	        labels: labels,
	        datasets: [{
	          label: "Recuperados",
	          
	          borderColor: "rgba(38, 185, 154, 0.7)",
	          pointBorderColor: "rgba(38, 185, 154, 0.7)",
	          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	          pointHoverBackgroundColor: "#fff",
	          pointHoverBorderColor: "rgba(220,220,220,1)",
	          pointBorderWidth: 1,
	          data:recuperados
	        },{
	          label: "Infec. otros paises",
	          
	          borderColor: "rgba(265, 168, 15, 0.7)",
	          pointBorderColor: "rgba(247, 120, 10, 0.7)",
	          pointBackgroundColor: "rgba(265, 168, 15, 0.7)",
	          pointHoverBackgroundColor: "#fff",
	          pointHoverBorderColor: "rgba(220,220,220,1)",
	          pointBorderWidth: 1,
	          data:otros
	        },
	        {
	          label: "Mainland China",
	          
	          borderColor: "rgba(10, 120, 255, 0.7)",
	          pointBorderColor: "rgba(10, 12, 255, 0.7)",
	          pointBackgroundColor: "rgba(10, 120, 255, 0.7)",
	          pointHoverBackgroundColor: "#fff",
	          pointHoverBorderColor: "rgba(220,220,220,1)",
	          pointBorderWidth: 1,
	          data:china
	        },
	         {
	          label: "Total Infectados",
	          
	          borderColor: "rgba(185, 29, 1, 0.70)",
	          pointBorderColor: "rgba(243, 10, 3, 0.70)",
	          pointBackgroundColor: "rgba(185, 29, 1, 0.70)",
	          pointHoverBackgroundColor: "#fff",
	          pointHoverBorderColor: "rgba(151,187,205,1)",
	          pointBorderWidth: 1,
	          data: total
	        }]
	      },
	    });
	    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Recuperados',
          backgroundColor: "#04B858",
          data: drecuperados
        }, {
          label: 'Nuevos Casos confirmados',
          backgroundColor: "#FF2825",
          data: confirmados
        }]
      },

      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    }
	allGraficas(loadGraf);