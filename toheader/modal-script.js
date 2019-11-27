$('#theModal').on('show.bs.modal', function (e) {

    var button = $(e.relatedTarget);
    var modal = $(this);

    // load content from HTML string
    //modal.find('.modal-body').html("Nice modal body baby...");

    // or, load content from value of data-remote url
    modal.find('.modal-body').load(button.data("remote"));

});