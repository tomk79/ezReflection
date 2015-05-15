<?php
/**
 * test for ez\ref
 */
class ezReflectionTest extends PHPUnit_Framework_TestCase{
	private $ref;

	public function setup(){
		mb_internal_encoding('UTF-8');
	}


	/**
	 * 普通に実行してみるテスト
	 */
	public function testStandard(){
		\ez\ref($this)->dump();
		echo( \ez\ref('ezReflectionTest','getMethods') );
	}

}
