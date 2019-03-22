<?php namespace Tests\Database\Definition\Table\Columns\String;

use Tests\Database\TestCase;

class StringDataTypeTest extends TestCase
{
	/**
	 * @var StringDataTypeMock
	 */
	protected $column;

	protected function setUp()
	{
		$this->column = new StringDataTypeMock(static::$database);
	}

	public function testCharset()
	{
		$this->assertEquals(
			" mock CHARACTER SET 'utf8'",
			$this->column->charset('utf8')->sql()
		);
	}

	public function testCollate()
	{
		$this->assertEquals(
			" mock COLLATE 'utf8_general_ci'",
			$this->column->collate('utf8_general_ci')->sql()
		);
	}

	public function testFull()
	{
		$this->assertEquals(
			" mock CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'",
			$this->column->collate('utf8_general_ci')->charset('utf8')->sql()
		);
	}
}