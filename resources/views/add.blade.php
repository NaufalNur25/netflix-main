@section('requaire')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/browse.css') }}">
<link rel="stylesheet" href="{{ asset('css/add.css') }}">

@endsection

@include('layouts.partials.head')

@section('executeADD')
<form action="{{ url('add') }}" method="post" enctype="multipart/form-data">
@csrf
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
                        <select name="m_tag" class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                            <option selected>Choose...</option>
                            <option value="Action">Action</option>
                            <option value="Romance">Romance</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Supranatural">Supranatural</option>
                            <option value="Sport">Sport</option>
                            <option value="Horror">Horror</option>
                        </select>

                        {{-- <table>
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
                </table> --}}
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
@endsection


@extends('layouts.addout')
