<?php

/**
 * @group maniphest
 */
final class ManiphestTaskType extends ManiphestConstants {
  const TYPE_TASK = 0;
  const TYPE_BUG  = 1;
  
  public static function getTaskTypeMap() {
    return array(
	  self::TYPE_TASK => 'Task',
	  self::TYPE_BUG  => 'Bug',
    );
  }
  
  public static function getTaskTypeName($type) {
    return idx(self::getTaskTypeMap(), $type, '???');
  }
}
