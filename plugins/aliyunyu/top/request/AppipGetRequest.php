<?php
//zend by 旺旺ecshop2011所有  禁止倒卖 一经发现停止任何服务
class AppipGetRequest
{
	private $apiParas = array();

	public function getApiMethodName()
	{
		return 'taobao.appip.get';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}

	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}


?>
