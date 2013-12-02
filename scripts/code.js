var code = {
	init : function(){
		code.escapeTags();
		code.handleToggle();
	},

	escapeTags : function(){
		// escape tags in <code>
		$('code').each(function(){
			var str = $(this).html();
			var stripped = str.replace(/</g,'&lt;').replace(/>/g,'&gt;');
			var stripped = stripped.replace(/&lt;br&gt;/g,'<br>').replace(/&lt;br\/&gt;/g,'<br>'); //replace <br>
			var stripped = stripped.replace(/&lt;pre&gt;/g,'<pre>').replace(/&lt;\/pre&gt;/g,'</pre>'); //replace <pre>
			$(this).html(stripped);
		})
	},

	handleToggle : function(){
		var oldHTML = $('code[data-toggle]').html();
		// toggle <code> blocks
		$('code[data-toggle]').prev().after('<a href="#" class="toggle-code">Get code</a>');
		$('code[data-toggle]').hide();
		$('.toggle-code').on('click', function(e){
			$(this).next().slideToggle('fast', function(){
				if($(this).is(':visible')){
					$(this).prev().text('Hide code');
				} else{
					$(this).prev().text('Get code');
				}
			});

			e.preventDefault();
		});
	}
}

$(function(){
	code.init();
})

