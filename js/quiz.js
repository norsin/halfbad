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
              if (name == 'newboxes') {
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
        if(!$(this).hasClass('submitForm')) {
            e.preventDefault();
            var emptyAnswer = 0;
            $(this).parent().children('.antwort').each(function(){
                if($(this).children('input').attr('checked')) {
                    showonlyone($(this).parent().children('.submitAnswer').attr('class').split(' ')[0]);
                    return false;
                } else {
                    if(emptyAnswer == ($(this).parent().children('.antwort').length) - 1) {
                        alert('please select an answer');
                    } else {
                        emptyAnswer = emptyAnswer + 1;
                    }

                }
            });
        }
    });
});