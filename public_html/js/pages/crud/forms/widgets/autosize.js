/******/ (() => { // webpackBootstrap
/*!************************************************************!*\
  !*** ../demo3/src/js/pages/crud/forms/widgets/autosize.js ***!
  \************************************************************/
/*! unknown exports (runtime-defined) */
/*! runtime requirements:  */
// Class definition

var KTAutosize = function () {

    // Private functions
    var demos = function () {
        // basic demo
        var demo1 = $('#kt_autosize_1');
        var demo2 = $('#kt_autosize_2');

        autosize(demo1);

        autosize(demo2);
        autosize.update(demo2);
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {
    KTAutosize.init();
});

/******/ })()
;
//# sourceMappingURL=autosize.js.map