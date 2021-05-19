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

window.addEventListener('izitoast:minimenu1', event => {
    iziToast.show({
        theme: 'dark',
        icon: 'icon-person',
        progressBar: false,
        title: event.detail.title,
        position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
        progressBarColor: 'rgb(0, 255, 184)',
        buttons: [
            ["<button class='btn btn-warning'>Edit</button>", function (instance, toast) {
                var url_edit =  "/admin/skema-penelitian-periode/"+event.detail.id+"/edit";
                window.location.href = url_edit;
            }, true], // true to focus
            ["<button class='btn btn-danger'>Hapus</button>", function (instance, toast) {
                instance.hide({
                    transitionOut: 'fadeOutUp',
                    onClosing: function(instance, toast, closedBy){
                        iziToast.question({
                            timeout: 20000,
                            close: false,
                            overlay: true,
                            displayMode: 'once',
                            id: 'question',
                            zindex: 999,
                            title: "Konfirmasi",
                            message: "Yakin ingin menghapus data ?",
                            position: 'center',
                            buttons: [
                                ['<button><b>YES</b></button>', function (instance, toast) {

                                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                                    window.livewire.emit('destroyPeriode',event.detail.id);

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
                        console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                    }
                }, toast, 'buttonName');

            }, true], // true to focus
            ["<button class='btn'>Close</button>", function (instance, toast) {
                instance.hide({
                    transitionOut: 'fadeOutUp',
                    onClosing: function(instance, toast, closedBy){
                        console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                    }
                }, toast, 'buttonName');

            }]
        ],
        onOpening: function(instance, toast){
            console.info('callback abriu!');
        },
        onClosing: function(instance, toast, closedBy){
            console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
        }
    });
});

window.addEventListener('izitoast:minimenu2', event => {
    iziToast.show({
        theme: 'dark',
        icon: 'icon-person',
        progressBar: false,
        title: event.detail.title,
        position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
        progressBarColor: 'rgb(0, 255, 184)',
        buttons: [
            ["<button class='btn btn-warning'>Edit</button>", function (instance, toast) {
                var url_edit =  "/admin/skema-penelitian-question/"+event.detail.id+"/edit";
                window.location.href = url_edit;
            }, true], // true to focus
            ["<button class='btn btn-danger'>Hapus</button>", function (instance, toast) {
                instance.hide({
                    transitionOut: 'fadeOutUp',
                    onClosing: function(instance, toast, closedBy){
                        iziToast.question({
                            timeout: 20000,
                            close: false,
                            overlay: true,
                            displayMode: 'once',
                            id: 'question',
                            zindex: 999,
                            title: "Konfirmasi",
                            message: "Yakin ingin menghapus data ?",
                            position: 'center',
                            buttons: [
                                ['<button><b>YES</b></button>', function (instance, toast) {

                                    instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                                    window.livewire.emit('destroyQuestion',event.detail.id);

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
                        console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                    }
                }, toast, 'buttonName');

            }, true], // true to focus
            ["<button class='btn'>Close</button>", function (instance, toast) {
                instance.hide({
                    transitionOut: 'fadeOutUp',
                    onClosing: function(instance, toast, closedBy){
                        console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                    }
                }, toast, 'buttonName');

            }]
        ],
        onOpening: function(instance, toast){
            console.info('callback abriu!');
        },
        onClosing: function(instance, toast, closedBy){
            console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
        }
    });
});
