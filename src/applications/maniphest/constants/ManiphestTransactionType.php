<?php

/**
 * @group maniphest
 */
final class ManiphestTransactionType extends ManiphestConstants {

  const TYPE_NONE          = 'comment';
  const TYPE_TASK_TYPE     = 'task-type';
  const TYPE_STATUS        = 'status';
  const TYPE_OWNER         = 'reassign';
  const TYPE_CCS           = 'ccs';
  const TYPE_PROJECTS      = 'projects';
  const TYPE_PRIORITY      = 'priority';
  const TYPE_SEVERITY      = 'severity';
  const TYPE_VERSION       = 'version';
  const TYPE_FUNCTIONALITY = 'functionality';

  const TYPE_ATTACH        = 'attach';
  const TYPE_EDGE          = 'edge';

  const TYPE_TITLE         = 'title';
  const TYPE_DESCRIPTION   = 'description';
  const TYPE_AUXILIARY     = 'aux';

  public static function getTransactionTypeMap() {
    return array(
      self::TYPE_NONE          => pht('Comment'),
      self::TYPE_STATUS        => pht('Close Task'),
      self::TYPE_TASK_TYPE     => pht('Change Task Type'),
      self::TYPE_OWNER         => pht('Reassign / Claim'),
      self::TYPE_CCS           => pht('Add CCs'),
      self::TYPE_PRIORITY      => pht('Change Priority'),
      self::TYPE_SEVERITY      => pht('Change Severity'),
      self::TYPE_VERSION       => pht('Change Version'),
      self::TYPE_FUNCTIONALITY => pht('Change Functionality'),
      self::TYPE_ATTACH        => pht('Upload File'),
      self::TYPE_PROJECTS      => pht('Associate Projects'),
    );
  }

}
