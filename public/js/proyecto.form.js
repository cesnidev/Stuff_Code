    $(function() {
        var current_fs, next_fs, previous_fs; 

        var left, opacity, scale; 

        var animating,pass=false; 

        $('#basicuser')
          .on('invalid.fndtn.abide', function () {
            pass=false;
            console.log('basicuser error');
          })
          .on('valid.fndtn.abide', function () {
            pass=true;
            console.log('basicuser pass');
            $(".nextbasic").trigger( "click" );
          });
        $('#profile')
          .on('invalid.fndtn.abide', function () {
            pass=false;
            console.log('profile error');
          })
          .on('valid.fndtn.abide', function () {
            pass=true;
            console.log('prpfile pass');
            pass=true;
            $(".nextbasic").trigger( "click" );
          });
        /*$('#experience')
          .on('invalid.fndtn.abide', function () {
            pass=false;
          })
          .on('valid.fndtn.abide', function () {
            pass=true;
            $(".next").trigger( "click" );
          });
        $('#availability')
          .on('invalid.fndtn.abide', function () {
            pass=false;
          })
          .on('valid.fndtn.abide', function () {
            pass=true;
            $(".next").trigger( "click" );
          });
        $('#legal')
          .on('invalid.fndtn.abide', function () {
            pass=false;
          })
          .on('valid.fndtn.abide', function () {
            pass=true;
            $(".next").trigger( "click" );
          });*/

        $(".nextbasic").click(function() {
            console.log('Valor Pass: '+pass);
            if(pass){
            if (animating) return false;

            animating = true;

            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();


            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            next_fs.show();
            //pass=false;

            current_fs.animate({
                opacity: 0
            }, {

                step: function(now, mx) {

                    scale = 1 - (1 - now) * 0.2;

                    left = (now * 50) + "%";

                    opacity = 1 - now;

                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });

                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });

                },

                duration: 800,

                complete: function() {

                    current_fs.hide();

                    animating = false;

                },

                easing: 'easeInOutBack'

            });
        }else
        {
            console.log('Forma invalida');
            /*$("#profile div").removeClass("error");
             $("#profile div div").removeClass("error");
             $("#profile div div div").removeClass("error");
             $("#profile div div div div").removeClass("error");*/
        }
        
        });



       /* $(".previous").click(function() {

            if (animating) return false;

            animating = true;



            current_fs = $(this).parent().parent();

            previous_fs = $(this).parent().parent().prev();



            //de-activate current step on progressbar

            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");



            //show the previous fieldset

            previous_fs.show();
            pass=false;
            //hide the current fieldset with style

            current_fs.animate({
                opacity: 0
            }, {

                step: function(now, mx) {

                    //as the opacity of current_fs reduces to 0 - stored in "now"

                    //1. scale previous_fs from 80% to 100%

                    scale = 0.8 + (1 - now) * 0.2;

                    //2. take current_fs to the right(50%) - from 0%

                    left = ((1 - now) * 50) + "%";

                    //3. increase opacity of previous_fs to 1 as it moves in

                    opacity = 1 - now;

                    current_fs.css({
                        'left': left
                    });

                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });

                },

                duration: 800,

                complete: function() {

                    current_fs.hide();

                    animating = false;

                },

                //this comes from the custom easing plugin

                easing: 'easeInOutBack'

            });
        });*/



        $(".submit").click(function() {

            return false;

        })



    });