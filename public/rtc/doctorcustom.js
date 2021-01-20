
// doctor notify
$(document).ready(function(){
      show_list_doctor_notify(); //call function show all data
    // show 
    function show_list_doctor_notify(){
      var doctor_id = sessionStorage.getItem('doctor_id');

      $.ajax({
        type  : 'GET',
        url   : 'http://localhost/medic360/doctor-schudule-notify',
        async : false,
        dataType : 'json',
        data:{doctor_id:doctor_id},
        success : function(response){
         var html = '';
          // alert(response[0].patient_name);
          var i;
          var a = 0;
          for(i = 0; i < response.length; i++){
            a++;
           html += '<li>'+
           '<a href="javascript:void('+response[i].appointment_id+');">'+
           '<div class="pull-left">'+
           '<img src="http://localhost/medic360/file/patient/'+response[0].patient_photo+ '" width="40px"/>'+
           '</div>'+
           '<h4>'+response[i].patient_name+'<small></small>'+
           '</h4>'+
           '<p>'+response[i].appointment_doctor_time+'</p>'+
           '</a>'+
           '</li>';

           $('#show_doctor_notify').html(html);


         }
         $('#notification_count_doctor').html(a);

           }

         });
    }
  })