<?php

namespace pkpudev\components\web;

/**
 * Extending yii\web\View
 */
class ViewBehavior extends \yii\base\Behavior
{
	/**
	 * Adding javascript in document.ready
	 * @param string $script
	 */
	public function addJsFuncReady($script)
	{
		$rnd = rand(0, 1000);

		$owner = $this->owner;
		$this->owner->registerJs($script, $owner::POS_READY, "js-func-{$rnd}");
	}

	/**
	 * Adding css style in document
	 * @param string $style
	 */
	public function addCssStyle($style)
	{
		$rnd = rand(0, 1000);

		$this->owner->registerCss($style, [], "css-style-{$rnd}");
	}
}
