<?php

/**
 * @group maniphest
 */
final class ManiphestTaskSeverity extends ManiphestConstants {

  const SEVERITY_CRITICAL = 4;
  const SEVERITY_MAJOR = 3;
  const SEVERITY_MODERATE = 2;
  const SEVERITY_MINOR = 1;
  const SEVERITY_COSMETIC = 0;
  
  public static function getTaskSeverityMap() {
    return array(
      self::SEVERITY_CRITICAL => 'Critical',
      self::SEVERITY_MAJOR    => 'Major',
      self::SEVERITY_MODERATE => 'Moderate',
      self::SEVERITY_MINOR    => 'Minor',
      self::SEVERITY_COSMETIC => 'Cosmetic',
    );
  }

  public static function getLowestSeverity() {
    return self::SEVERITY_COSMETIC;
  }

  public static function getHighestSeverity() {
    return self::SEVERITY_CRITICAL;
  }
  
  public static function getDefaultSeverity() {
    //return PhabricatorEnv::getEnvConfig(
    //  'maniphest.default-severity');
	return self::SEVERITY_MODERATE;
  }

  public static function getTaskSeverityName($value) {
    return idx(self::getTaskSeverityMap(), $value, '???');
  }

}