<?php
	include 'includes/head.php';
?>

		<div id="content">
			<aside id="secnav">
				<h4>Side Nav</h4>
				<ul class="side-nav">
					<li><a href="#type-ahead">Type Ahead</a></li>
					<li><a href="#tabs">Tabs</a></li>
					<li><a href="#accordion">Accordion</a></li>
					<li><a href="#tooltips">Tooltips</a></li>
					<li><a href="#artbox">Artbox/Carousel</a></li>
					<li><a href="#artbox">Modal Window</a></li>
				</ul>
			</aside>
			<article id="primary">
				<h2 id="type-ahead">Type Ahead</h2>
		        <p>Type country name in english:</p>
		        <div>
		            <input type="text" name="country" id="autocomplete"/>
		        </div>
		        <code data-toggle>
<pre>
//HTML
<h2 id="type-ahead">Type Ahead</h2>
<p>Type country name in english:</p>
<div>
    <input type="text" name="country" id="autocomplete"/>
</div>

//JS
scripts/vendor/jquery.autocomplete.js
scripts/vendor/jquery.mockjax.js
scripts/type-ahead.js

//File of items to search
scripts/countries.txt

//Full Documentation
https://github.com/devbridge/jQuery-Autocomplete</pre>
		        </code>

				<h2 id="tabs">Tabs</h2>
				<hr>
				<div class="section-container tabs" data-section="tabs">
					<section>
						<p class="title" data-section-title><a href="#">Section 1</a></p>
						<div class="content" data-section-content>
							<p>Content of section 1.</p>
						</div>
					</section>
					<section>
						<p class="title" data-section-title><a href="#">Section 2</a></p>
						<div class="content" data-section-content>
							<p>Content of section 2.</p>
						</div>
					</section>
				</div>
				<code data-toggle>
<pre>
//HTML
<div class="section-container tabs" data-section="tabs">
	<section>
		<p class="title" data-section-title><a href="#">Section 1</a></p>
		<div class="content" data-section-content>
			<p>Content of section 1.</p>
		</div>
	</section>
	<section>
		<p class="title" data-section-title><a href="#">Section 2</a></p>
		<div class="content" data-section-content>
			<p>Content of section 2.</p>
		</div>
	</section>
</div>

//CSS
@import "foundation/components/section"
</pre>
				</code>

				<h2>Accordion</h2>
				<hr>
				<div data-section="accordion" class="section-container accordion">
					<section class="active">
						<p data-section-title="" class="title"><a href="#">Section 1</a></p>
						<div data-section-content="" class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris.</p>
						</div>
					</section>
					<section>
						<p data-section-title="" class="title"><a href="#">Section 2</a></p>
						<div data-section-content="" class="content">
							<p>Do you want some?</p>
							<p><a href="#" class="button">Yes, Please!</a></p>

						</div>
					</section>
				</div>
				<code data-toggle>
<pre>
//HTML
<div data-section="accordion" class="section-container accordion">
	<section class="active">
		<p data-section-title="" class="title"><a href="#">Section 1</a></p>
		<div data-section-content="" class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris.</p>
		</div>
	</section>
	<section>
		<p data-section-title="" class="title"><a href="#">Section 2</a></p>
		<div data-section-content="" class="content">
			<p>Do you want some?</p>
			<p><a href="#" class="button">Yes, Please!</a></p>

		</div>
	</section>
</div>

//CSS
@import "foundation/components/section"
</pre>
				</code>

				<h2 id="tooltips">Tooltips</h2>
				<hr>
				<p>Here's a tooltip just <span data-tooltip class="has-tip" title="Charlie">for</span></p>
				<code data-toggle>
<pre>
//HTML
<p>Here's a tooltip just <span data-tooltip class="has-tip" title="Charlie">for</span></p>

//JS
scripts/foundation/foundation.tooltips.js
</pre>
				</code>

				<h2 id="artbox">Artbox/Carousel</h2>
				<ul data-orbit data-options="animation:fade;">
					<li>
						<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-ash3/1012747_10201094050488956_83320848_n.jpg" />
						<div class="orbit-caption">Chuck having a play date with some of the neighborhood kids.</div>
					</li>
					<li>
						<img src="http://i.imgur.com/7qZaJpJ.jpg" />
						<div class="orbit-caption">This is another caption.</div>
					</li>
					<li>
						<img src="http://www.killsometime.com/content/pictures/files/2916.jpg" width="100%" />
					</li>
				</ul><br>
				<code data-toggle>
<pre>
//HTML
<ul data-orbit data-options="animation:fade;">
	<li>
		<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-ash3/1012747_10201094050488956_83320848_n.jpg" />
		<div class="orbit-caption">Chuck having a play date with some of the neighborhood kids.</div>
	</li>
	<li>
		<img src="http://i.imgur.com/7qZaJpJ.jpg" />
		<div class="orbit-caption">This is another caption.</div>
	</li>
	<li>
		<img src="http://www.killsometime.com/content/pictures/files/2916.jpg" width="100%" />
	</li>
</ul>

//CSS
@import "foundation/components/orbit"

//JS
scripts/foundation/foundation.orbit.js
</pre>
				</code>

				<h2>Modal Windows</h2>
				<hr>
				<p><a href="#" data-reveal-id="myModal">Click Me For A Modal</a></p>
				<div id="myModal" class="reveal-modal">
					<h2>Awesome. I have it.</h2>
					<p class="lead">Your couch.  It is mine.</p>
					<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
					<a class="close-reveal-modal">&#215;</a>
				</div>
				<div class="reveal-modal-bg" style="display: none"></div>
				<code data-toggle>
<pre>
//HTML
<a href="#" data-reveal-id="myModal">Click Me For A Modal</a>
<div id="myModal" class="reveal-modal">
	<h2>Awesome. I have it.</h2>
	<p class="lead">Your couch.  It is mine.</p>
	<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
	<a class="close-reveal-modal">&#215;</a>
</div>
<div class="reveal-modal-bg"></div>

//CSS
@import "foundation/components/reveal"

//JS
scripts/foundation/foundation.reveal.js
</pre>
				</code>

			</article>

		</div>

<?php
	include 'includes/foot.php';
?>
