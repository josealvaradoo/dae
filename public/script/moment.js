jQuery(document).ready(function() {
    var months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    var daysWeek = ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];
    foo();
    setInterval(function(){
        foo();
    }, 5000);

    function foo(){
        var today = new Date();
        var hour = today.getHours();
        var minutes = today.getMinutes();
        var dayWeek = today.getDay();
        var day = today.getDate();
        var month = today.getMonth();
        var foo = "am";
        if(hour > 12) {
            hour = hour-12
            foo = "pm"
        }
        if(hour.toString().length == 1){
            hour = "0" + hour.toString();
        }
        if(minutes.toString().length == 1){
            minutes = "0" + minutes.toString();
        }
        jQuery('#now').html(hour + ':' + minutes);
        jQuery('#day').text(daysWeek[dayWeek] + ', ' + day + ' de ' + months[month]);
    }
});