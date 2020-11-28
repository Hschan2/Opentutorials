var Links = {
		setColor:function(color) {
			// var alist = document.querySelectorAll('a');
			// var i = 0;
			// 	while(i<alist.length){
			// 		alist[i].style.color = color;
			// 		i += 1;
			// 	}

			// 위에 코드를 Jquery 로 쉽게 사용
			$('a').css('color', color);
			}
		}
		var Body = {
			setColor:function (color){
				//document.querySelector('body').style.color = color;
				$('body').css('color', color);
			},
			setBackgroundColor:function (color){
				//document.querySelector('body').style.backgroundColor = color;
				$('body').css('backgroundColor', color);
			}
		}
		/*
		function setColor(color) {
			var target = document.querySelector('body');
			target.style.color = color;
		}
		*/
		function nightDayhandler(self) {
			var target = document.querySelector('body');
				//self 대신 this를 쓰면 여기서의 this는 전역변수로 인식
				//그래서 this 대신 매개변수 사용 
				if(self.value == 'night'){
					Body.setBackgroundColor("black");
					Body.setColor('white');
					self.value = 'day';

					Links.setColor('white');
				} else {
					Body.setBackgroundColor("white");
					Body.setColor('black');
					self.value = 'night';

					Links.setColor('blue');
				}
		}