jQuery(document).ready(function ($) {

    var jssor_1_SlideoTransitions = [
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-392,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:119,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,x:2,y:169,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,x:1,y:200,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:301,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-190,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-158,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-103,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,x:-366,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:119,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,x:2,y:169,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,x:1,y:200,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,x:205,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-190,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-158,o:1}],
      [{b:-1,d:1,o:-1},{b:0,d:800,y:-103,o:1}]
    ];

    var jssor_1_options = {
      $AutoPlay: 1,
      $SlideDuration: 800,
      $SlideEasing: $Jease$.$OutQuint,
      $CaptionSliderOptions: {
        $Class: $JssorCaptionSlideo$,
        $Transitions: jssor_1_SlideoTransitions
      },
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 3480;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
});
