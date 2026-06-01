<?php
	
	function fnGetData () {
		
		require 'personnel.php';
		require 'courses.php';
		require 'educations.php';
		
		return array(
			'personnel' => $personnel,
			'courses' => $courses,
			'educations' => $educations
		);
	}
?>