<?php
/**
 * FaqBlocksController Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('BlocksControllerTest', 'Blocks.TestSuite');

/**
 * FaqBlocksController Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Faqs\Test\Case\Controller
 */
class FaqBlocksControllerIndexTest extends BlocksControllerTest {

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'faqs';

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.categories.category',
		'plugin.categories.category_order',
		'plugin.workflow.workflow_comment',
		'plugin.faqs.faq',
		'plugin.faqs.faq_setting',
		'plugin.faqs.faq_question',
		'plugin.faqs.faq_question_order',
	);

/**
 * Edit controller name
 *
 * @var string
 */
	protected $_editController = 'faq_blocks';

}