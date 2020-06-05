   <?php 
        $statedata = file_get_contents('https://api.covid19india.org/data.json');
        // $sumdata = file_get_content('https://api.covid19api.com/summary');
        //  echo ($sumdata);
        $livedata = json_decode($statedata, true);
       $numstates = count($livedata['statewise']);
//while($i=0)
//{
//	$conf= $livedata['statewise'][$i]['confirmed'];
//	$act= $livedata['statewise'][$i]['active'];
//	$rec= $livedata['statewise'][$i]['recovered'];
//	$det= $livedata['statewise'][$i]['deaths'];
//}
	
 
    ?>
