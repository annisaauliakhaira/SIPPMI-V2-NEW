function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
}

$('.dropzone-wrapper').on('dragover', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
});
$('.dropzone-wrapper').on('dragleave', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
});
$('.remove-preview').on('click', function () {
    var boxZone = $(this).parents('.preview-zone').find('.box-body');
    var previewZone = $(this).parents('.preview-zone');
    var dropzone = $(this).parents('.form-group').find('.dropzone');
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
});

window.addEventListener('izitoast:confirm', event => {
    iziToast.question({
        timeout: 20000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        title: event.detail.title,
        message: event.detail.message,
        position: 'center',
        buttons: [
            ['<button><b>YES</b></button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                window.livewire.emit('destroy',event.detail.id);

            }, true],
            ['<button>NO</button>', function (instance, toast) {

                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

            }],
        ],
        onClosing: function(instance, toast, closedBy){
            console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            console.info('Closed | closedBy: ' + closedBy);
        }
    });

})
