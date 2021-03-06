<?php include 'includes/head.php'; ?>

	<div class="row" id="content">
		<div id="primary">
			<h1>HTML</h1>
			<hr />
			<h2>Minimum Bar</h2>
			<p>This bar requires at least the NCSU name as a link to the main library website as well as your app name.</p>
		</div>
	</div>
		<header id="minimum-bar">
			<nav class="top-bar">
				<ul class="title-area">
					<li class="name">
						<a href="https://lib.ncsu.edu/">NCSU Libraries</a>
						<h2>Application Title</h2>
					</li>
				</ul>
			</nav>
		</header>

		<div id="content">
			<aside id="secnav">
				<ul class="side-nav">
					<li><a href="#grid">Grid</a></li>
					<li><a href="#typography">Typography</a></li>
					<li><a href="#links">Links</a></li>
					<li><a href="#lists">Lists</a></li>
					<li><a href="#blockquote">Blockquote</a></li>
					<li><a href="#tables">Tables</a></li>
					<li><a href="#forms">Forms</a></li>
					<li><a href="#images">Images</a></li>
				</ul>
			</aside>
			<article id="primary">
				<h2 id="grid">Grid</h2>
				<hr>
				<div class="row">
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
					<div class="columns large-1 grid">1</div>
				</div>
				<div class="row">
					<div class="columns large-2 grid">2</div>
					<div class="columns large-2 grid">2</div>
					<div class="columns large-2 grid">2</div>
					<div class="columns large-2 grid">2</div>
					<div class="columns large-2 grid">2</div>
					<div class="columns large-2 grid">2</div>
				</div>
				<div class="row">
					<div class="columns large-3 grid">3</div>
					<div class="columns large-3 grid">3</div>
					<div class="columns large-3 grid">3</div>
					<div class="columns large-3 grid">3</div>
				</div>
				<div class="row">
					<div class="columns large-4 grid">4</div>
					<div class="columns large-4 grid">4</div>
					<div class="columns large-4 grid">4</div>
				</div>
				<div class="row">
					<div class="columns large-6 grid">6</div>
					<div class="columns large-6 grid">6</div>
				</div>
				<div class="row">
					<div class="columns large-12 grid">12</div>
				</div>
				<div class="row">
					<h4>Below are the prefferred layouts</h4>
				</div>
				<div class="row">
					<div class="columns large-3 grid">1/3</div>
					<div class="columns large-9 grid">2/3</div>
				</div>
				<div class="row">
					<div class="columns large-9 grid">2/3</div>
					<div class="columns large-3 grid">1/3</div>
				</div>
				<div class="row">
					<div class="columns large-2 grid">2</div>
					<div class="columns large-4 grid">4</div>
					<div class="columns large-4 grid">4</div>
					<div class="columns large-2 grid">2</div>
				</div>
				<div class="row">
					<div class="columns large-2 grid">2</div>
					<div class="columns large-3 grid">3</div>
					<div class="columns large-3 grid">3</div>
					<div class="columns large-3 grid">3</div>
					<div class="columns large-1 grid">1</div>
				</div>
				<br>
				<h2 id="typography">Typography</h2>
				<hr />
				<h1>h1. Headline</h1>
				<h2>h2. Headline</h2>
				<h3>h3. Headline</h3>
				<h4>h4. Headline</h4>
				<h5>h5. Headline</h5>
				<h6>h6. Headline</h6>
				<p>p. This is my awesome paragraph text, it is the base style/size for paragraph text. We love 16px for body copy as it provides for a more consistent cross browser experience. It is also digitally equivalent to to 12pt standard set in print design. We also love the golden ratio, all of the type set here is based off of that deliciously elegant ratio. Enjoy!</p>

				<h2 id="links">Links</h2>
				<hr>
				<p>Links are very standard, and the <a href="#">color is preset</a> to the primary color.</p>

				<div class="row">
					<h2 id="lists">Lists</h2>
					<hr />
					<div class="row">
						<div class="columns large-3">
							<h4>ul</h4>
							<ul>
								<li>List item</li>
								<li>List item
									<ul>
										<li>sub list item</li>
										<li>sub list item</li>
										<li>sub list item</li>
									</ul>
								</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
							</ul>
						</div>
						<div class="columns large-3">
							<h4>ol</h4>
							<ol>
								<li>List item</li>
								<li>List item</li>
								<li>List item
									<ol>
										<li>sub list item</li>
										<li>sub list item</li>
										<li>sub list item</li>
									</ol>
								</li>
								<li>List item</li>
								<li>List item</li>
							</ol>
						</div>
						<div class="columns large-3">
							<h4>dl</h4>
							<dl>
								<dt>List item</dt>
								<dt>List item</dt>
								<dt>List item</dt>
								<dt>List item</dt>
								<dt>List item</dt>
							</dl>
						</div>
						<div class="columns large-3">
							<h4>ul styled</h4>
							<ul class="side-nav">
								<li><a href="#">List item</a></li>
								<li>List item</li>
								<li>List item</li>
								<li><a href="#">List item</a></li>
								<li><a href="#">List item</a></li>
							</ul>
							<code data-toggle>
