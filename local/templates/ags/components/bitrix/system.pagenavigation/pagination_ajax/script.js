/***********************
 Ajax load BEGIN
 ***********************/
$(function($){
	$(document).on('click', '.load_more', function(){
		const targetContainer = $('.js-container');
		const targetContainerPagination = $('.js-pagination');
		const url =  $('.load_more').attr('data-url');
		const data = {
			ajax: 1
		};

		if (url !== undefined) {
			$.ajax({
				type: 'GET',
				url: url,
				cache: false,
				async: false,
				data: data,
				dataType: 'html',
				success: function(result){
					$('.load_more').remove();
					const elements = $(result).find('.js-item');
					const pagination = $(result).find('.load_more');
					targetContainer.append(elements);
					targetContainerPagination.append(pagination);
					init_fancy__video();
					lazyLoad();
					lazyLoadBg();
				}
			})
		}
	});
});
/***********************
 Ajax load END
 ***********************/