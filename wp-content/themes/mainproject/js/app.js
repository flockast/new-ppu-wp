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
				    $(this).addClass('disabled').text('Загрузка...');
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
				var text, newHtml;

				$(elem).siblings(".singlePreview").toggle();
				newHtml = ($(elem).children('span').text() == 'Скрыть') ? '<i class="fa fa-eye"></i> <span>Показать</span>' : '<i class="fa fa-eye-slash"></i> <span>Скрыть</span>';
				$(elem).html(newHtml);
			},
			addMorePosts: function(elem) {
				var base = this, countPosts,catTitle;

				countPosts = $(".onePost").length;
				catTitle   = ($(elem).attr('data-cat-title')) ? $(elem).attr('data-cat-title') : "";

				$.ajax({
					type: 'POST',
					url: '/wp-admin/admin-ajax.php',
					data: 'action=AddMorePosts&countPosts=' + countPosts + '&catTitle=' + catTitle,
					success: function(data) {
						if(data) {
							$(".listPosts").append(data);
							$(elem).removeClass('disabled').text('Еще интересных статей');
						} else {
							$(elem).addClass('disabled').text('Продолжение следует...');
						}
					}
				});
			}
		}

		App.init();

	});

})(jQuery);



