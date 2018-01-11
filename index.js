    /*     ///////      TOGGLE THE MENU BAR FUNCTION           //////////   */

    function ToggleMenuBar() {
        var x = document.getElementById("menu-bar");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    /*    ////////   TOGGLE RAIN FUNCTION      /////////    */

    $(document).ready(function () {

        $(".stop-the-rain").on('click', function () {
            $(".rain-container").toggleClass('toggleRain');
            $(".rain-container").toggleClass('color');
            
            

            $(".stop-the-rain").text(function (i, text) {

                return text === "Light Me Up" ? " Make It Rain!" : "Light Me Up"
            })


        });

    });



    /*     ///////   WRITING QUOTE ANIMATION     ///////// */


    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function typeWrite(span) {
        $('#climbed').addClass('cursor')
        var text = $('#climbed').text();
        var randInt = 0
        for (var i = 0; i < text.length; i++) {
            randInt += parseInt(randomIntFromInterval(30, 170));
            var typing = setTimeout(function (y) {
                $('#climbed').append(text.charAt(y));
            }, randInt, i);
        };
        setTimeout(function () {
            $('#climbed').removeClass('cursor');
        }, randInt + 2500);
    }

    $(document).ready(function () {
        typeWrite('climbed');
    });


    /////////     STICKMAN CLICK ANIMATIONS          //////////

$(document).ready(function() {


    $("#run-div").click(function(){


        $('.running').toggleClass('runningAnimation');
    })

   

})

$(document).ready(function() {
    
    
        $("#jump-div").click(function(){
    
    
            $('.jumping').toggleClass('jumpingAnimation');
        })
    
       
    
    })

    $(document).ready(function() {
        
        
            $("#fall-div").click(function(){
        
        
                $('.falling').toggleClass('fallingAnimation');
            })
        
           
        
        })