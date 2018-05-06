jQuery(function() {
    document.formvalidator.setHandler('isamount',
        function (value) {
            regex=/^[^0-9]+$/;
            return regex.test(value);
        });
});