<?php

namespace Drupal\graphql_core\Plugin\GraphQL\Fields\Entity;

use Drupal\graphql_core\Plugin\GraphQL\Fields\EntityFieldBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * Generic field plugin for rendering entity field properties.
 *
 * @GraphQLField(
 *   id = "entity_field_item",
 *   secure = true,
 *   weight = -1,
 *   deriver = "Drupal\graphql_core\Plugin\Deriver\Fields\EntityFieldItemDeriver",
 * )
 */
class EntityFieldItem extends EntityFieldBase {

  /**
   * {@inheritdoc}
   */
  protected function resolveValues($value, array $args, ResolveInfo $info) {
    yield $this->resolveItem($value, $args, $info);
  }

}