<pre><ul class="side-nav">
	<li><a href="#">List item</a></li>
	<li>List item</li>
	<li>List item</li>
	<li><a href="#">List item</a></li>
	<li><a href="#">List item</a></li>
</ul></pre>
							</code>
						</div>
					</div>
				</div>

				<h2 id="blockquote">Blockquote</h2>
				<hr>
				<blockquote>
					<p>"I am a pretty pretty man."</p>
					<p>-Eric Pauley</p>
				</blockquote>


				<h2 id="tables">Tables</h2>
				<hr>
				<table>
					<thead>
						<tr>
							<th>Table Header</th>
							<th>Table Header</th>
							<th>Table Header</th>
							<th>Table Header</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Content Goes Here</td>
							<td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
							<td>Content Goes Here</td>
							<td>Content Goes Here</td>
						</tr>
						<tr>
							<td>Content Goes Here</td>
							<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
							<td>Content Goes Here</td>
							<td>Content Goes Here</td>
						</tr>
						<tr>
							<td>Content Goes Here</td>
							<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
							<td>Content Goes Here</td>
							<td>Content Goes Here</td>
						</tr>
					</tbody>
				</table>

				<h2 id="forms">Forms</h2>
				<hr />
				<form data-abide="" class="custom" novalidate="novalidate" data-invalid="">
					<fieldset>
						<!-- <legend>Fieldset</legend> -->

						<div class="row">
							<div class="large-6 columns error">
								<label for="password">Password <small>required</small></label>
								<input type="password" required="" name="password" placeholder="LittleW0men." id="password" data-invalid="">
								<small data-error-message="" class="error">Passwords must be at least 8 characters with 1 capital letter, 1 number, and one special character.</small>
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<label for="phone">Phone</label>
								<input type="tel" placeholder="1 234-567-8910" id="phone">
								<small data-error-message="" class="error">Please enter a properly formatted telephone number.</small>
							</div>
						</div>

						<div class="row">
							<div class="large-4 columns">
								<label for="email">Email</label>
								<input type="email" placeholder="foundation@zurb.com" id="email">
								<small class="error">Valid email required.</small>
							</div>
							<div class="large-4 columns error">
								<label for="url">URL <small>required</small></label>
								<input type="url" required="" placeholder="http://zurb.com" id="url" data-invalid="">
								<small data-error-message="" class="error">Valid URL required.</small>
							</div>
							<div class="large-4 columns">
								<div class="row collapse error">
									<label for="customDropdown1">Select Box <small>required</small></label>
									<select required="" class="medium hidden-field" id="customDropdown1" data-id="1378242902694-sjSeY" data-invalid="">
										<option value="">Select grocery item</option>
										<option value="first">Green Chilies</option>
										<option value="second">Raisins</option>
										<option value="third">Panko bread crumbs</option>
										<option value="fourth">Assistance</option>
									</select><div class="custom dropdown medium" data-id="1378242902694-sjSeY"><a class="current" href="#">Select grocery item</a><a class="selector" href="#"></a><ul><li class="selected">Select grocery item</li><li class="">Green Chilies</li><li class="">Raisins</li><li class="">Panko bread crumbs</li><li class="">Assistance</li></ul></div>
									<small data-error-message="" class="error">Broke.</small>
								</div>
							</div>
							<div class="small-2 columns">
								<label for="right-label" class="left inline">Inline Label</label>
					        </div>
							<div class="small-3 columns left">
          						<input type="text" id="right-label" placeholder="Inline Text Input">
        					</div>
						</div>

						<hr>

						<div class="row">
							<div class="large-12 columns">
								<label for="radio1" class="error"><input type="radio" required="" id="radio1" name="radio1" class="hidden-field" data-invalid=""><span class="custom radio"></span> Radio Button 1</label>
								<label for="radio1" class="error"><input type="radio" required="" id="radio1" name="radio1" class="hidden-field" data-invalid=""><span class="custom radio"></span> Radio Button 2</label>
								<label for="radio1" class="error"><input type="radio" required="" id="radio1" name="radio1" class="hidden-field" data-invalid=""><span class="custom radio"></span> Radio Button 3</label>
							</div>
							<div class="large-12 columns">
								<label for="checkbox1" class=""><input type="checkbox" required="" style="display: none;" id="checkbox1" class="hidden-field"><span class="custom checkbox"></span> Label for Checkbox</label>
								<label for="checkbox2" class=""><input type="checkbox" required="" style="display: none;" checked="" id="checkbox2" class="hidden-field"><span class="custom checkbox checked"></span> Label for Checkbox</label>
								<label for="checkbox3" class=""><input type="checkbox" required="" style="display: none;" id="checkbox3" checked="" class="hidden-field"><span class="custom checkbox checked"></span> Label for Checkbox</label>
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="large-12 columns">
								<label for="remarks">File Upload</label>
								<input type="file" />
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="large-12 columns">
								<label for="remarks">Textarea</label>
								<textarea placeholder="Leave your remarks here." name="remarks" id="remarks"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="large-12 columns">
								<button class="medium button green" type="submit">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
				<code data-toggle>
