<?php
/**
 * Example: Monitoring restore group.
 */

//If you are not using MonitoringExamples.php script uncomment two lines below and put your services access token.
//use SemstormApi\Semstorm;
//Semstorm::init( __ACCESS_TOKEN__ );

use SemstormApi\Monitoring\MonitoringGroup;

//New monitoring group object to manage groups.
$monitoringGroup = new MonitoringGroup();

//Restore group.
print_r($monitoringGroup->restore( [__GROUP_1_ID__, __GROUP_2_ID__] ));


/*
Example output


stdClass Object
(
    [params] => Array
        (
            [0] => __GROUP_1_ID__
            [1] => __GROUP_2_ID__
        )

    [result] => 1
    [_credits] => 0
    [_credits_left] => 80
)
 */