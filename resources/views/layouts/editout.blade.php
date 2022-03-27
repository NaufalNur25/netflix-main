<body>
    @if (session('errors'))
        <p class="text-primary">{{session('errors')}}</p>
    @endif
    <a href="/single/{{ $item->id }}" class="btn btn-danger mt-2 ms-1">< back</a>
    <img src="/images/fourflix-logo.png" height="50px" width="170px" alt="site logo main" style="margin-left:450px; margin-top:20px;"></img>
    <form action="{{ url('edit', $item -> id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="col-lg-9 px-3 ">
        <div class="row justify-content-end">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-xl-10">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body"><br><br><br><br>
                    <div class="mb-3 px-3 mt-5">
                        <img src="{{ asset('/image/'.$item -> filename)}}" alt="No Images" width="200"
                            class="img-fluid"><br>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Post Image</label>
                        <input class="form-control" name="filename" type="file" id="formFile" value="{{ asset('/image/'. $item -> filename) }}">

                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Movies Name</label>
                        <input type="text" value="{{ $item -> m_title }}" name="m_title" class="form-control" id="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Movies Duration</label>
                        <input type="text" value="{{ $item -> m_time }}" name="m_time" class="form-control" id="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Release</label>
                        <input type="number" value="{{ $item -> m_release }}" name="m_release" class="form-control" id="rating">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Age</label>
                        <input type="number" value="{{ $item -> m_age }}" name="m_age" class="form-control" id="rating">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Rating</label>
                        <input type="text" value="{{ $item -> m_rate }}" name="m_rate" class="form-control" id="rating" value="">
                    </div>

                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" value="{{ $item -> m_publis }}" name="m_publis" class="form-control" id="publisher" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Genre</label><br>
                        <table>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="Action" name="m_tag" @if ($item -> m_tag == 'Action') {{ 'checked' }}
                                            @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">Action</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="Romance" name="m_tag" @if ($item -> m_tag == 'Romance') {{ 'checked' }}
                                            @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Romance</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="Comedy" name="m_tag" @if ($item -> m_tag == 'Comedy') {{ 'checked' }}
                                            @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Comedy</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                            value="Supranatural" name="m_tag" @if ($item -> m_tag == 'Supranatural') {{ 'checked' }}
                                            @endif>
                                        <label class="form-check-label" for="inlineCheckbox4">Supranatural</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                            value="Sport" name="m_tag" @if ($item -> m_tag == 'Sport') {{ 'checked' }}
                                            @endif>
                                        <label class="form-check-label" for="inlineCheckbox5">Sport</label>
                                    </div>
                                </td>
                                <td>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                            value="Horror" name="m_tag" @if ($item -> m_tag == 'Horror') {{ 'checked' }}
                                            @endif>
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
                <textarea class="form-control" rows="10" id="synopsis" name="m_desc" >{{ $item-> m_desc}}</textarea>
            </div>
            <div class="lg-4">
                <div class="row justify-content-end">
                    <button type="submit" class="btn btn-danger row-12 mb-3" name="update">Update Movie</button>
            </form>
            <form action="" method="POST">
                @method('delete')
                @csrf
                    <button type="submit" class="btn btn-danger row-12 mb-3" name="delete" onclick="return confirm('Are You Sure?')"></button>
            </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    </div>
</body>

</html>
