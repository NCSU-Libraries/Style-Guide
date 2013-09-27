<?php
	include 'includes/head.php';
?>

		<div id="content" class="css">
			<aside id="secnav">
				<ul class="side-nav">
					<li><a href="#buttons">Media Queries</a></li>
					<li><a href="#buttons">Buttons</a></li>
					<li><a href="#labels">Labels</a></li>
					<li><a href="#alerts">Alert Boxes</a></li>
					<li><a href="#progress_bars">Progress Bars</a></li>
					<li><a href="#breadcrumbs">Breadcrumb</a></li>
					<li><a href="#pagination">Pagination</a></li>
					<li><a href="#panels">Panels</a></li>
				</ul>
			</aside>
			<article id="primary">
				<h2>Media Queries</h2>
				<hr>
				<h4>Breakpoints</h4>
				<p>Since Foundation is 'mobile first' the default breakpoint is mobile. If you want to overwrite a style make sure you wrap it in the approproate media query first.</p>
				<code>
					$small-screen: 768px;<br>
					$medium-screen: 960px;<br>
					$large-screen: 1280px;
				</code>

				<p>Alter styles for screens at least 768px wide. This is where the grid changes:</p>
				<code> @media #{$small} { }</code>

				<p>Used to alter styles for screens at least 960px wide:</p>
				<code> @media #{$medium} { }</code>

				<p>Used to alter styles for screens at least 1280px wide:</p>
				<code>@media #{$large} { }</code>

				<p>Apply styles to screens in landscape orientation:</p>
				<code>@media #{$landscape} { }</code>

				<p>Apply styles to screens in portrait orientation:</p>
				<code>@media #{$portrait} { }</code>


				<h2 id="buttons">Buttons</h2>
				<hr />
				<!-- Size Classes -->
				<a href="#" class="button">Default Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="button">Default Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>
				<a href="#" class="tiny button">Tiny Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="tiny button">Tiny Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>
				<a href="#" class="small button">Small Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="small button">Small Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>
				<a href="#" class="large button">Large Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="large button">Large Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>

				<!-- Color Classes -->
				<a href="#" class="button secondary">Secondary Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="button secondary">Secondary Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>
				<a href="#" class="button success">Success Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="button success">Success Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>

				<!-- Disabled Class -->
				<a href="#" class="button disabled">Disabled Button</a>
				<code data-toggle>
<pre>
//HTML
<a href="#" class="button disabled">Disabled Button</a>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>

				<h4>Button Groups</h4>
				<hr />
				<!-- A default button-group with small buttons inside -->
				<ul class="button-group">
					<li><a href="#" class="small button">Button 1</a></li>
					<li><a href="#" class="small button">Button 2</a></li>
					<li><a href="#" class="small button">Button 3</a></li>
				</ul>
				<code data-toggle>
<pre>
//HTML
<ul class="button-group">
	<li><a href="#" class="small button">Button 1</a></li>
	<li><a href="#" class="small button">Button 2</a></li>
	<li><a href="#" class="small button">Button 3</a></li>
</ul>

//CSS
@import "foundation/components/buttons"
</pre>
				</code>

				<h2 id="alerts">Alert Boxes</h2>
				<hr>
				<div class="alert-box" data-alert="">
      				No, you submit, do you hear? You be strong, you survive... You stay alive, no matter what occurs! I will find you. No matter how long it takes, no matter how far, I will find you.
      				<a class="close" href="">×</a>
    			</div>
    			<code data-toggle>
<pre>
//HTML
<div class="alert-box" data-alert="">
  This is a standard alert.
  <a class="close" href="">×</a>
</div>

//JS
scripts/foundation/foundation.alerts.js
</pre>
    			</code>
    			<div class="alert-box success" data-alert="">
      				This is a success alert.
      				<a class="close" href="">×</a>
    			</div>
    			<code data-toggle>
<pre>
//HTML
<div class="alert-box success" data-alert="">
	This is a success alert.
	<a class="close" href="">×</a>
</div>

//JS
scripts/foundation/foundation.alerts.js
</pre>
    			</code>
    			<div class="alert-box secondary" data-alert="">
      				This is a secondary alert.
      				<a class="close" href="">×</a>
    			</div>
    			<code data-toggle>
