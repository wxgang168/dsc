<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class AreaRegion extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'area_region';
	public $timestamps = false;
	protected $fillable = array('shipping_area_id', 'region_id', 'ru_id');
	protected $guarded = array();
}

?>
