<?php
/**
 * exReflection
 */
namespace ez;

/**
 * ref
 */
function ref($obj=null, $mem=null){
	return new ref($obj, $mem);
}
/**
 * ref
 */
class ref{
	private $obj;
	private $mem;
	public function __construct( $obj=null, $mem=null ){
		$this->obj = $obj;
		$this->mem = $mem;
	}
	public function __toString(){
		$rtn = @$this->get();
		return $rtn;
	}

	public function dump(){
		print $this->get();
	}

	public function get(){
		ob_start();
		$ref = new \ReflectionClass($this->obj);
		var_dump($ref);
		if( @$this->mem ){
			if( is_callable($ref, 'getMethod') ){
				$mem = $ref->getMethod($this->mem);
				var_dump($mem);
			}
			if( is_callable($ref, 'getProperty') ){
				$mem = $ref->getProperty($this->mem);
				var_dump($mem);
			}
		}
		return ob_get_clean();
	}

}