
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1920, // slider standard width
                    height: 1080, // slider standard height
                    space: 0,
                    layout: "fullwidth",
                    speed: 50,
                    centerControls: false,
                    loop: false,
                    autoplay: false,
                    parallaxMode: "mouse"
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                MSScrollParallax.setup(slider, 50, 80, true);

               


                

              
                
            });
            /* ]]> */
        </script>