(function($){

	$(function(){



		var searchText, hightLight;

		hightLight = function($el, search) {
			var html, text, re;
			re = new RegExp(search,'i');
			$el.each(function(i, elem){
				text = $(elem).text();
				html = text.replace(re, '<span class="founded">$&</span>');
				$(elem).html(html);
			});
		}

		searchText = $("#infoPage").attr("data-search");
		if(searchText) {
			console.log("GoSearch");
			hightLight($('.onePost .title'), searchText);
			hightLight($('.onePost .desc'), searchText);
		}

		// if(searchText != '') {
		// 	result = content.replace(searchText, '<span class="founded">$&</span>');
		// 	$(".listPosts").html(result);
		// }
	});

})(jQuery);