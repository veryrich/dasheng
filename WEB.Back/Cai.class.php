<?php

class Cai{
	
	public static final function CQ($number){
		$timeConfig=explode('|','00:05|00:10|00:15|00:20|00:25|00:30|00:35|00:40|00:45|00:50|00:55|01:00|01:05|01:10|01:15|01:20|01:25|01:30|01:35|01:40|01:45|01:50|01:55|10:00|10:10|10:20|10:30|10:40|10:50|11:00|11:10|11:20|11:30|11:40|11:50|12:00|12:10|12:20|12:30|12:40|12:50|13:00|13:10|13:20|13:30|13:40|13:50|14:00|14:10|14:20|14:30|14:40|14:50|15:00|15:10|15:20|15:30|15:40|15:50|16:00|16:10|16:20|16:30|16:40|16:50|17:00|17:10|17:20|17:30|17:40|17:50|18:00|18:10|18:20|18:30|18:40|18:50|19:00|19:10|19:20|19:30|19:40|19:50|20:00|20:10|20:20|20:30|20:40|20:50|21:00|21:10|21:20|21:30|21:40|21:50|22:00|22:05|22:10|22:15|22:20|22:25|22:30|22:35|22:40|22:45|22:50|22:55|23:00|23:05|23:10|23:15|23:20|23:25|23:30|23:35|23:40|23:45|23:50|23:55|00:00');
		if($number>=120){
			return strtotime('00:00')+24*3600;
		}else{
			return strtotime($timeConfig[$number-1]);
		}
	}
	
	
}