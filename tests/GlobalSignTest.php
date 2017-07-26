<?php

use Detain\MyAdminGlobalSign\GlobalSign;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-07-26 at 07:21:00.
 */
class GlobalSignTest extends TestCase
{
	/**
	 * @var GlobalSign
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		if (file_exists(__DIR__.'/.env')) {
			$dotenv = new Dotenv\Dotenv(__DIR__);
			$dotenv->load();
		}
		$this->object = new GlobalSign(getenv('GLOBALSIGN_USERNAME'), getenv('GLOBALSIGN_PASSWORD'));
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers GlobalSign::list_certs
	 * @todo   Implement testList_certs().
	 */
	public function testList_certs()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::create_alphassl
	 * @todo   Implement testCreate_alphassl().
	 */
	public function testCreate_alphassl()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::create_domainssl
	 * @todo   Implement testCreate_domainssl().
	 */
	public function testCreate_domainssl()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::create_domainssl_autocsr
	 * @todo   Implement testCreate_domainssl_autocsr().
	 */
	public function testCreate_domainssl_autocsr()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::create_organizationssl
	 * @todo   Implement testCreate_organizationssl().
	 */
	public function testCreate_organizationssl()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::create_organizationssl_autocsr
	 * @todo   Implement testCreate_organizationssl_autocsr().
	 */
	public function testCreate_organizationssl_autocsr()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::create_extendedssl
	 * @todo   Implement testCreate_extendedssl().
	 */
	public function testCreate_extendedssl()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::GetOrderByOrderID
	 * @todo   Implement testGetOrderByOrderID().
	 */
	public function testGetOrderByOrderID()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::GetOrderByDataRange
	 * @todo   Implement testGetOrderByDataRange().
	 */
	public function testGetOrderByDataRange()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::GetDVApproverList
	 * @todo   Implement testGetDVApproverList().
	 */
	public function testGetDVApproverList()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::GSResendEmail
	 * @todo   Implement testGSResendEmail().
	 */
	public function testGSResendEmail()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::GSChangeApproverEmail
	 * @todo   Implement testGSChangeApproverEmail().
	 */
	public function testGSChangeApproverEmail()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::renewAlphaDomain
	 * @todo   Implement testRenewAlphaDomain().
	 */
	public function testRenewAlphaDomain()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::renewOrganizationSSL
	 * @todo   Implement testRenewOrganizationSSL().
	 */
	public function testRenewOrganizationSSL()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::renewExtendedSSL
	 * @todo   Implement testRenewExtendedSSL().
	 */
	public function testRenewExtendedSSL()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers GlobalSign::GSReIssue
	 * @todo   Implement testGSReIssue().
	 */
	public function testGSReIssue()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}
}