<?php

namespace AchttienVijftien\Bundle\TileBundle;

use AchttienVijftien\Tile\TemplateLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * Class TileBundle.
 *
 * @package AchttienVijftien\Bundle\TileBundle
 */
class TileBundle extends AbstractBundle {
	/**
	 * @param array $config
	 * @param ContainerConfigurator $container
	 * @param ContainerBuilder $builder
	 *
	 * @return void
	 */
	public function loadExtension( array $config, ContainerConfigurator $container, ContainerBuilder $builder ): void {
		$container->import( '../config/services.yaml' );
	}

	/**
	 * Boots bundle.
	 *
	 * @return void
	 */
	public function boot(): void {
		// hook Tile template loader.
		( new TemplateLoader() )->add_hooks();
	}
}
