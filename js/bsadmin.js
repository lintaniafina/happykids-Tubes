$(document).ready(function () {
    // toggle sidebar when button clicked
    $('.sidebar-toggle').on('click', function () {
        $('.sidebar').toggleClass('toggled');
    });

    // auto-expand submenu if an item is active
    var active = $('.sidebar .active');

    if (active.length && active.parent('.collapse').length) {
        var parent = active.parent('.collapse');

        parent.prev('a').attr('aria-expanded', true);
        parent.addClass('show');
    }
});

// $(".btn[data-target='#myModal']").click(function() {
//        var columnHeadings = $("thead th").map(function() {
//                  return $(this).text();
//               }).get();
//        columnHeadings.pop();
//        var columnValues = $(this).parent().siblings().map(function() {
//                  return $(this).text();
//        }).get();
//     var modalBody = $('<div id="modalContent"></div>');
//     var modalForm = $('<form role="form" name="modalForm" action="#" method="post"></form>');
//     $.each(columnHeadings, function(i, columnHeader) {
//        var formGroup = $('<div class="form-group"></div>');
//        formGroup.append('<label for="'+columnHeader+'">'+columnHeader+'</label>');
//        formGroup.append('<input class="form-control" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'" />'); 
//        modalForm.append(formGroup);
//     });
//   modalBody.append(modalForm);
//     $('.modal-body').html(modalBody);
//     });
//     $('.modal-footer .btn-primary').click(function() {
//     $('form[name="modalForm"]').submit();
//     });

 $(document).ready(function () {
        $.getJSON("productJ.json",function (data) {
            console.log(data);
            var i = 1;
            $.each(data.product, function (i, product) {
                i++;
                $("#no"+i).html(product.no);
                $("#nama"+i).html(product.nama);
                $("#kode"+i).html(product.kode);
                $("#warna"+i).html(product.warna);
                $("#ukuran"+i).html(product.ukuran);
                $("#qty"+i).html(product.qty);
                $("#harga"+i).html(product.harga);
                console.log(i)
                if(i == 8){
                    return false;
                }
            })
            $.each(data.total, function (i, total) {
                i++;
                $("#totalqty").html(total.totalqty);
                $("#total").html(total.total);
                
                console.log(i)
                if(i == 8){
                    return false;
                }
            })
        })
    });