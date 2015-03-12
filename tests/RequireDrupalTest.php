<?php

class RequireDrupalTest extends \PHPUnit_Framework_TestCase {

  /**
   * All we're doing here is using the Drupal container global.
   *
   * If there is no container, \Drupal::getContainer will throw an exception.
   *
   * @expectedException Drupal\Core\DependencyInjection\ContainerNotInitializedException
   */
  public function testRequireDrupal() {
    \Drupal::getContainer();
  }
}
