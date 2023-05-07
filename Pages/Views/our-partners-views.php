<?php

	class Partner {
		public $name;
		public $image;
		public $description;
	}

	function populatePartners() {
		$p1 = new Partner();
		$p2 = new Partner();
		$p3 = new Partner();
		// Partner 1
		$p1->name = "Partner 1";
		$p1->image = "../Images/Partners/partner-1.png";
		$p1->description = "Sample Text";
		// Partner 2
		$p2->name = "Partner 2";
		$p2->image = "../Images/Partners/partner-2.png";
		$p2->description = "Sample Text";
		// Partner 3
		$p3->name = "Partner 3";
		$p3->image = "../Images/Partners/partner-3.png";
		$p3->description = "Sample Text";

		$partners = array($p1, $p2, $p3);
		return $partners;
	}

	function populatePartnerView($p, $name, $image, $description) {
		echo '<div class="partner ';
		if ($p == 0)
			echo 'left" style="background-color: #303436;"';
		else
			echo 'right" style="background-color: #181a1b;"';
		echo '>';
		echo '<h3>'.$name.'</h3>';
		echo '<div>';
		echo '<img src="'.$image.'"/>';
		echo '<p>'.$description.'</p>';
		echo '</div>';
		echo '</div>';
	}

?>
