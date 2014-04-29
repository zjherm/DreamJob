$(window).scroll(function() {
	var $winTop = $(window).scrollTop(); //current top of window
	var $winHeight = $(window).height(); //current height of window
	var $winBott = $winTop + $(window).height(); //current bottom of window
	var $mainTop = $('#main').offset().top; //location of div
	if ($winTop >= $mainTop) {
		$('#main').addClass('reached');
		$('#demo-box #thermo .fill').animate({'height':'98'}, {duration: 1000, complete: function() {
			$('#demo-box .alert.one').animate({'opacity':'1'}, {duration: 1, complete: function() {
				$('#demo-box #wifi-left .overlay').animate({'opacity':'1'}, {duration: 500, complete: function() {
					$('#demo-box #twine-box #red-twine').animate({'opacity':'1'}, 1);
					$('#demo-box #twine-box .fill').animate({'width':'153'}, {duration: 1000, complete: function() {
						$('#demo-box #wifi-right .overlay').animate({'opacity':'1'}, {duration: 500, complete: function() {
							$('#demo-box #iphone .fill').animate({'height':'62'}, {duration: 1000, complete: function() {
								$('#demo-box .alert.two').animate({'opacity':'1'}, {duration: 1});
								}
							});
							}
						});
						}
					});
					}
				});
				}
			});
			}
		});
		
	} else {
		$('#main').removeClass('reached');
	}
});