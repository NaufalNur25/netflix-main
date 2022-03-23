<body>
    <a href="/edit/{back}" class="btn btn-danger mt-2 ms-1">< back</a>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="col-lg-9 px-3 ">
        <div class="row justify-content-end">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-xl-10">
                        <div class="card-header">FourFlix</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body"><br><br><br><br>
                    <div class="mb-3 px-3 mt-5">
                        <img src="" alt="No Images" width="200"
                            class="img-fluid"><br>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Post Image</label>
                        <input class="form-control" name="filename" type="file" id="formFile" value="">

                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Movies Name</label>
                        <input type="text" name="m_title" class="form-control" id="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Rating</label>
                        <input type="text" name="author" class="form-control" id="rating" value="">
                    </div>

                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" name="publisher" class="form-control" id="publisher" value="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Genre</label><br>
                        <table>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Action</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Romance</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Comedy</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                            value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">Supranatural</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                            value="option5">
                                        <label class="form-check-label" for="inlineCheckbox5">Sport</label>
                                    </div>
                                </td>
                                <td>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                            value="option6">
                                        <label class="form-check-label" for="inlineCheckbox6">Horror</label>
                                    </div>
                                </td>
                            </tr>

                    </div>
                </div>
                </table>
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea class="form-control" rows="10" id="synopsis" name="synopsis" value=""></textarea>
            </div>
            <div class="lg-4">
                <div class="row justify-content-end">
                    <input type="submit" class="btn btn-danger" value="Add Movies">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </form>

    </div>
</body>

</html>
