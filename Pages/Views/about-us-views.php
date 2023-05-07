<?php

	class member {
		public $id = 0;
		public $name = null;
		public $role = null;
		public $quote = null;
		public $image = null;
		public $social_media = array('facebook' => null, 'instagram' => null, 'twitter' => null, 'linkedin' => null);
	}

	function getMembers() {
		$m1 = new member();
		$m2 = new member();
		$m3 = new member();
		$m4 = new member();
		$m5 = new member();
		$members = array($m1, $m2, $m3, $m4, $m5);
		// Ahmad Hussein
		$m1->name = 'Blob Cat';
		$m1->role = 'Cat & Fullstack Developer';
		$m1->quote = '"Meow"';
		$m1->image = '../Images/Team/blob-cat.png';
		$m1->social_media['facebook'] = 'https://google.com';
		// Leen Obeid
		$m2->name = 'Blob Cat';
		$m2->role = 'Cat & Fullstack Developer';
		$m2->quote = '"Meow"';
		$m2->image = '../Images/Team/blob-cat.png';
		$m2->social_media['instagram'] = 'https://google.com';
		// Mahmoud Joumaa
		$m3->name = 'Blob Cat';
		$m3->role = 'Cat & Fullstack Developer';
		$m3->quote = '"Meow"';
		$m3->image = '../Images/Team/blob-cat.png';
		$m3->social_media['twitter'] = 'https://google.com';
		// Razan Al Hajjar
		$m4->name = 'Blob Cat';
		$m4->role = 'Cat & Fullstack Developer';
		$m4->quote = '"Meow"';
		$m4->image = '../Images/Team/blob-cat.png';
		$m4->social_media['linkedin'] = 'https://google.com';
		// Sara El Baba
		$m5->name = 'Blob Cat';
		$m5->role = 'Cat & Fullstack Developer';
		$m5->quote = '"Meow"';
		$m5->image = '../Images/Team/blob-cat.png';
		$m5->social_media['instagram'] = 'https://google.com';
		
		return $members;
	}

	function populateTeamMemberView(member $m) {
		?>
			<div class="team-member">
				<div class="member-intro">
					<?php
						echo '<h3>'.$m->name.'</h3>';
						echo '<h4>'.$m->role.'</h4>';
						echo '</div>';
						echo '<div class="member-img" style="background-image: url('.$m->image.');">';
						echo '<div class="member-quote">';
						echo '<span>'.$m->quote.'</span>';
						echo '</div>';
						echo '</div>';
						echo '<div class="member-social">';
						$keys = array_keys($m->social_media);
						for ($i = 0; $i < count($keys); $i++) {
							$account = $m->social_media[$keys[$i]];
							if ($account != null) {
								echo '<a href="'.$account.'" target="_blank">';
								echo '<div class="social-media '.$keys[$i].'" tabindex="0">';
								echo 'A';
								echo '</div>';
								echo '</a>';
							}
						}
						echo '</div>';
					?>
			</div>
		<?php
	}

?>
