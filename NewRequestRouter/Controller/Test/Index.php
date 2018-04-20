<?php
namespace BelVG\NewRequestRouter\Controller\Test;
/**
 * Class Index
 * @package BelVG\NewRequestRouter\Controller\Test
 */
use Magento\Framework\App\Action\Context ;

class Index extends \Magento\Framework\App\Action\Action
{
	public function __construct(Context $context)
	{
		parent::__construct($context);
	}

	public function execute()
	{
		die('Called by NewRequestRouter!');
	}
}