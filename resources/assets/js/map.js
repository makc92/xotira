$(document).ready(function () {
    $('#vmap').css(
        {
            'width': '100%',
            // 'height': '100%'
        }
    );

    $('.mapPoints a').click(function(e){
        e.preventDefault();
        $('#mapLabels').toggleClass('open');
    });

    $('.mapPoints a').hover(function(){
        filterRegions($(this).attr('href'));
    }, function(){
        filterRegions('');
    });
    $(window).click(function(e){
        if(e.target.className.animVal != "jvectormap-region"){
            //console.log(e.target.className.animVal);
            $('#mapLabels').html('');
        }
    });
});

var regions = {
    to: 0,
    qo: 0,
    an: 0,
    bu: 0,
    qa: 0,
    no: 0,
    gu: 0,
    sa: 0,
    fa: 0,
    ji: 0,
    na: 0,
    te: 0,
    xo: 0
};
var messages2 = {

    an: '<h2>Andijon viloyati</h2>Andijon davlat universiteti tuzilmasidagi <br>Qatag`on qurbonlari xotirasi muzeyi 170100,<br> Andijon shahri, Universitet ko`chasi, 129-uy.<br>Telefon, faks: (998 74) 225 73 21<br>E-mail: vodiynoma@mail.ru',
    bu: '<h2>Buxoro viloyati </h2>Buxoro Davlat Unversiteti tuzulmasidagi<br> Qatag’on qurbonlari xotirasi muzeyi 200117, <br>Buxoro shahri M.Iqbol ko’chasi, 11-uy BuxDU 3-bino 1 qavat <br>Telefon: (+998 65) 221 27 31 <br>E-mail: azalshoh.iqro@ mail.ru',
    ji: '<h2>Jizzax viloyati </h2>Jizzax Davlat PedagogikaInstituti tuzulmasidagi <br>Qatag’on qurbonlari xotirasi muzeyi  130100, <br> Jizzax shahri Sh. Rashidov ko’chasi, 4-uy  “Ma’naviyat va ma’rifat” markazi<br>Telefon: (+998 72) 226 09 20<br>E-mail: jizzax muzey@ mail.ru',
    qa: '<h2>Qashqadaryo viloyati</h2>Qarshi davlat universiteti tuzilmasidagi <br>Qatag‘on qurbonlari xotirasi muzeyi<br>Abu Ubayda ibn al-Jarroh yodgorlik majmuasi binosidagi ko‘rgazma <br>Qarshi shahri Jayxun ko‘chasi-304 uy<br>Telefon: 91-468-6991 E-mail: rahmatova.dilnavoz@mail.ru',
    no: '<h2>Navoiy viloyati </h2>Navoiy davlat pedagogika instituti tuzilmasidagi <br>Qatag’on qurbonlari xotirasi muzeyi 210100, <br>Navoiy shaxri, Abdulla Avloniy ko’chasi – 5 <br>Telefon: (0436) 225-21-99, <br>E-mail: navdpi_muzey@mail.ru',
    na: '<h2>Namangan viloyati </h2>Namangan Davlat Universiteti tuzilmasidagi<br>“ Qatag‘on qurbonlari hotirasi” muzeyi 160700,<br>To‘raqo‘rg‘on tumani To‘raqo‘rg‘on ko‘chasi Ishoqxon to‘ra Ibrat majmuasi.<br>Tel: (998-69)227-01-44<br>E-mail: ibratmuseum@gmail.com ',
    sa: '<h2>Samarqand viloyati </h2>',
    gu: '<h2>Sirdaryo viloyati </h2>',
    te: '<h2>Surxandaryo viloyati </h2>',
    to: '<h2>Toshkent viloyati</h2> Chirchiq davlat pedagogika instituti tuzilmasidagi<br> "Qatag‘on qurbonlari xotirasi muzeyi". <br>Chirchiq shahar A Temur ko‘chasi 104 uy.<br>Telefon (998 70) 712-45-41<br>',
    fa: '<h2>Farg‘ona viloyati</h2>Farg‘ona davlat universiteti tuzilmasidagi <br>Qatag‘on qurbonlari muzeyi <br>Farg‘ona shahar Murabbiylar ko‘chasi 19 uy.<br>Telefon (998 73) 244-47-19<br>E-mail: s_sidikov1947@mail.ru',
    xo: '<h2>Xorazm viloyati</h2>Urganch davlat unversiteti tuzulmasidagi<br>«Qatag’on qurbonlari xotirasi» muzeyi <br>220100, Xorazm viloyati, Urganch shahri Tinchlik ko’chasi, 8/1-uy<br>Telefon: (0362) 224 67 00<br> E-mail: urgenchmuseum@mail.ru',
    qo: '<h2>Qoraqalpog`iston Respublikasi </h2>Qoraqalpoq  davlat universiteti  tuzilmasidagi  <br> Qatag‘on qurbonlari xotirasi davlat muzeyi 230100, <br> Nukus shahri, Ch.Abdirov ko‘chasi,  1-uy,  2-bino, <br> Tel.: (+99861) 223 57 16<br> E-mail: kudiyarov 1966 @mail.ru',
    tosh: '<h2>Toshkent shahri </h2>100184, Toshkent shahri, Yunusobod tumani,<br>A.Temur ko’chasi, “Shahidlar xotirasi” maydoni<br>Telefon: (998-71) 2442940, <br>E-mail: info@xotira-muzey.uz',
};
function getCurLang() {
    var pathname = window.location.pathname ;
    return pathname.substr(1, 2)
}

function filterRegions(regionId) {
    var regionsList = {};
    $.each(regions, function (key, value) {
        var elementColor = '#02AE38';
        regionsList[key] = elementColor;
    });
    if (regionId.length > 0){
        regionsList[regionId] = '#57bb64';
    }
    $('#vmap').vectorMap('set', 'colors', regionsList);
    return false;
}

function makeMap(messages, colors) {
    $('#vmap').html('');
    $('.jqvmap-label').remove();
    $('#vmap').vectorMap({
        map: 'uzbekistan',
        backgroundColor: '',
        color: 'transparent',
        hoverColor: '#6EE180',
        enableZoom: false,
        showTooltip: true,
        borderColor: '#000',
        borderWidth: 2,
        borderOpacity: 1,
        colors: {
            to: '#02AE45',
            qo: '#02AE38',
            an: '#02AE38',
            bu: '#02AE30',
            qa: '#02AE25',
            no: '#02AE25',
            gu: '#02AE15',
            sa: '#02AE38',
            fa: '#02AE38',
            ji: '#02AE38',
            na: '#02AE20',
            te: '#02AE38',
            xo: '#02AE25',
            tosh: '#02AE38'
        },
        //onLabelShow: function (event, label, code) {
        //    $('#mapLabels').html(messages[code]);
        //},
        onLabelShow: function (event, label, code) {
            $('.jqvmap-label').html(messages[label]);
            $('#mapLabels').html(messages2[code]);
        },
        //onRegionOut: function(){
        //    $('#mapLabels').html('');
        //}
        onRegionClick: function (element, code, region) {
            // alert(element+"  "+code+"  "+region);
            //console.log(code);
            var currentLang = getCurLang();
            // location.href = 'http://'+window.location.hostname+'/'+currentLang+'/regions/'+messages2[code];
        }
    });
}
