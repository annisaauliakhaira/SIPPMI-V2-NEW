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
