$(document).ready(function () {


  // For Data Fetch =====================================>

  // $('#loadData').click(function(){
  function LoadtdData() {
    $.ajax({
      url: "backend.php",
      type: "post",
      success: function (response) {
        $("#data_table").fadeIn(1000);
        $("#LoadAllData").html(response);
      },
    });
  }
  LoadtdData();
  // });

  // For Insert Data =====================================>

  $("#submit_btn").click(function () {
    var name = $("#f_name").val();
    var email = $("#u_email").val();

    if (name != "" && email != "") {
      $.ajax({
        url: "insert.php",
        type: "post",
        data: {
          name: name,
          email: email,
        },
        success: function (response) {
          LoadtdData();
          $("#formData").trigger("reset");
        },
      });
    }
  });

  // For Delete Data =====================================>

  $(document).on("click", "#delete-btn", function (e) {
    if (confirm("Once Delete Action Cannot be Undone")) {

      var id = $("#delete-btn").attr("data-id");
      var element = this;

      $.ajax({
        url: "delete.php",
        type: "post",
        data: { id: id },
        success: function (response) {
          $(element).closest("tr").fadeOut(300);
        },
      });
      
    }
  });




});
