<?php

namespace Drupal\migrate_api\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;


/**
 *
 * @MigrateProcessPlugin(
 *     id="entity_reference"
 * )
 */
class EntityReference extends ProcessPluginBase {
  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {

    var_dump($value);

    if(!$value || !isset($value[0]) || !isset($value[1])){
      return [];
    }

    return [
      'target_id' => $value[0],
      'target_revision_id' => $value[1],
    ];
  }
}