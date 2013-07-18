ALTER TABLE {$NAMESPACE}_maniphest.maniphest_task ADD severity int(4) NOT NULL;
UPDATE {$NAMESPACE}_maniphest.maniphest_task SET severity = 2;