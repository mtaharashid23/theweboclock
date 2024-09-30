// Created for an Articles on:
// https://www.html5andbeyond.com/bubbling-text-effect-no-canvas-required/

jQuery(document).ready(function($){
 
    // Define a blank array for the effect positions. This will be populated based on width of the title.
    var bArray = [];
    // Define a size array, this will be used to vary bubble sizes
    var sArray = [4,6,8,10];
 
    // Push the header width values to bArray
    for (var i = 0; i < $('.bubbles').width(); i++) {
        bArray.push(i);
    }
     
    // Function to select random array element
    // Used within the setInterval a few times
    function randomValue(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }
 
    // setInterval function used to create new bubble every 350 milliseconds
    setInterval(function(){
         
        // Get a random size, defined as variable so it can be used for both width and height
        var size = randomValue(sArray);
        // New bubble appeneded to div with it's size and left position being set inline
        // Left value is set through getting a random value from bArray
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
         
        // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
        // Callback function used to remove finsihed animations from the page
        $('.individual-bubble').animate({
            'top': '100%',
            'opacity' : '-=1'
        }, 3000, function(){
            $(this).remove()
        }
        );
 
 
    }, 350);
 
});

$(document).ready(function() {
    
    if($('#demo-text').length != 0){
        var $demoText = $("#demo-text");
        console.log($demoText);
        $demoText.html($demoText.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
        setInterval(startAnimation, 2000)
        function startAnimation() {
            TweenLite.set( {
                autoAlpha: 0
            });
            TweenMax.staggerFromTo($demoText.find("span"), 0.4, {
                autoAlpha: 0,
                scale: 7
            }, {
                autoAlpha: 1,
                scale: 1
            }, 0.1, reset);
        }
    }
    
    var $startAnim = $("#start-anim");

    function reset() {
        TweenMax.to($startAnim, 1, {
            autoAlpha: 1
        });
    }
});

$(document).ready(function() {
    
    if($('#demo-text1').length != 0){
        var $demoText = $("#demo-text1");
        console.log($demoText);
        $demoText.html($demoText.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
        setInterval(startAnimation, 2000)
        function startAnimation() {
            TweenLite.set( {
                autoAlpha: 0
            });
            TweenMax.staggerFromTo($demoText.find("span"), 0.4, {
                autoAlpha: 0,
                scale: 7
            }, {
                autoAlpha: 1,
                scale: 1
            }, 0.1, reset);
        }
    }
    
    var $startAnim = $("#start-anim");

    function reset() {
        TweenMax.to($startAnim, 1, {
            autoAlpha: 1
        });
    }
});

"use strict";
if($('.black').length != 0){
    let black = document.querySelector('.black');
    window.onmousemove = function(e) {
        let x = e.clientX;
        black.style.left = x + 'px';
    }
}
