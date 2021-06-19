<?php namespace Tests\Database\Definition\Table\Columns\Traits;

use Tests\Database\TestCase;

final class DecimalLengthTest extends TestCase
{
	public function testLength() : void
	{
		$column = new DecimalLengthMock(static::$database);
		self::assertSame(
			' mock NOT NULL',
			$column->sql()
		);
		$column = new DecimalLengthMock(static::$database, 12);
		self::assertSame(
			' mock(12) NOT NULL',
			$column->sql()
		);
		$column = new DecimalLengthMock(static::$database, 16, 4);
		self::assertSame(
			' mock(16,4) NOT NULL',
			$column->sql()
		);
	}
}
