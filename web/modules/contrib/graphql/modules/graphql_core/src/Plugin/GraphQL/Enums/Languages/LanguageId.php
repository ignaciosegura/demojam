<?php

namespace Drupal\graphql_core\Plugin\GraphQL\Enums\Languages;

use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\graphql\Plugin\GraphQL\Enums\EnumPluginBase;
use Drupal\graphql\Plugin\GraphQL\PluggableSchemaBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Generates an enumeration of numbers.
 *
 * @GraphQLEnum(
 *   id = "language_id",
 *   name = "LanguageId"
 * )
 */
class LanguageId extends EnumPluginBase implements ContainerFactoryPluginInterface {

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * LanguageId constructor.
   *
   * @param array $configuration
   *   The plugin configuration array.
   * @param string $pluginId
   *   The plugin id.
   * @param array $pluginDefinition
   *   The plugin definition array.
   * @param \Drupal\Core\Language\LanguageManagerInterface $languageManager
   *   The language manager service.
   */
  public function __construct(array $configuration, $pluginId, $pluginDefinition, LanguageManagerInterface $languageManager) {
    parent::__construct($configuration, $pluginId, $pluginDefinition);
    $this->languageManager = $languageManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $pluginId, $pluginDefinition) {
    return new static(
      $configuration,
      $pluginId,
      $pluginDefinition,
      $container->get('language_manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildValues(PluggableSchemaBuilderInterface $schemaBuilder) {
    $values = [];

    foreach ($this->languageManager->getLanguages() as $language) {
      $values[] = [
        'name' => str_replace('-', '_', $language->getId()),
        'value' => $language->getId(),
        'description' => $language->getName(),
      ];
    }

    return $values;
  }

}
