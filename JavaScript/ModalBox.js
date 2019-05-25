function toggleModal(modalClass){
    $(modalClass).toggleClass('modal_open');
}
$('.Modal').on({
    click: function(event){
        if(event.target == this){
            toggleModal('.barcodeModal');
        }
    }
})