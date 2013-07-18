ALTER TABLE {$NAMESPACE}_maniphest.maniphest_task ADD taskType int(4) NOT NULL;
UPDATE {$NAMESPACE}_maniphest.maniphest_task SET taskType = 0;