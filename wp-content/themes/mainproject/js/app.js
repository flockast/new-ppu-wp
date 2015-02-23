(function($){

	$(function(){

		var App = {
			init: function() {
				var base = this;

				base.addEvents();
				base.addPlugins();
			},
			addEvents: function() {
				var base = this;

				$("#previewClose").click(function(event){
					event.preventDefault();
					base.closeOpenPreview(this);
				});

				$('#buttonMore').on('click', function () {
				    $(this).button('loading')
				    base.addMorePosts(this);
				    
				});

				$("#buyProduct").submit(function(event){
					event.preventDefault();
					$(this).find(".form-group").removeClass("has-error");
					base.validateForm(this);
				});
			},
			validateForm: function(elem) {
				var base = this, errors = new Array();

				if($(elem).find("input[name=name]").val() == "") errors.push("name");
				if($(elem).find("input[name=contacts]").val() == "") errors.push("contacts");
				if(errors.length == 0) 
					base.sendMail($(elem).serialize());
				else 
					base.showErrors(errors);
			},
			showErrors: function(errors) {
				var i;
				for(i = 0; i < errors.length; i++) {
					$("input[name="+errors[i]+"]").parent(".form-group").addClass("has-error");
				}
			},
			sendMail: function(dates) {
				// ajax
			},
			addPlugins: function() {
				var base = this;

				base.startTopSlider({
					navigation : true,
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					autoPlay: 3000
				});
			},
			startTopSlider: function(config) {
				var base = this;

				base.topSlider = $("#carousel").owlCarousel(config);
			},
			closeOpenPreview: function(elem) {
				var text;

				$(elem).siblings(".singlePreview").toggle();
				text = ($(elem).text() == "Скрыть") ? "Показать" : "Скрыть";
				$(elem).text(text);
			},
			addMorePosts: function(elem) {

				// ajax
				setTimeout(function(){
					$(elem).button('reset');
				}, 1000);
			}
		}

		App.init();

	});

})(jQuery);



