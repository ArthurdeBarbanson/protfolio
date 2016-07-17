/**
 * Created by arthur on 13/07/16.
 */
$(function(){
    var entries = [
        { label: 'PHP', url: '#competence'},
        { label: 'Symfony', url: '#competence' },
        { label: 'HTML5', url: '#competence' },
        { label: 'CSS3' , url: '#competence'},
        { label: 'Javascript', url: '#competence' },
        { label: 'JQuery', url: '#competence' },
        { label: 'JQuery UI', url: '#competence' },
        { label: 'Bootstrap', url: '#competence' },
        { label: 'Ajax' , url: '#competence'},
        { label: 'MySQL' , url: '#competence'},
        { label: 'Github' , url: '#competence'},
        { label: 'UML' , url: '#competence'},
        { label: 'Anglais' , url: '#competence'},
        { label: 'WordPress' , url: '#competence'},
        { label: '.Net', url: '#competence' },
        { label: 'JEE', url: '#competence' },
        { label: 'JAVA' , url: '#competence'},
        { label: 'C++' , url: '#competence'}

    ];

    var settings = {

        entries: entries,
        width: 580,
        height: 580,
        //width: '100%',
        //height: '100%',
        radius: '65%',
        radiusMin: 75,
        bgDraw: true,
        bgColor: '#fff',
        opacityOver: 1.00,
        opacityOut: 0.05,
        opacitySpeed: 6,
        fov: 800,
        speed: 1.5,
        fontFamily: 'Oswald, Arial, sans-serif',
        fontSize: '15px',
        fontColor: '#111',
        fontWeight: 'normal',
        fontStyle: 'normal',
        fontStretch: 'normal',
        fontToUpperCase: true
    };

    $('#tag-cloud').svg3DTagCloud(settings);

});