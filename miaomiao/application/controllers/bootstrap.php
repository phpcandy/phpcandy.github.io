<?php

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {
//    function _initConfig(Yaf_Dispatcher $dispatcher) {
//        echo "1st called\n";
//    }
//
//    function _initPlugin($dispatcher) {
//        echo "2nd called\n";
//    }

    public function _initLoader(Yaf_Dispatcher $dispatcher) {
//        echo 'aaaa';
//        exit;
        $autoload = Yaf_Loader::getInstance();
        $autoload->registerLocalNameSpace(array("Foo", "Bar"));
        //$autoload->autoload('Foo_Dummy_Bar');
        $a = new Foo\Dummy\Bar();
        //$a->abc();
//        echo 'aaaa';
//        exit;
        //var_dump(class_exists('Foo_Dummy_Bar'));
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        //echo 'aaa';
        //include (APP_PATH.'/plugins/UserPlugin.php');
        $user = new UserPlugin();
//        echo 'cccc';
        $dispatcher->registerPlugin($user);
        //echo 'fff';
    }
}