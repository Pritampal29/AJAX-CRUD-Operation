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
                        $("#formData").trigger("reset");
                        LoadtdData();
                    },
                });
            }
        });

    // For Delete Data =====================================>

        $(document).on("click", "#delete-btn", function () {
            if (confirm("Once Delete Action Cannot be Undone")) {
                var id = $(this).attr("data-did");

                $.ajax({
                    url: "delete.php",
                    type: "post",
                    data: { id: id },
                    success: function (response) {
                        LoadtdData();
                    },
                });
            }
        });

    // For Showing data in Update Form ======================>

        $(document).on("click", "#edit-btn", function () {
            var eid = $(this).attr("data-eid");
            $('#insert_card').hide();
            $('#update_card').show();
            $('#ins_data').show();

            $('#ins_data').click(function(){
                $('#insert_card').show();
                $('#update_card').hide();
                $('#ins_data').hide();
            });
            
            $.ajax({
                url: "load-exist-data.php",
                type: "post",
                data: { id: eid },
                success: function (response) {
                    $("#update_card").html(response);
                },
            });
        });

    // Update data into database =============================>

        $(document).on('click','#update_btn', function () {
            var id = $('#e_id').val();
            var name = $('#u_name').val();
            var email = $('#e_email').val();

            $.ajax({
                url: 'update.php',
                type: 'post'    ,
                data: { 
                    id: id,
                    name:name,
                    email:email
                },
                success: function (response) {
                    $('#insert_card').show();
                    $('#update_card').hide();
                    $('#ins_data').hide();
                    LoadtdData();
                },
            });
        });

    // View Data =============================================>
          
        $(document).on('click','#view-btn',function(){
            $("#popupbox, #overlay").fadeIn(200);
            var vid = $(this).attr('data-vid');

            $("#popupbox, #overlay").click(function(){
                $("#popupbox, #overlay").hide();
            });

            $.ajax({
                url: "view_data.php",
                type: "post",
                data: { id: vid },
                success: function(response){
                    $('#popupbox').html(response);
                }
            });
        });


});
