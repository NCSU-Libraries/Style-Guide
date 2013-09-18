<?php
	include 'includes/head.php';
?>

		<div id="content" class="css">
			<aside id="secnav">
				<h4>Side Nav</h4>
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
				<p>Breakpoints</p>
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
				<code data-toggle><a href="#" class="button">Default Button</a></code>
				<a href="#" class="tiny button">Tiny Button</a>
				<code data-toggle><a href="#" class="tiny button">Tiny Button</a></code>
				<a href="#" class="small button">Small Button</a>
				<code data-toggle><a href="#" class="small button">Small Button</a></code>
				<a href="#" class="large button">Large Button</a>
				<code data-toggle><a href="#" class="large button">Large Button</a></code>

				<!-- Color Classes -->
				<a href="#" class="button secondary">Secondary Button</a>
				<code data-toggle><a href="#" class="button secondary">Secondary Button</a></code>
				<a href="#" class="button success">Success Button</a>
				<code data-toggle><a href="#" class="button success">Success Button</a></code>
				<a href="#" class="button alert">Alert Button</a>
				<code data-toggle><a href="#" class="button alert">Alert Button</a></code>

				<!-- Disabled Class -->
				<a href="#" class="button disabled">Disabled Button</a>
				<code data-toggle><a href="#" class="button disabled">Disabled Button</a></code>

				<h4>Button Groups</h4>
				<hr />
				<!-- A default button-group with small buttons inside -->
				<ul class="button-group">
					<li><a href="#" class="small button">Button 1</a></li>
					<li><a href="#" class="small button">Button 2</a></li>
					<li><a href="#" class="small button">Button 3</a></li>
				</ul>
				<code data-toggle>
<pre><ul class="button-group">
	<li><a href="#" class="small button">Button 1</a></li>
	<li><a href="#" class="small button">Button 2</a></li>
	<li><a href="#" class="small button">Button 3</a></li>
</ul></pre>
				</code>

				<h2 id="alerts">Alert Boxes</h2>
				<hr>
				<div class="alert-box" data-alert="">
      				This is a standard alert.
      				<a class="close" href="">×</a>
    			</div>
    			<code data-toggle>
<pre>
<div class="alert-box" data-alert="">
  This is a standard alert.
  <a class="close" href="">×</a>
</div>
</pre>
    			</code>
    			<div class="alert-box success" data-alert="">
      				This is a success alert.
      				<a class="close" href="">×</a>
    			</div>
    			<code data-toggle>
<pre>
<div class="alert-box success" data-alert="">
	This is a success alert.
	<a class="close" href="">×</a>
</div>
</pre>
    			</code>
    			<div class="alert-box secondary" data-alert="">
      				This is a secondary alert.
      				<a class="close" href="">×</a>
    			</div>
    			<code data-toggle>
<pre>
<div class="alert-box secondary" data-alert="">
	This is a secondary alert.
	<a class="close" href="">×</a>
</div>
</pre>
    			</code>

				<h2 id="progress_bars">Progress Bars</h2>
				<hr>
				<p>A simple way to add progress bars to your layouts. You only need two HTML elements to make them and they're easy to customize.</p>

				<div class="progress large-12"><span style="width: 40%" class="meter"></span></div>
				<code data-toggle><div class="progress large-12"><span style="width: 40%" class="meter"></span></div></code>
				<div class="progress success large-16"><span style="width: 80%" class="meter"></span></div>
				<code data-toggle><div class="progress success large-16"><span style="width: 80%" class="meter"></span></div></code>
				<div class="nice secondary progress"><span style="width: 50%" class="meter"></span></div>
				<code data-toggle><div class="nice secondary progress"><span style="width: 50%" class="meter"></span></div></code>

				<h2 id="breadcrumbs">Breadcrumb</h2>
				<hr>
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li><a href="#">Features</a></li>
					<li class="unavailable"><a href="#">Gene Splicing</a></li>
					<li class="current"><a href="#">Cloning</a></li>
				</ul>
				<code data-toggle>
<pre><ul class="breadcrumbs">
	<li><a href="#">Home</a></li>
	<li><a href="#">Features</a></li>
	<li class="unavailable"><a href="#">Gene Splicing</a></li>
	<li class="current"><a href="#">Cloning</a></li>
</ul></pre>
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
<pre><ul class="pagination">
	<li class="arrow unavailable"><a href="">«</a></li>
	<li class="current"><a href="">1</a></li>
	<li><a href="">2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li class="unavailable"><a href="">…</a></li>
	<li><a href="">12</a></li>
	<li><a href="">13</a></li>
	<li class="arrow"><a href="">»</a></li>
</ul></pre>
				</code>


				<div class="row">
					<h2 id="panels">Panels</h2>
					<hr>
					<div class="row">
						<div class="large-12 columns">
							<div class="panel">
								<h5>This is a regular panel.</h5>
								<p>It has an easy to override visual style, and is appropriately subdued.</p>
							</div>
							<code data-toggle>
<pre><div class="panel">
	<h5>This is a regular panel.</h5>
	<p>It has an easy to override visual style, and is appropriately subdued.</p>
</div></pre>
						</code>
						</div>
						<div class="large-12 columns">
							<div class="panel callout">
								<h5>This is a callout panel.</h5>
								<p>It's a little ostentatious, but useful for important content.</p>
							</div>
							<code data-toggle>
<pre><div class="panel callout">
	<h5>This is a callout panel.</h5>
	<p>It's a little ostentatious, but useful for important content.</p>
</div></pre>
							</code>
						</div>
					</div>
				</div>
			</article>
		</div>

<?php
	include 'includes/foot.php';
?>