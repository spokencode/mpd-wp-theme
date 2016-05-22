(function() {

   Breakpoints({
       xxs: {
        min: 0,
        max: 479
    },    
   xs: {
        min: 480,
        max: 767
    },
    // Small devices (tablets)
    sm: {
        min: 768,
        max: 991
    },
    // Medium devices (desktops)
    md: {
        min: 992,
        max: 1199,
    },
    // Large devices (large desktops)
    lg: {
        min: 1200,
        max: Infinity
    }
    });

   Breakpoints.on('lg', 'enter', function() {

      $('#theRibbon .fl-heading-text').circleType({
         radius: 6000,
         dir: -1
      });
      $('#theRibbon .fl-heading-text').show();

   });

   Breakpoints.on('md', 'enter', function() {

      $('#theRibbon .fl-heading-text').circleType({
         radius: 4000,
         dir: -1
      });
      $('#theRibbon .fl-heading-text').show();

   });
   
   Breakpoints.on('sm', 'enter', function() {

      $('#theRibbon .fl-heading-text').circleType({
         radius: 3000,
         dir: -1
      });
      $('#theRibbon .fl-heading-text').show();

   });

   Breakpoints.on('xs', 'enter', function() {

      $('#theRibbon .fl-heading-text').circleType({
         radius: 2000,
         dir: -1
      });
      $('#theRibbon .fl-heading-text').show();

   });
   
    Breakpoints.on('xxs', 'enter', function() {

      $('#theRibbon .fl-heading-text').circleType({
         radius: 500,
         dir: -1
      });
      $('#theRibbon .fl-heading-text').show();

   });


})();