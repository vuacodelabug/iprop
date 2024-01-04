// Biểu đồ tròn
function getChartColorsArray(e){
    if(null!==document.getElementById(e))return e=document.getElementById(e).getAttribute("data-colors"),
    (e=JSON.parse(e)).map(function(e){var t=e.replace(" ","");
    return-1===t.indexOf(",")?getComputedStyle(document.documentElement).getPropertyValue(t)||t:2==(e=e.split(",")).length?"rgba("+getComputedStyle(document.documentElement).getPropertyValue(e[0])+","+e[1]+")":t})}
    
    var upadatedonutchart,chartPieBasicColors=
        // Doanh thu luỹ kế
        getChartColorsArray("chart-luy_ke"),
        chartDonutBasicColors=(chartPieBasicColors&&(options={series:[44,55,41,80,17], 
        chart:{height:300,type:"donut"},
        labels:["3 Tháng","6 Tháng","12 Tháng","Khác","Hợp đồng bỏ cọc"],
        legend:{position:"bottom"},
        dataLabels:{dropShadow:{enabled:!1}},colors:chartPieBasicColors},
        (chart=new ApexCharts(document.querySelector("#chart-luy_ke"),options)).render()),


        // Doanh thu tháng
        getChartColorsArray("chart-thang")),
        chartDonutupdatingColors=(chartDonutBasicColors&&(options={series:[44,55,41,80,17],
        chart:{height:300,type:"donut"},
        labels:["3 Tháng","6 Tháng","12 Tháng","Khác","Hợp đồng bỏ cọc"],
        legend:{position:"bottom"},
        dataLabels:{dropShadow:{enabled:!1}},colors:chartDonutBasicColors},
        (chart=new ApexCharts(document.querySelector("#chart-thang"),options)).render()),


        // Tiền cọc
        getChartColorsArray("chart-coc")),
        chartDonutupdatingColors=(chartDonutBasicColors&&(options={series:[44,55,41,17],
        chart:{height:300,type:"donut"},
        labels:["3 Tháng","6 Tháng","12 Tháng","Khác"],
        legend:{position:"bottom"},
        dataLabels:{dropShadow:{enabled:!1}},colors:chartDonutBasicColors},
        (chart=new ApexCharts(document.querySelector("#chart-coc"),options)).render()));





     function getChartColorsArray(e){
        if(null!==document.getElementById(e))
        return e=document.getElementById(e).getAttribute("data-colors"),(e=JSON.parse(e)).map(function(e){var t=e.replace(" ","");
        return-1===t.indexOf(",")?getComputedStyle(document.documentElement).getPropertyValue(t)||t:2==(e=e.split(",")).length?"rgba("+getComputedStyle(document.documentElement).getPropertyValue(e[0])+","+e[1]+")":t})}
            
        var timelinechart,optionsYears,chartYears,areachartBasicColors=
            getChartColorsArray("area_chart_basic"),
            areachartSplineColors=(areachartBasicColors&&(options={series:[{name:"STOCK ABC",data:series.monthDataSeries1.prices}],
            chart:{type:"area",height:350,zoom:{enabled:!1}},
            dataLabels:{enabled:!1},
            stroke:{curve:"straight"},
            title:{text:"Tổng Doanh Thu",
            align:"left",style:{fontWeight:500}},
            labels:series.monthDataSeries1.dates,xaxis:{type:"datetime"},
            yaxis:{opposite:!0},legend:{horizontalAlign:"left"},
            colors:areachartBasicColors},
            (chart=new ApexCharts(document.querySelector("#area_chart_basic"),options)).render()));
                
            
                
                