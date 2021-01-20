<?php 
foreach($date as $da):
?>

    <div class="row mx-0">
    <div class="col-12">
      <div class="card mb-3">
        <div class="row">
          <div class="col-4 text-center">
            <figure class="avatar avatar-120 rounded-circle my-2">
              <img src="img/user1.png" alt="user image">
              </figure></div>
              <div class="col-8"><div class="card-header"><h5 class="card-title"><?php echo $da->name ?></h5><p class="mb-0"><?php echo $da->degree ?>(<?php echo $da->specialized ?>)</p><p class="mb-0"><?php echo $da->designation ?></p><p class="mb-0"><?php echo $da->institute ?> </p></div><div class="card-footer"></div></div></div></div></div> </div>

  <?php
$max_dates = 3;
$countDates = 0;
$starttime = $da->duty_start;  // your start time
$endtime = $da->duty_end;  // End time

echo '<div class="container uniqueDateWiseTime">
      <div class="row">
          
            ';
while ($countDates < $max_dates) {

    $NewDate=Date('Y-m-d', strtotime("+".$countDates." days"));

     echo '<div class="col-md-4"><a href="javascript:;"  onclick="date(\''.$NewDate.'\',\''.$starttime.'\',\''.$endtime.'\')" class="btn btn-info   my-3 ">'.$NewDate.'</a></div>';

       $countDates = $countDates + 1;
}
    echo '</div></div>';

    ?>            

  <?php endforeach; ?>

   <div id="focus" class="mb-100"> </div>

  <script type="text/javascript">
      // var url=window.location.href;
      // var app_doctor_id= url.substring(url.lastIndexOf('=') + 1);

       var url_string = window.location.href;
 
        var url = new URL(url_string);
        var app_doctor_id = url.searchParams.get("app_doctor_id");
        
        var type= url.searchParams.get("type"); 
      var user_id= localStorage.getItem('user_id');

  function date(data,start_time,end_time){
        var d= data;

        var start= start_time;
        var end= end_time;
    
      function parseTime(s) {
        var c = s.split(':');
        return parseInt(c[0]) * 60 + parseInt(c[1]);
    }

    function convertHours(mins){
      var hour = Math.floor(mins/60);
      var mins = mins%60;
      var converted = pad(hour, 2)+':'+pad(mins, 2)+':00';
      return converted;
    }

    function pad (str, max) {
      str = str.toString();
      return str.length < max ? pad("0" + str, max) : str;
    }

    function calculate_time_slot(start_time, end_time, interval = "30"){
        var i, formatted_time;
      var time_slots = new Array();
        for(var i=start_time; i<=end_time; i = i+interval){
        formatted_time = convertHours(i);
        time_slots.push(formatted_time);
      }
      return time_slots;
    }

    var startTime = start;
    var endTime = end;

    var start_time = parseTime(startTime),
        end_time = parseTime(endTime),
        interval = 15;

    var times_ara = calculate_time_slot( start_time, end_time, interval );

     $.ajax({
             url:"http://localhost/CnC/api/appoint/appoint/"+app_doctor_id,
             type:"get",
            dataType:'json',
             success:function(data){
           
              if(data.valid=='yes'){
                var dataes=data.dataes;
               var date_arr=new Array();
               var time_arr=new Array();
           
               for (var i = 0; i < dataes.length; i++){
                var date=dataes[i].appointment_date;
                date_arr.push(date);
                var time=dataes[i].time;
                time_arr.push(time);
              
              }
             
             for(var a = 0; a < date_arr.length; a++)
             {
                   // if(date_arr.includes(d)){
                    if(d==date_arr[a]){

              $.ajax({
               url:"http://localhost/CnC/api/appoint/appoints/"+app_doctor_id,
               type:"post",
               dataType:'json',
               data:{
                   'd':d,
               },
               success:function(data){
               

               var tim_arr=new Array();

                for (var j = 0; j < data.length; j++){
            
                var times=data[j].time;
                tim_arr.push(time);
            
              }
                 


                var output='<div class="container showTime"><div class="row">';
                for(var k=0; k< times_ara.length; k++){
                  var cls="";
                  var dis="";
                  for(var l=0;l<tim_arr.length;l++){
                    if(times_ara[k]==tim_arr[l]){
                      var cls="btn btn-danger";
                      var dis="disabled";
                    }else{
                      var cls="btn btn-success";
                      var dis="";
                    }
                  }

                  output+='<div class="col-md-4"><button '+dis+' data-id="'+times_ara[k]+'" class="mt-3 tim '+cls+'">'+times_ara[k]+'</button></div>';

                }

                output+='</div></div>';

               document.getElementById('focus').innerHTML=output;


              $(".tim").click(function(){

                // alert($(this).data("id"));

                var tim=$(this).data("id");

                window.location.replace('app_form.html?time='+tim+'&date='+d+'&type='+type+'');

              })

            }

          })

              }
                     else{

                 var output='<div class="container showTime"><div class="row">';
                for(var k=0; k< times_ara.length; k++){

                  output+='<div class="col-md-4"><button data-id="'+times_ara[k]+'"  class="btn btn-success tim mt-3">'+times_ara[k]+'</button></div>';
                  // console.log(times_ara[i]);

                }

                output+='</div></div>';

               document.getElementById('focus').innerHTML=output;


              $(".tim").click(function(){

                // alert($(this).data("id"));

                var tim=$(this).data("id");

                window.location.replace('app_form.html?time='+tim+'&date='+d+'&type='+type+'');

              })


              }
             }
    

          


             
              }else{
              
                var output='<div class="container showTime"><div class="row">';
                for(var k=0; k< times_ara.length; k++){

                  output+='<div class="col-md-4"><button data-id="'+times_ara[k]+'"  class="btn btn-success tim mt-3">'+times_ara[k]+'</button></div>';
                  // console.log(times_ara[i]);

                }

                output+='</div></div>';

               document.getElementById('focus').innerHTML=output;


                $(".tim").click(function(){

                // alert($(this).data("id"));

                var tim=$(this).data("id");

                window.location.replace('app_form.html?time='+tim+'&date='+d+'&type='+type+'');

              })


                
            }


              }




      })


   

}


</script>

<!-- onclick="appp_tm(\''+times_ara[k]+'\',\''+d+'\')" -->

<!--    for(var j = 0; j < time_arr.length; j++){
                 for(var h=0; h < times_ara.length; h++){
                  if(times_ara[h]==time_arr[j]){
                  var cls="btn btn-danger";
                }else{
                  var cls="btn btn-success";
                }
                 }
                
              } -->