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

echo '<div class="container uniqueDateWiseTime">
      <div class="row">
          
            ';
while ($countDates < $max_dates) {

    $NewDate=Date(' Y-m-d', strtotime("+".$countDates." days"));
    // echo "<option>" . $NewDate . "</option>";
//    echo '<div class="card" style="width: 18rem;"><div class="card-body">
//     <h3 class="card-text">'.$NewDate.'</h3>
//     <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>
// </div>';  
      echo '<div class="col-md-4"><button  onclick=date(\''.$NewDate.'\')  id="date" value="'.$NewDate.'" class="btn btn-info   mt-3 ">'.$NewDate.'</button></div>';

    // echo '<div class="col-md-4"><a href="javascript:;" id="date_'.($countDates+1).'" class="btn btn-info mt-3 date">'.$NewDate.'</a></div>';
     // echo '<div class="col-md-4"><button id="date" data-val="'.$NewDate.'" class="btn btn-info   mt-3 ">'.$NewDate.'</button></div>';
      
    $countDates = $countDates + 1;
}
    echo '</div></div>';

// echo "<pre>";
// print_r($dateArrayCount);

// $starttime = $da->duty_start;  // your start time
// $endtime = $da->duty_end;  // End time
// $duration = '20';  // split by 30 mins
 
// $array_of_time = array ();
// $start_time    = strtotime ($starttime); //change to strtotime
// $end_time      = strtotime ($endtime); //change to strtotime
 
// $add_mins  = $duration * 60;
 
// while ($start_time <= $end_time) // loop between time
// {
//    $array_of_time[] = date ("h:iA", $start_time);
//    $start_time += $add_mins; // to check endtie=me
// }
// // echo '<pre>';
// // print_r($array_of_time);
// // echo '</pre>';
//  echo '<div class="container showTime" style="display:none;">
//        <div class="row">';
//  $arraylength=count($array_of_time);

// foreach ($array_of_time as $key=> $value) {
//   	 // echo '<div class="col-md-4"><a  onclick="time(\''.$value.'\',\''.$NewDate.'\')" class="btn btn-success   mt-3 ">'.$value.'</a></div>';
//   	echo '<div class="col-md-4"><a href="javascript:;" id="'.$value.'"  class="btn btn-success mt-3 time" >'.$value.'</a></div>';

  	 
//   	}
  	
//    echo '</div></div>'; 

    
?>						

  <?php endforeach; ?>

<script type="text/javascript">

	// var url=window.location.href;
 //      var app_doctor_id= url.substring(url.lastIndexOf('=') + 1);
 //      var user_id= localStorage.getItem('user_id');

      // console.log(user_id);


	// $(document).ready(function(){
	// 	$(".uniqueDateWiseTime").on('click', function(){
	// 	var thisClass = $(this);
	// 	var date_id = $(".date").attr('id').split('_')[1];
 //        if(date_id == 1){
 //        	$(".showTime").toggle();
 //        }else if(date_id == 2) {
 //        	$(".showTime").toggle();
 //        }else if(date_id == 3){
 //        	$(".showTime").toggle();
 //        }else {
 //        	alert('Not Found');
 //        }
	// 	});
	// });

	 // $.ajax({
  //           url:"http://localhost/CnC/api/appoint/check_appoint/"+app_doctor_id,
  //           type:"get",
  //           dataType:'html',
  //            success:function(data){
                 
  //            }
  //        });

	// $('.date, .time').click(function() {
 //    var thisClass = $(this);
    // if (thisClass.hasClass('date')) {
    //     var dateArray = thisClass.val();
    //     var text = thisClass.html();
    //     alert(text);
    // } else {
    //     var timeArray = thisClass.text();
    //     var timeId = timeArray.split("_")[1];
    //     alert(timeArray);
    // }


        // var dateArray = thisClass.val();
        // var date = thisClass.html();
        // alert(date);

        // var time = thisClass.text();
         // alert(time);

         // return false;


         // $.ajax({
         //    url:"http://localhost/CnC/api/appoint/set_appoint",
         //    type:"post",
         //    dataType:'json',
         //    data: {

         //            'date': date,
         //            'time': time,
         //            'app_doctor_id': app_doctor_id,
         //            'user_id': user_id,
         //        },
         //     success:function(data){
         //         console.log(data);
         //     }
         // });

       




        // var timeId = timeArray.split("_")[1];
        // alert(timeArray);

//         $data = $this->db->select("*")->from('tablename')
//         ->get()->result();

//         if($data[0]->date == $this->input->post('date') && $data[0]->time == $this->input->post('time')){
//        		<div class="red"></div>
//         }else {
//         	$data = [

//         	];
//         	$this->db->insert('table',$data)
// ;        }
// });

 // function date(date){
 //  alert(date);
 // }

	
</script>

<script type="text/javascript">
  function date(date){
    
  }


   function parseTime(s) {
      var c = s.split(':');
      return parseInt(c[0]) * 60 + parseInt(c[1]);
    }

    function convertHours(mins){
      var hour = Math.floor(mins/60);
      var mins = mins%60;
      var converted = pad(hour, 2)+':'+pad(mins, 2);
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

    var startTime = "10:00";
    var endTime = "17:00";

    var start_time = parseTime(startTime),
        end_time = parseTime(endTime),
        interval = 30;

    var times_ara = calculate_time_slot( start_time, end_time, interval );

    console.log(times_ara);


})

</script>