<body>
    <form action="{{ url('app', 'movie') }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <a href="{{ url('app', 'movie') }}" class="btn btn-danger mt-4 ms-3">< back</a>
        <img src="/images/fourflix-logo.png" height="50px" width="170px" alt="site logo main" style="margin-left:450px; margin-top:20px;"></img>
        <div class="col-lg-9 px-3 ">
            <div class="row justify-content-end">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-xl-10">
                            <div class="card-header"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body"><br><br>
                        <div class="mb-3">
                            <label for="title" class="form-label">Movie Name</label>
                            <input type="text" name="m_title" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Movie Time</label>
                            <input type="number" name="m_time" class="form-control" id="rating">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Release</label>
                            <input type="number" name="m_release" class="form-control" id="rating">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Age</label>
                            <input type="number" name="m_age" class="form-control" id="rating">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Rating</label>
                            <input type="text" name="m_rate" class="form-control" id="rating">
                        </div>

                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" name="m_publis" class="form-control" id="publisher">
                        </div>
                        <div class="mb-3">
                                <label for="formFile" class="form-label">Post Image</label>
                                <input class="form-control" name="filename" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Genre</label><br>

                                <table>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Action" name="m_tag">
                                                <label class="form-check-label" for="inlineCheckbox1">Action</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Romace" name="m_tag">
                                                <label class="form-check-label" for="inlineCheckbox2">Romance</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Comedy" name="m_tag">
                                                <label class="form-check-label" for="inlineCheckbox3">Comedy</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Supranatural" name="m_tag">
                                                <label class="form-check-label" for="inlineCheckbox4">Supranatural</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Sport" name="m_tag">
                                                <label class="form-check-label" for="inlineCheckbox5">Sport</label>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Horror" name="m_tag">
                                                <label class="form-check-label" for="inlineCheckbox6">Horror</label>
                                            </div>
                                        </td>
                                    </tr>

                                </div>
                            </div>
                        </table>
                        <div class="mb-3">
                                <label for="synopsis" class="form-label">Synopsis</label>
                                <textarea class="form-control" rows="10" id="synopsis" name="m_desc"></textarea>
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
