<?php
unlink(realpath('fake.jpg'));
$data = file_get_contents('http://thispersondoesnotexist.com');
$img = imagecreatefromstring($data);
imagejpeg($img, 'fake.jpg');
echo '<img class="loading" src="fake.jpg" height="400" alt="fake face">';