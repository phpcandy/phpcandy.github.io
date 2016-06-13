<?php
class Person {
/**
 *   * For the sake of demonstration, we"re setting this private
 *     */
 private $_allowDynamicAttributes = false;
 /**
 *   * type=primary_autoincrement
 *     */
 protected $id = 0;
 /**
 *   * type=varchar length=255 null
 *     */
 protected $name;
 /**
 *   * type=text null
 *     */
 protected $biography;
 public function getId() {
  return $this->id;
 }
 public function setId($v) {
  $this->id = $v;
 }
 public function getName() {
  return $this->name;
 }
 public function setName($v) {
  $this->name = $v;
 }
 public function getBiography() {
  return $this->biography;
 }
 public function setBiography($v) {
  $this->biography = $v;
 }
}

$class = new ReflectionClass('Person');
var_dump($class);
$args = array();
$object = $class->newInstanceArgs($args);
$propert = $class->getProperties();
//var_dump($propert);
$methods = $class->getMethods();
var_dump($methods);

