<?php
if (rand(0, 1) == 0) {
    header('Location: a.html');
} else {
    header('Location: b.html');
}
?>