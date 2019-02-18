<?php
$data = file_get_contents('http://thispersondoesnotexist.com');
$img = imagecreatefromstring($data);
imagejpeg($img, 'fake.jpg');
echo '<img src="fake.jpg?' . uniqid() . '" height="400" alt="fake face">';
