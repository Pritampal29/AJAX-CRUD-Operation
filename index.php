<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">

    <title>CRUD Operation Using Ajax</title>

</head>

<body>
    <section class="main_body">
        <div class="container">
            <div class="row jumbotron p-4 bg-info text-white text-center">
                <div class="col-sm-12">
                    <h1>CRUD Operation Using JQuery-Ajax</h1>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-sm-5 mx-auto">

                    <div class="card card-body p-4 bg-warning" id="insert_card">
                        <form id="formData">
                            <h2 class="text-center text-secondary">Insert Data</h2>
                            <div class="input_fld mb-3">
                                <label for="">Name: </label>
                                <input type="text" name="f_name" id="f_name" class="form-control">
                            </div>
                            <div class="input_fld mb-3">
                                <label for="">Email: </label>
                                <input type="email" name="u_email" id="u_email" class="form-control">

                                <input type="button" value="Submit" id="submit_btn" class="btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>

                    <div class="card card-body p-4 bg-warning mb-2" id="update_card">
                    </div>

                    <input type="button" value="Insert Data" id="ins_data" name="ins_data" class="btn btn-secondary">


                </div>
                <div class="col-sm-7">
                    <div class="main_table">
                        <table class="table table-responsive table-bordered table-rounded text-center" id="data_table">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="LoadAllData">
                                <!-- <tr>
                                    <td colspan='3'><input type='button' value='Load Data' class='btn btn-success'
                                            id='loadData'></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PopUp Modal -->
            <div id="popupbox" class="text-center p-3">

            </div>
            <div id="overlay"></div>
        </div>
    </section>



    <script src="./assets/jquery.min.js"></script>
    <script src="ajax.js"></script>

</body>

</html>