<pre>
//JS
scripts/foundation/foundation.abide.js //validation
scripts/foundation/foundation.forms.js

//css
@include foundation/components/forms
</pre>
				</code>

				<h2 id="images">Images</h2>
				<p>Images need to fit to the grid and should always have the width set to 100%</p>
				<hr>
				<p><img src="http://www.lib.ncsu.edu/sites/default/files/terrace.jpg"></p>
				<ul class="large-block-grid-4">
					<li><img src="//www.lib.ncsu.edu/sites/default/files/tripod.jpg" width="100%"></li>
					<li><img src="//www.lib.ncsu.edu/sites/default/files/tripod.jpg" width="100%"></li>
					<li><img src="//www.lib.ncsu.edu/sites/default/files/tripod.jpg" width="100%"></li>
					<li><img src="//www.lib.ncsu.edu/sites/default/files/tripod.jpg" width="100%"></li>
				</ul>
				<ul class="large-block-grid-2">
					<li><img src="http://www.lib.ncsu.edu/sites/default/files/nexus7.jpg" width="100%"></li>
					<li><img src="http://www.lib.ncsu.edu/sites/default/files/nexus7.jpg" width="100%"></li>
					<li><img src="http://www.lib.ncsu.edu/sites/default/files/nexus7.jpg" width="100%"></li>
					<li><img src="http://www.lib.ncsu.edu/sites/default/files/nexus7.jpg" width="100%"></li>
				</ul>
			</article>
		</div>

<?php
	include 'includes/foot.php';
?>
