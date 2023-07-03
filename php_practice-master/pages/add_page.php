<!-- Create Page/Data -->

<div class="row bg-white row-one">
    <div class="container col-lg-10 free-trip main-content">
        <div class="wrapper mx-5">
            <div class="col-md-12">
                <div class="box box-info">
                    <form name="addpage" method="post" action="./actions/create_page.php"
                        class="has-validation-callback">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-8">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr class="danger">
                                                <th colspan="2" class="text-center">Add Page</th>
                                            </tr>
                                            <tr>
                                                <th>User Type:</th>
                                                <td>
                                                    <input class="form-check-input" type="radio" name="user_type"
                                                        value="admin" id="flexRadioDefault1" checked>
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Admin(admin side)
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="user_type"
                                                        value="user" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        User(front side)
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>File Name:</th>
                                                <td><input type="text" name="file_name" value="" class="form-control"
                                                        data-validation="required"></td>
                                            </tr>
                                            <tr>
                                                <th>File Type:</th>
                                                <td><select name="file_type" class="form-control"
                                                        data-validation="required">
                                                        <option value="">Select</option>
                                                        <option value="pages">Pages</option>
                                                        <option value="actions">Actions</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <th>File Path:</th>
                                                <td><input type="text" name="file_path" value="" class="form-control"
                                                        data-validation="required"></td>
                                            </tr>
                                            <tr>
                                                <th>Status:</th>
                                                <td><label><input type="radio" name="status"
                                                            value="active">Active</label>
                                                    <label><input type="radio" name="status" value="deactive"
                                                            checked>DeActive</label>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="submit" class="btn btn-success" value="Add"
                                                        name="submit" id="insert">
                                                    <a href="index.php?view=read" class="btn btn-danger">Cancel</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>