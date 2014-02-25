/*$(window).load(function(){

		$(".radioArrow[type='radio']").click(function(){
			if ($(this).parent('.antwort').nextAll("a.button").length > 0) {
				$(this).parent('.antwort').nextAll("a.button").click();
			} else {
				$(this).parent('.antwort').nextAll("button.button").click();
			}
			
		});

	});*/
$(document).ready(function(){
    function showonlyone(thechosenone) {
        var newboxes = document.getElementsByTagName("div");
        for(var x=0; x<newboxes.length; x++) {
              name = newboxes[x].getAttribute("class");
              if (name.indexOf('newboxes') > -1){
                    if (newboxes[x].id == thechosenone) {
                          if (newboxes[x].style.display == 'block') {
                                newboxes[x].style.display = 'none';
                          }
                          else {
                                newboxes[x].style.display = 'block';
                          }
                    }else {
                          newboxes[x].style.display = 'none';
                    }
              }
        }
    }
    
    $('.submitAnswer').click(function(e){
        e.preventDefault();
        var emptyAnswer = 0;       
        var emptyLastQuestion = false;
        function checkEmptyAnswers(elem, finalQuestion) {

            elem.parent().children('.antwort').each(function(){
                if($(this).children('input').attr('checked')) {
                    showonlyone($(this).parent().children('.submitAnswer').attr('class').split(' ')[0]);
                    return false;
                } else {
                    if(emptyAnswer == ($(this).parent().children('.antwort').length) - 1) {
                        alert('Wähle eine Antwort aus!');
                        if(finalQuestion) {
                            emptyLastQuestion = true;
                        }
                    } else {
                        emptyAnswer = emptyAnswer + 1;
                    }

                }
            });
        }
        
	if(!$(this).hasClass('submitForm')) {
		checkEmptyAnswers($(this));
		} else {
			e.preventDefault();
			checkEmptyAnswers($(this), true);
			if(emptyLastQuestion != true) {
				$('.quizform').submit();
		}
	}
	$('html,body').animate({
		scrollTop: 0
	}, 300);
    });
});
