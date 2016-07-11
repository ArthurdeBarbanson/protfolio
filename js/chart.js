$(function(){

    var chart = AmCharts.makeChart("chartdiv", {
        "theme": "light",
        "type": "serial",
        "startDuration": 2,
        "dataProvider": [{
            "country": "PHP",
            "visits": 80,
            "color": "#FF0F00"
        }, {
            "country": "Symfony",
            "visits": 75,
            "color": "#FF6600"
        }, {
            "country": "HTML5",
            "visits": 90,
            "color": "#FF9E01"
        }, {
            "country": "CSS3",
            "visits": 80,
            "color": "#FCD202"
        }, {
            "country": "UML",
            "visits": 90,
            "color": "#F8FF01"
        }],
        "valueAxes": [{
            "position": "left",
            "axisAlpha":0,
            "gridAlpha":0
        }],
        "graphs": [{
            "balloonText": "[[category]]: <b>[[value]]</b>",
            "colorField": "color",
            "fillAlphas": 0.85,
            "lineAlpha": 0.1,
            "type": "column",
            "topRadius":1,
            "valueField": "visits"
        }],
        "depth3D": 40,
        "angle": 30,
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha":0,
            "gridAlpha":0

        },
        "export": {
            "enabled": true
        }

    },0);

    jQuery('.chart-input').off().on('input change',function() {
        var property	= jQuery(this).data('property');
        var target		= chart;
        chart.startDuration = 0;

        if ( property == 'topRadius') {
            target = chart.graphs[0];
        }

        target[property] = this.value;
        chart.validateNow();
    });

});