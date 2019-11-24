					$(function(){
					  $('#my_form').on('submit', function(e){
						e.preventDefault();
						var $that = $(this),
						formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
						$.ajax({
							url: 'https://agse.ru/wrike_api/Wrike_api.php', // путь к php-обработчику
							type: 'POST', // метод передачи данных
							dataType: 'json', // тип ожидаемых данных в ответе
							contentType: false, // важно - убираем форматирование данных по умолчанию
							processData: false, // важно - убираем преобразование строк по умолчанию
							data: formData,
							success: function(json){
							if(json){
							  // тут что-то делаем с полученным результатом
							}
						  },
						   beforeSend: function(){ // Функция вызывается перед отправкой запроса
							console.debug('Запрос отправлен. Ждите ответа.');
							$('.modal-body').html( '<b style="display:block; text-align:center; margin-top:40px; font: 18px "Comfortaa", sans-serif;">Запрос отправляется......</b>' );
							// тут можно, к примеру, начинать показ прелоадера, в общем, на ваше усмотрение
							  },
							  error: function(req, text, error){ // отслеживание ошибок во время выполнения ajax-запроса
								$('.modal-body').html( '<b style="display:block; text-align:center; margin-top:40px; font: 18px "Comfortaa", sans-serif;">Ошибка отправки!</b>' );
							  },
							  complete: function(){ // функция вызывается по окончании запроса
								console.debug('Запрос полностью завершен!');
								$('.mgc-calc-modal').remove();
								// тут завершаем показ прелоадера, если вы его показывали
							}
							
						});
					  });
					});