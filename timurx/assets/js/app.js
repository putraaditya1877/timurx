// $(document).ready(function () {
//   //untuk memanggil plugin select2
//   $("#topcustomer").select2({
//     placeholder: "pilih topcustomer",
//     language: "id",
//   });

//   //saat pilihan customer di pilih, maka akan mengambil data nama customer
//   //di topcustomer.php menggunakan ajax
//   $("#topcustomer").change(function () {
//     $("img#load1").show();
//     var id = $(this).val();
//     $.ajax({
//       type: "POST",
//       dataType: "html",
//       url: "data-wilayah.php?jenis=kota",
//       data: "id=" + id,
//       success: function (msg) {
//         $("select#customer").html(msg);
//         $("img#load1").hide();
//         getAjaxtopcustomer();
//       },
//     });
//   });
// });

$(function () {
  $(".droptop").on("click", function () {
    $("#droptoplabel").html("tampilkan customer");
    const id = $("#data").val();
    // console.log(id);

    $.ajax({
      url: "controllers/topcustomer/getdroptop",
      // data: { id: id },
      method: "post",
      dataType: "json",

      success: function (data) {
        console.log(data);
        // $("#nama").val(data.id);
        // $("#nama").val(data.namacustomer);
        // $("#deskripsi").val(data.deskripsi);
        // $("#gambarcustomer").val(data.gambarcustomerPrev);
      },
    });
  });
});
