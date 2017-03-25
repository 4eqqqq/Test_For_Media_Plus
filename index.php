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
		$('#btn_start').click(function(){
			$(this).text('In progress');
			$('#console_block').html('---progress start--- <br/>');
			// console.log('---progress start---');

		rotate_blocks();

		$count_elements = $('.block_inside').length;
		$totalTimeOut = ($count_elements) * 200 +1000;
		setTimeout(function() {
			// console.log('---progress stop---');
			$('#console_block').append('---progress stop--- <br/>');
			alert('succes');
			rotate_at_start();
			$('#btn_start').text('start');

		}, $totalTimeOut);
	});

		function rotate_blocks(){
			$num =0;
			$('.block_inside').each(function(){
				$time = $num * 200;
				$elem = $(this);
				$id = $.trim($(this).text());
				setTimeout(function($elem,$id) {
					$elem.addClass('rotated_block');
				//console.log('cell '+$id+ ' animation START');
				$('#console_block').append('cell '+$id+ ' animation START <br/>');

				setTimeout(function($id) {
				//console.log('cell '+$id+ ' animation END');
				$('#console_block').append('cell '+$id+ ' animation END <br/>');
			}, 1000,$id);
			}, $time,$elem,$id);
				$num++;
			});
		}

		function rotate_at_start(){
			$('.block_inside').each(function(){
				$(this).removeClass('rotated_block');
			});
		}
	</script>

</body>
</html>