<?php $this->layout = 'academic'; ?>
<?php $this->set("title_for_layout","Contact"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Contact</h1></div>

<address>
    <strong>Twitter, Inc.</strong><br>
    795 Folsom Ave, Suite 600<br>
    San Francisco, CA 94107<br>
    <abbr title="Phone">P:</abbr> (123) 456-7890<br>
    <a href="mailto:#">first.last@gmail.com</a>
</address>

<?php 
if ($this->Session->check('Auth.User.id')) {
	echo ("<div class='centered' style='margin-top:30px;'><p>To edit this page, go to <code>/app/view/pages/contact.ctp</code></p></div>");
} ?>