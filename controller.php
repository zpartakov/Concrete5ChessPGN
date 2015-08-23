<?php
defined('C5_EXECUTE') or die("Access Denied.");

class ChesspgnBlockController extends BlockController {
	//class ChesspgnBlockController extends Concrete5_Controller_Block_Html {
	
	public function getBlockTypeDescription() {
		return t("Chess PGN displayer");
	}
	
	public function getBlockTypeName() {
		return t("chesspgn");
	}
	
	protected $btTable = 'chesspgn';
	
	public function view(){
	
	}
}