<pre>
//HTML
<div class="alert-box secondary" data-alert="">
	This is a secondary alert.
	<a class="close" href="">×</a>
</div>

//JS
scripts/foundation/foundation.alerts.js
</pre>
    			</code>

				<h2 id="progress_bars">Progress Bars</h2>
				<hr>
				<p>A simple way to add progress bars to your layouts. You only need two HTML elements to make them and they're easy to customize.</p>

				<div class="progress large-12"><span style="width: 40%" class="meter"></span></div>
				<code data-toggle>
<pre>
//HTML
<div class="progress large-12">
	<span style="width: 40%" class="meter"></span>
</div>

//CSS
@import "foundation/components/progress-bars"
</pre>
</code>
				<div class="progress success large-16"><span style="width: 80%" class="meter"></span></div>
				<code data-toggle>
<pre>
//HTML
<div class="progress success large-16">
	<span style="width: 80%" class="meter"></span>
</div>

//CSS
@import "foundation/components/progress-bars"
</pre>
</code>
				<div class="nice secondary progress"><span style="width: 50%" class="meter"></span></div>
				<code data-toggle>
<pre>
//HTML
<div class="nice secondary progress">
	<span style="width: 50%" class="meter"></span>
</div>

//CSS
@import "foundation/components/progress-bars"
</pre>
				</code>

				<h2 id="breadcrumbs">Breadcrumb</h2>
				<hr>
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li><a href="#">Features</a></li>
					<li class="unavailable"><a href="#">Gene Splicing</a></li>
					<li class="current"><a href="#">Cloning</a></li>
				</ul>
				<code data-toggle>
<pre>
//HTML
<ul class="breadcrumbs">
	<li><a href="#">Home</a></li>
	<li><a href="#">Features</a></li>
	<li class="unavailable"><a href="#">Gene Splicing</a></li>
	<li class="current"><a href="#">Cloning</a></li>
</ul>

//CSS
@import "foundation/components/breadcrumbs"
</pre>
				</code>

				<h2 id="pagination">Pagination</h2>
				<hr>
				<ul class="pagination">
					<li class="arrow unavailable"><a href="">«</a></li>
					<li class="current"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li class="unavailable"><a href="">…</a></li>
					<li><a href="">12</a></li>
					<li><a href="">13</a></li>
					<li class="arrow"><a href="">»</a></li>
				</ul>
				<code data-toggle>
<pre>
//HTML
<ul class="pagination">
	<li class="arrow unavailable"><a href="">«</a></li>
	<li class="current"><a href="">1</a></li>
	<li><a href="">2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li class="unavailable"><a href="">…</a></li>
	<li><a href="">12</a></li>
	<li><a href="">13</a></li>
	<li class="arrow"><a href="">»</a></li>
</ul>

/CSS
@import "foundation/components/pagination"
</pre>
				</code>


				<div class="row">
					<h2 id="panels">Panels</h2>
					<hr>
					<div class="row">
						<div class="large-6 columns">
							<div class="panel">
								<h5>This is a regular panel.</h5>
								<p>It has an easy to override visual style, and is appropriately subdued.</p>
							</div>
							<code data-toggle>
<pre>
//HTML
<div class="panel">
	<h5>This is a regular panel.</h5>
	<p>It has an easy to override visual style, and is appropriately subdued.</p>
</div>

//CSS
@import "foundation/components/panels"
</pre>
						</code>
						</div>
						<div class="large-6 columns">
							<div class="panel callout">
								<h5>This is a callout panel.</h5>
								<p>It's a little ostentatious, but useful for important content.</p>
							</div>
							<code data-toggle>
<pre>
//HTML
<div class="panel callout">
	<h5>This is a callout panel.</h5>
	<p>It's a little ostentatious, but useful for important content.</p>
</div>

//CSS
@import "foundation/components/panels"
</pre>
							</code>
						</div>
					</div>
				</div>
			</article>
		</div>

<?php
	include 'includes/foot.php';
?>
