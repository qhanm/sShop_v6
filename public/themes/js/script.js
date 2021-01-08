$(document).on('pjax:send', function() {
    $('#qhn-loader').show()
})
$(document).on('pjax:complete', function() {
    $('#qhn-loader').hide()
})
