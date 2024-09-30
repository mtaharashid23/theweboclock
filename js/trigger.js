// Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
    $animatables.each(function(i) {
       var $animatable = $(this);
      if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
      }
    });

  };
  
  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});



/**
 * The speed of the animations and sizes are
 * currently generated at random on load.
 *
 * So if you want to see some different ones,
 * refresh the page!
 *
**/

// Get a specific item from within the blob
const getNode = (nodeIndex) => {
  const nodes = document.querySelectorAll('.node');
  return nodes[nodeIndex] || null;
}

// Set the colour of an item within the blob
const setNodeColour = (nodeIndex, color) => {
  const node = getNode(nodeIndex);
  if (node) {
    node.style.backgroundColor = color;
  }
};

// Set a random border radius
const maxBorderRadius = 80;
const minBorderRadius = 30;

const randomBorderRadius = () => {
  return ['topLeft', 'topRight', 'bottomRight', 'bottomLeft']
    .map(() => `${Math.random() * (maxBorderRadius - minBorderRadius) + minBorderRadius}%`)
    .join(' ');
}

// Set blob stuff up
const nodes = document.querySelectorAll('.node');
nodes.forEach((node) => {
  node.style.animationDuration = `${Math.random() * (5 - 3) + 2}s`;
  node.style.borderRadius = randomBorderRadius();
  node.style.animationDirection = Math.random() > 0.5 ? 'reverse' : 'normal';
});


// Set up GUI stuff
const controller = new window.dat.GUI({
  width: 250,
  useLocalStorage: true,
});

const config = {
  colour1: '#fff',
  colour2: '#ff0000',
  colour3: '#ffff00',
  colour4: '#0000ff',
}

const coloursFolder = controller.addFolder('Colours');

coloursFolder.addColor(config, 'colour1')
  .name('Colour 1')
  .onChange((colour) => setNodeColour(0, colour));

coloursFolder.addColor(config, 'colour2')
  .name('Colour 2')
  .onChange((colour) => setNodeColour(1, colour));

coloursFolder.addColor(config, 'colour3')
  .name('Colour 3')
  .onChange((colour) => setNodeColour(2, colour));

coloursFolder.addColor(config, 'colour4')
  .name('Colour 4')
  .onChange((colour) => setNodeColour(3, colour));