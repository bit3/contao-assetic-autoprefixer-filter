<?php

/**
 * Assetic Autoprefixer filter integration for Contao Open Source CMS.
 *
 * @copyright  2014 bit3 UG <http://bit3.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    bit3/contao-assetic-autoprefixer-filter
 * @license    LGPL-3.0+ <http://www.gnu.org/licenses/lgpl-3.0.html>
 */

namespace Bit3\Contao\Assetic\Autoprefixer;

use Bit3\Assetic\Filter\Autoprefixer\AutoprefixerFilter;
use Bit3\Contao\Assetic\AsseticEvents;
use Bit3\Contao\Assetic\Event\CreateFilterEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class FilterFactory implements EventSubscriberInterface
{
	/**
	 * {@inheritdoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			AsseticEvents::CREATE_FILTER => 'createAutoprefixerFilter',
		);
	}

	public function createAutoprefixerFilter(CreateFilterEvent $event)
	{
		// filter is already created
		if ($event->getFilter()) {
			return;
		}

		$configuration = $event->getConfiguration();

		// skip other filter types
		if ($configuration['type'] != 'autoprefixer') {
			return;
		}

		$filter = new AutoprefixerFilter();
		$filter->setCascade($configuration['autoprefixer_cascade']);
		$filter->setSafe($configuration['autoprefixer_safe']);

		$event->setFilter($filter);
	}
}
