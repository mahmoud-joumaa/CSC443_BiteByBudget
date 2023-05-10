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
		// Siyarafour
		$p1->name = "Siyarafour";
		$p1->image = "../Images/Partners/siyarafour.png";
		$p1->description = "Siyarafour is a prominent supermarket chain that provides a broad range of high-quality products at affordable prices. With stores located throughout the country, Siyarafour is a convenient one-stop-shop for all of its customers' needs. Siyarafour offers a diverse selection of products that caters to a wide range of customer preferences. The supermarket is renowned for its excellent customer service and its commitment to ensuring that customers have a great shopping experience. Siyarafour's knowledgeable and friendly staff are always available to help customers find what they need and provide personalized assistance. With its dedication to customer satisfaction, Siyarafour has become a popular destination for people looking for quality products at reasonable prices.";
		// Foodies
		$p2->name = "Foodies";
		$p2->image = "../Images/Partners/foodies.jpg";
		$p2->description = "Foodies is a supermarket chain that focuses on providing healthy and sustainable options for its customers. Its emphasis on organic, natural, and locally sourced products allows health-conscious consumers to find a wide range of options that cater to their dietary preferences. In addition, Foodies also caters to people with dietary restrictions or food allergies by offering a variety of specialty products. Sustainability is a core value for Foodies, and the supermarket is committed to using eco-friendly materials for its packaging. Apart from its healthy offerings, Foodies also provides gourmet food and beverage options that attract foodies to the supermarket. With helpful and knowledgeable staff always available to offer guidance, Foodies is a popular destination for customers seeking a personalized and enjoyable shopping experience.";
		// Winneys
		$p3->name = "Winneys";
		$p3->image = "../Images/Partners/winneys.jpg";
		$p3->description = "Winneys is a premium boutique supermarket that offers a hand-picked selection of high-quality products. Instead of offering an overwhelming variety, Winneys focuses on sourcing the best products from top local and international producers to ensure that customers receive only the finest. With a stylish and modern design, Winneys offers a shopping experience that is unique and appealing to discerning customers who value quality over quantity. Winneys attracts customers who are willing to pay a premium for its carefully curated selection of products and personalized service.";

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
