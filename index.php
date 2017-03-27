<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MediaPLus - тестовое задание</title>
	<link rel="stylesheet/less" href="style.less">
	<script src="js/less.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<div id="main_block">
		<div class="block">
			<div class="block_inside">
				1
			</div>
		</div>
		<div class="block">
			<div class="block_inside">	
				2
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				3
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				4
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				5
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				6
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				7
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				8
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				9
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				10
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				11
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				12
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				13
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				14
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				15
			</div>
		</div>
		<div class="block">
			<div class="block_inside">
				16
			</div>
		</div>

		<div class="btn-block">
			<button id="btn_start">start</button>
		</div>
	</div>

	<div id="console_block">
	</div>


	<script>
		//событие по клику на кнопку
		$('#btn_start').click(function(){
			//меняем текст кнопки
			$(this).text('In progress'); 
			//пишем в блок "консоль"
			$('#console_block').html('---progress start--- <br/>'); 
			// console.log('---progress start---');
		
		//вызов функции переворота квадратов
		rotate_blocks(); 
		
		//считаем сколько всего квадратов с текстом
		$count_elements = $('.block_inside').length; 
			
		//рассчитываем время задержки для вывода финального сообщения	
		$totalTimeOut = ($count_elements) * 200 +1000; 
		//выводим в "консоль" финальное сообщение, и переворачиваем квадраты в исходное состояние
		setTimeout(function() {  
			// console.log('---progress stop---');
			$('#console_block').append('---progress stop--- <br/>');  
			alert('succes');
			rotate_at_start();
			$('#btn_start').text('start');

		}, $totalTimeOut);
	});
		
		//функция переворота блоков
		function rotate_blocks(){
			//переменная для счетчика элементов 
			$num =0;
			//для каждого блока с классом "block_inside" выполнить
			$('.block_inside').each(function(){
				//переменная для расчета времени задержки перед переворотом следующего блока
				$time = $num * 200;
				//переменная содержащая текущий блок
				$elem = $(this);
				//переменная в которую выводится содержимое блоков без пробелов (для вывода в "консоль")
				$id = $.trim($(this).text());
				//присваивание класса "rotated_block" для каждого последующего блока, с с рассчитанной задержкой
				setTimeout(function($elem,$id) {
					//присваиваем элементу класс
					$elem.addClass('rotated_block');
				//console.log('cell '+$id+ ' animation START');
					
				//добавляем в "консоль" запись о начале анимации
				$('#console_block').append('cell '+$id+ ' animation START <br/>');
				//через задержку пишем в "консоль" сообщение о окончании анимации
				setTimeout(function($id) {
				//console.log('cell '+$id+ ' animation END');
				$('#console_block').append('cell '+$id+ ' animation END <br/>');
			}, 1000,$id);
			}, $time,$elem,$id);
				$num++;
			});
		}
		
		//функция возвращающая блоки в исходное состояние
		function rotate_at_start(){
			$('.block_inside').each(function(){
				$(this).removeClass('rotated_block');
			});
		}
	</script>

</body>
</html>
