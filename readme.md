Two small scripts I wrote for a recent web development job in PHP. The site in question wanted to be able to have feedback sent from a form on the front page and also have a very simple security system to protect a page with a listing of the newsletter, tuition and lunch schedule. They didn't want a complicated solution so I came up with a cookie based solution since they weren't overly worried about how secure it was.

Access.php  - The crux of the secure page. This processes the attempt to login.
Process.php  - Sends the feedback email