<?php

	class Member {
		public $id = 0;
		public $name = null;
		public $role = null;
		public $quote = null;
		public $image = null;
		public $social_media = array('facebook' => null, 'instagram' => null, 'twitter' => null, 'linkedin' => null);
	}

	function populateMembers() {
		$m1 = new Member();
		$m2 = new Member();
		$m3 = new Member();
		$m4 = new Member();
		$m5 = new Member();
		$members = array($m1, $m2, $m3, $m4, $m5);
		// Ahmad Hussein
		$m1->name = 'Ahmad Hussein';
		$m1->role = 'World Domination via AGI Plotter & Fullstack Developer';
		$m1->quote = '"EZ"';
		$m1->image = '../Images/Team/ahmad-hussein.jpg';
		$m1->social_media['linkedin'] = 'https://www.linkedin.com/in/ahmad-hussein-b55272243/';
		// Leen Obeid
		$m2->name = 'Leen Obeid';
		$m2->role = 'Tester & Fullstack Developer';
		$m2->quote = '"A journey of a thousand miles begins with a single step." -Lao Tzu';
		$m2->image = '../Images/Team/leen-obeid.jpg';
		$m2->social_media['linkedin'] = 'https://www.linkedin.com/in/leen-obeid-175394225/';
		$m2->social_media['instagram'] = 'https://www.instagram.com/leenobeid18/';
		// Mahmoud Joumaa
		$m3->name = 'Mahmoud Joumaa';
		$m3->role = 'Dreamer & Fullstack Developer';
		$m3->quote = '"Life is a journey to be experienced, not a problem to be solved." -Winnie the pooh';
		$m3->image = '../Images/Team/mahmoud-joumaa.jpeg';
		$m3->social_media['linkedin'] = 'https://www.linkedin.com/in/mahmoud-joumaa-661b9a25b/';
		// Razan Al Hajjar
		$m4->name = 'Razan Al Hajjar';
		$m4->role = 'Fullstack Developer';
		$m4->quote = '"You\'ll regret majoring in Computer Science during your second year."';
		$m4->image = '../Images/Team/razan-al-hajjar.jpg';
		$m4->social_media['instagram'] = 'https://instagram.com/itsraz.xoxo?igshid=NTc4MTIwNjQ2YQ==';
		$m4->social_media['linkedin'] = 'https://www.linkedin.com/in/razan-hajjar-a18923251/';
		// Sara El Baba
		$m5->name = 'Sara El Baba';
		$m5->role = 'Writer, swifitie at heart, & Fullstack Developer';
		$m5->quote = '"Work hard in silence, let your success be the noise." -Frank Ocean';
		$m5->image = '../Images/Team/sara-el-baba.jpg';
		$m5->social_media['instagram'] = 'https://instagram.com/sara_baba11?igshid=NTc4MTIwNjQ2YQ';
		$m5->social_media['linkedin'] = 'https://www.linkedin.com/in/sara-el-baba-2003s';
		
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
								echo '<div class="social-media '.$keys[$i].'">';
								echo '<a href="'.$account.'" target="_blank">';
								echo '</a>';
								echo '</div>';
							}
						}
						echo '</div>';
					?>
			</div>
		<?php
	}

?>
