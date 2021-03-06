<?php
/*
	Copyright GOBOU Y. Yannick
======================================================
	CLASS FontRender
	PAGE cores/_natives/PHP/Register.core.g/ARC_ENGINE_RENDING/.PNG/FontRender.arc-render
======================================================

	Moteur de rendu d'images PNG
	
*/

/*
	CLASS 'FontRender'
*/
// echo 'loading...';exit;

class FontRender extends Render{
	
	public function __construct(){
		global $GLANG;
		$this->syslang = $GLANG;
		$this->arguments = func_get_args();
		$this->file = $this->arguments[0];
		}
	
	public function generate(){ 
		header('Content-Type: application/octet-stream');
		$this->contents = file_get_contents($this->file);
		self::write($this->contents);
		}
	
	
	}

	

	

	$this->Render = new FontRender($this->file);
	$this->Render->generate();
	
?>