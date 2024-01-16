<?php
	/**
	 * 
	 */
	class generalFunctions
	{
		
		function __construct()
		{
		}
		public function findRemainingTime($sDate, $eDate){

			$totalDay = $eDate - $sDate;
			if($totalDay <= 0) $totalDay = 1;
			$totalDay = $totalDay / 86400;

			$remainingTime = floor( ($eDate - time() )/86400 );
			$remainingBar = 100 - (100*( $remainingTime/$totalDay ) ) ;


			if ($remainingTime > 0) $remainingTime  = $remainingTime." Gün Kaldı";
			if ($remainingTime == 0) $remainingTime = "Süre Doldu";
			if ($remainingTime < 0) $remainingTime  = abs($remainingTime)." Gün Önce Bitti";

			

			return ["remainingTimeStr" => $remainingTime, "remainingBar" => $remainingBar];
		}
	}
	//$t = new generalFunctions;
	//$t->findRemainingTime(1705014000, 1705614000);
?>