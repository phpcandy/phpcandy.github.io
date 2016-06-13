<?php

//$pid=pcntl_fork();
//
//switch($pid){
//    case -1:
//        echo"couldn't fork";
//        break;
//    case 0:
//        echo"I'm parent";
//        break;
//    default:
//        echo"I'm child";
//}


while(true){

    $pid= pcntl_fork();

    switch($pid){

        case -1:
            echo"couldn't fork";
            break;
        case 0:
            $subPid= pcntl_wait($status);
            var_dump($status);
            break;
        default:
            echo"I'm child";
            exit(0);
    }
}

?>